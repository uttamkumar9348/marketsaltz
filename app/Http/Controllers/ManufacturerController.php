<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;
use App\Models\Form;
use App\Models\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Session;
use Mail;


class ManufacturerController extends Controller
{
    public function manufacturer(){
        return view ('frontend.manufacturer');
    }
    public function register(){
        $registration_form = Form::all();  
        // dd($registration_form);
        return view ('frontend.manufacturer_register', compact('registration_form'));
    }
    public function loginpage(){
        return view ('frontend.manufacturer_login');
    }
    public function next_page(Request $request){
       
    //   dd($request->all());
        $m_pass=session()->put('first_name',$request->first_name);
        $m_pass=session()->put('last_name',$request->last_name);
        $m_pass=session()->put('email',$request->back_email);
        $m_pass=session()->put('email_otp',$request->email_otp);
        $m_pass=session()->put('phonenumber',$request->phonenumber);
        $m_pass=session()->put('phone_otp',$request->phone_otp);
        $m_pass=session()->put('password',$request->password);
        $m_pass=session()->put('password_confirmation',$request->password_confirmation);
        $m_pass=session()->put('primary_source',$request->primary_source);
        
        
        // dd(session('email'));
        // dd(session('email_otp'));
        // dd(session('phone_otp'));
        // dd(session('password_confirmation'));
        
        // $email = $request->email;
        
        // dd($email);
        
       return view ('frontend.manufacturer'); 
    }
    public function manufacture_submit(Request $request){
        
        
        // dd($request->all());
        // dd(session('email'));
        // dd(session('email_otp'));
        // dd(session('phone_otp'));
        // dd(session('password_confirmation'));
        //  $u_id = $request->email;
        // $bytes = "amankuman.com";
        // dd(bin2hex($u_id));
        
        $m_insert=new User;
        $m_insert->user_type='seller';
        $m_insert->u_id=strtoupper(bin2hex(random_bytes(10)));
        $m_insert->name=$request->first_name.''.$request->last_name;
        $m_insert->email=$request->email;
        // $m_insert->email=session('email');
        $m_insert->phone=$request->phonenumber;
        $m_insert->password=Hash::make($request->password);
        $m_insert->country=$request->country_name;
        $m_insert->address=$request->address;
        $m_insert->state=$request->state_id;
        $m_insert->city=$request->city_id;
        $m_insert->postal_code=$request->zipcode;
        $m_insert->pan_no=$request->panno;
        $m_insert->gst_number=$request->gst_number;
        $m_insert->save();
        // $u_id=$m_insert->id;
            
        
        $shop_ins=new Shop;
        $shop_ins->user_id=$m_insert->id;
        $shop_ins->u_id=$m_insert->u_id;
        $shop_ins->name=$request->first_name.''.$request->last_name;
        $shop_ins->phone=$request->phonenumber;
        $shop_ins->address=$request->address;
        $shop_ins->pan_no=$request->panno;
        $shop_ins->gst_id=$request->gst_number;
        $shop_ins->Organization_name=$request->Organization_name;
        
        // dd($request->first_name.''.$request->last_name.'-'.$m_insert->id);
        // $shop_ins->slug = $request->first_name.''.$request->last_name.'-'.$m_insert->id;
        
        $shop_ins->slug = preg_replace('/\s+/', '-', $request->first_name.''.$request->last_name) . '-' . $m_insert->id;
        $shop_ins->save();
        
        //send welcome msg to mobile
        $curl = curl_init();
        
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"63a06487ab341249b514bde2\",\n  \"sender\": \"MSALTZ\",\n  \"short_url\": \"0\",\n  \"mobiles\": \"91$m_insert->phone\",\n  \"customer\": \"$m_insert->name\"\n  \n}",
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
        //end welcome msg in mobile
        //start welcom_mail
         $email = $request->email;
            $data = array('name'=>$request->first_name.''.$request->last_name,'company_name'=>$request->Organization_name, 'u_id'=>bin2hex($request->email));
            Mail::send('emails.welcom_mail', $data, function($message) use ($email) {
             $message->to($email, 'Market Saltz')->subject
                ('Welcome Mail');
             $message->from('support@marketsaltz.com','Market Saltz');
            });
        //end send welcome mail
       return view ('frontend.manufacturer_login'); 
    }

    public function m_gstverify(Request $request){
        
        $client = new \GuzzleHttp\Client();
        $response =  Http::get('https://appyflow.in/api/verifyGST?gstNo='.$request->gst_no.'&key_secret=U2iRtbN86Ad0oC3cs37INqXoTw43');
        $data= $response->json();
        return response()->json($data);
        
    }
}
