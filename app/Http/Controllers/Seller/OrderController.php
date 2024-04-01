<?php

namespace App\Http\Controllers\Seller;

use App\Models\Order;
use App\Models\ProductStock;
use App\Models\SmsTemplate;
use App\Models\User;

use App\Utility\NotificationUtility;
use App\Utility\SmsUtility;
use Illuminate\Http\Request;
use Auth;
use DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource to seller.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payment_status = null;
        $delivery_status = null;
        $sort_search = null;
        $orders = DB::table('orders')
            ->orderBy('id', 'desc')
            ->where('seller_id', Auth::user()->id)
            ->select('orders.id')
            ->distinct();

        if ($request->payment_status != null) {
            $orders = $orders->where('payment_status', $request->payment_status);
            $payment_status = $request->payment_status;
        }
        if ($request->delivery_status != null) {
            $orders = $orders->where('delivery_status', $request->delivery_status);
            $delivery_status = $request->delivery_status;
        }
        if ($request->has('search')) {
            $sort_search = $request->search;
            $orders = $orders->where('code', 'like', '%' . $sort_search . '%');
        }

        $orders = $orders->paginate(15);

        foreach ($orders as $key => $value) {
            $order = Order::find($value->id);
            $order->viewed = 1;
            $order->save();
        }

        return view('seller.orders.index', compact('orders', 'payment_status', 'delivery_status', 'sort_search'));
    }

    public function show($id)
    {
        $order = Order::findOrFail(decrypt($id));
        $order_shipping_address = json_decode($order->shipping_address);
        $delivery_boys = User::where('city', $order_shipping_address->city)
            ->where('user_type', 'delivery_boy')
            ->get();

        $order->viewed = 1;
        $order->save();
        return view('seller.orders.show', compact('order', 'delivery_boys'));
    }

    // Update Delivery Status
    public function update_delivery_status(Request $request)
    {
        // dd($request->all());
        $order = Order::findOrFail($request->order_id);
        $order->delivery_viewed = '0';
        $order->delivery_status = $request->status;
        $order->save();

        if ($request->status == 'cancelled' && $order->payment_type == 'wallet') {
            $user = User::where('id', $order->user_id)->first();
            $user->balance += $order->grand_total;
            $user->save();
        }

        
        foreach ($order->orderDetails->where('seller_id', Auth::user()->id) as $key => $orderDetail) {
            $orderDetail->delivery_status = $request->status;
            $orderDetail->save();
            
            
            if($request->status == 'confirmed'){
                    
                    $seller_id =Order::where('id',$request->order_id)->first();
                    $pickup_location = DB::table('shops')->where('user_id',$seller_id->seller_id)->first();

                    $billing_address = json_decode($order->shipping_address);
                    
                    $product_details=DB::table('order_details')
                                    ->where('order_id',$request->order_id)
                                    ->join('products','products.id','=','order_details.product_id')
                                    ->join('orders','order_details.order_id','=','orders.id')
                                    ->get();
                    foreach($product_details as $p_details){
                        $products[]=[
                            'name'=>$p_details->name,
                            'sku'=>$p_details->unique_id,
                            'units'=>$p_details->quantity,
                            'selling_price'=>$p_details->price
                        ];
                    }
                   $shipdetails=json_decode($product_details[0]->shipping_address);
                    
                    $token = shiprocket_token();
                    $order_create_body = array(
                        
                          "order_id"=> $product_details[0]->code,
                          "order_date"=> $product_details[0]->created_at,
                          "pickup_location"=> $pickup_location->name,
                          "billing_customer_name"=> $shipdetails->name,
                          "billing_last_name"=>"",
                          "billing_address"=> $shipdetails->address,
                          "billing_city"=> $shipdetails->city,
                          "billing_pincode"=> $shipdetails->postal_code,
                          "billing_state"=> $shipdetails->state,
                          "billing_country"=> $shipdetails->country,
                          "billing_email"=> $shipdetails->email,
                          "billing_phone"=> $shipdetails->phone,
                          "shipping_is_billing"=> true,
                          "order_items"=>$products , 
                          "payment_method"=> "Prepaid",
                          "shipping_charges"=> 0,
                          "giftwrap_charges"=> 0,
                          "transaction_charges"=> 0,
                          "total_discount"=> 0,
                          "sub_total"=> $product_details[0]->grand_total,
                          "length"=> 10,
                          "breadth"=> 15,
                          "height"=> 20,
                          "weight"=> 2.5
                                                );
                                            
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, 'https://apiv2.shiprocket.in/v1/external/orders/create/adhoc');
                        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Authorization:Bearer'.$token));
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
                        curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($order_create_body));
                        	
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $response1  = curl_exec($ch);
                        $return_data = json_decode($response1);
                        dd($return_data);
                                            
                        $shp_details=DB::table('shiprocket_data')->where('order_id',$request->order_id)->first();
                        if(!isset($shp_details)){
                             $shiproclet_response= DB::table('shiprocket_data')->insert([
                                'order_id'=>$request->order_id,
                                'shiprocket_order_id'=>$return_data->order_id,
                                'shipment_id'=>$return_data->shipment_id,
                                'status'=>$return_data->status,
                                'status_code'=>$return_data->status_code,
                                'onboarding_completed_now'=>$return_data->onboarding_completed_now,
                                'awb_code'=>$return_data->awb_code,
                                'courier_company_id'=>$return_data->courier_company_id,
                                'courier_name'=>$return_data->courier_name
                             ]);
                        }   
                }

            if ($request->status == 'cancelled') {
                $variant = $orderDetail->variation;
                if ($orderDetail->variation == null) {
                    $variant = '';
                }

                $product_stock = ProductStock::where('product_id', $orderDetail->product_id)
                    ->where('variant', $variant)
                    ->first();

                if ($product_stock != null) {
                    $product_stock->qty += $orderDetail->quantity;
                    $product_stock->save();
                }
            }
        }

        if (addon_is_activated('otp_system') && SmsTemplate::where('identifier', 'delivery_status_change')->first()->status == 1) {
            try {
                SmsUtility::delivery_status_change(json_decode($order->shipping_address)->phone, $order);
            } catch (\Exception $e) {

            }
        }

        //sends Notifications to user
        NotificationUtility::sendNotification($order, $request->status);
        if (get_setting('google_firebase') == 1 && $order->user->device_token != null) {
            $request->device_token = $order->user->device_token;
            $request->title = "Order updated !";
            $status = str_replace("_", "", $order->delivery_status);
            $request->text = " Your order {$order->code} has been {$status}";

            $request->type = "order";
            $request->id = $order->id;
            $request->user_id = $order->user->id;

            NotificationUtility::sendFirebaseNotification($request);
        }


        if (addon_is_activated('delivery_boy')) {
            if (Auth::user()->user_type == 'delivery_boy') {
                $deliveryBoyController = new DeliveryBoyController;
                $deliveryBoyController->store_delivery_history($order);
            }
        }

        return 1;
    }

    // Update Payment Status
    public function update_payment_status(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
        $order->payment_status_viewed = '0';
        $order->save();

        foreach ($order->orderDetails->where('seller_id', Auth::user()->id) as $key => $orderDetail) {
            $orderDetail->payment_status = $request->status;
            $orderDetail->save();
        }
        
        $status = 'paid';
        foreach ($order->orderDetails as $key => $orderDetail) {
            if ($orderDetail->payment_status != 'paid') {
                $status = 'unpaid';
            }
        }
        $order->payment_status = $status;
        $order->save();


        if ($order->payment_status == 'paid' && $order->commission_calculated == 0) {
            calculateCommissionAffilationClubPoint($order);
        }

        //sends Notifications to user
        NotificationUtility::sendNotification($order, $request->status);
        if (get_setting('google_firebase') == 1 && $order->user->device_token != null) {
            $request->device_token = $order->user->device_token;
            $request->title = "Order updated !";
            $status = str_replace("_", "", $order->payment_status);
            $request->text = " Your order {$order->code} has been {$status}";

            $request->type = "order";
            $request->id = $order->id;
            $request->user_id = $order->user->id;

            NotificationUtility::sendFirebaseNotification($request);
        }


        if (addon_is_activated('otp_system') && SmsTemplate::where('identifier', 'payment_status_change')->first()->status == 1) {
            try {
                SmsUtility::payment_status_change(json_decode($order->shipping_address)->phone, $order);
            } catch (\Exception $e) {

            }
        }
        return 1;
    }

}
