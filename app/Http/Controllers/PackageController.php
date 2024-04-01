<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\package;
use App\Models\User;
use Auth;

class PackageController extends Controller
{
    //
    
    public function Basic_package(Request $request){
        // dd($request->all());
        
        
       $Basic_package=new package;
       $Basic_package->order_id= rand(11111111,99999999);
       $Basic_package->user_id = Auth::id();
       $Basic_package->	package_type=$request->type;
       $Basic_package->hp_banner=$request->hp_banner;
       $Basic_package->cp_banner=$request->cp_banner;
       $Basic_package->pp_banner=$request->pp_banner;
       $Basic_package->fp_hp_banner=$request->fp_hp_banner;
       $Basic_package->fp_cp_banner=$request->fp_cp_banner;
       $Basic_package->fp_pp_banner=$request->fp_pp_banner;
        $sum=$request->hp_banner+$request->cp_banner+$request->pp_banner;
        $sum_fp=$request->fp_hp_banner+$request->fp_cp_banner+$request->fp_pp_banner;
        $Total_sum=$sum+$sum_fp;
        $Basic_package->feature_banner_amt=$sum;
        $Basic_package->feature_product_amt=$sum_fp;
        $Basic_package->total_amount=$Total_sum;
        $response_data=$Basic_package->save();
        //dd($Total_sum);
        //return view('frontend.payment_confirmation',compact('response_data'));
        session()->put('paymentdata',$Basic_package);
        return response()->json($response_data);
    }
    public function payment_confirmation(){
        return view('frontend.payment_confirmation');
    }
    
    public function addsuccesspayment(Request $request){
        
        $payment = Package::where('order_id',$request->order_id)->update([
            'payment_status'=>1,
            'payment_id'=>$request->payment_id
            ]);
           
        $package = Package::where('order_id',$request->order_id)->first();
        // dd($package->id);
        $phone = User::where('id',$package->user_id)->first();
        // dd($phone->phone);
        
            //send otp to mobile
            
            $curl = curl_init();
            
            curl_setopt_array($curl, [
              CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"63a0399d03328c58c51d32ec\",\n  \"sender\": \"MSALTZ\",\n  \"short_url\": \"0\",\n  \"mobiles\": \"91$phone->phone\",\n  \"seller_name\": \"$phone->name\"\n,\n  \"plan\": \"$package->package_type\"\n  \n}",
              CURLOPT_HTTPHEADER => [
                "authkey: 386669AjkgK3GV63988e57P1",
                "content-type: application/json"
              ],
            ]);
            
            $response = curl_exec($curl);
            $err = curl_error($curl);
            
            curl_close($curl);
            
            if ($err) {
              echo "cURL Error #:" . $err;
            } else {
              
            }
       
            //end send otp to mobile
            
        return response()->json(['status'=>$payment]); 
    }
}
