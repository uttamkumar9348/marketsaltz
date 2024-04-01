<?php

namespace App\Http\Controllers;

use App\Models\BuyerRegister;
use App\Models\User;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Session;
use Mail;

class RegistrationController extends Controller
{
    //
    public function registration(){
        $registration_form = Form::all();  
        // dd($registration_form);
        return view ('frontend.registration',compact('registration_form'));
    }
    public function submit_next(Request $request){
        // dd($request->all());
        //$f_insert=new BuyerRegister;
        $s_pass=session()->put('first_name',$request->first_name);
        $s_pass=session()->put('last_name',$request->last_name);
        $s_pass=session()->put('email',$request->email);
        $s_pass=session()->put('email_otp',$request->email_otp);
        $s_pass=session()->put('phonenumber',$request->phonenumber);
        $s_pass=session()->put('phone_otp',$request->phone_otp);
        $s_pass=session()->put('password',$request->password);
        $s_pass=session()->put('password_confirmation',$request->password_confirmation);
        $s_pass=session()->put('primary_source',$request->primary_source);
        
        return view ('frontend.buyer');
    }
    public function submit_done(Request $request){
        // dd($request->all());
        $s_insert=new BuyerRegister;
        $s_insert->u_id=strtoupper(bin2hex(random_bytes(10)));
        $s_insert->first_name=$request->first_name;
        $s_insert->last_name=$request->last_name;
        $s_insert->email=$request->email;
        $s_insert->email_otp=$request->email_otp;
        $s_insert->phonenumber=$request->phonenumber;
        $s_insert->phonenumber_otp=$request->phone_otp;
        $s_insert->password=$request->password;
        $s_insert->password_confirmation=$request->password_confirmation;
        $s_insert->primary_source=$request->primary_source;
        $s_insert->gst_number=$request->gst_number;
        
        $s_insert->Organization_name=$request->Organization_name;
        $s_insert->address=$request->address;
        $s_insert->country_id=$request->country_name;
        $s_insert->state_id=$request->state_id;
        $s_insert->city_id=$request->city_id;
        $s_insert->zipcode=$request->zipcode;
        $s_insert->pan_no=$request->panno;
        $s_insert->save();
        
            
        
        $user_ins=new User;
        $user_ins->user_type='customer';
        $user_ins->u_id=$s_insert->u_id;
        $user_ins->name=$request->first_name.' '.$request->last_name;
        $user_ins->email=$request->email;
        $user_ins->phone=$request->phonenumber;
        $user_ins->password=Hash::make($request->password);
        // dd($user_ins->phone);
        $user_ins->address=$request->address;
        $user_ins->country=$request->country_name;
        $user_ins->state=$request->state_id;
        $user_ins->city=$request->city_id;
        $user_ins->postal_code=$request->zipcode;
        $user_ins->pan_no=$request->panno;
        $user_ins->gst_number=$request->gst_number;
        $user_ins->save();
         
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
  CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"63a06487ab341249b514bde2\",\n  \"sender\": \"MSALTZ\",\n  \"short_url\": \"0\",\n  \"mobiles\": \"91$user_ins->phone\",\n  \"customer\": \"$user_ins->name\"\n  \n}",
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
                //start welcom_mail
         $email = $request->email;
            $data = array('name'=>$request->first_name.''.$request->last_name,'company_name'=>$request->Organization_name, 'u_id'=>bin2hex($request->email));
            Mail::send('emails.welcom_mail', $data, function($message) use ($email) {
             $message->to($email, 'Market Saltz')->subject
                ('Welcome Mail');
             $message->from('support@marketsaltz.com','Market Saltz');
            });
        //end send welcome mail
        return redirect('/buyer_login')->with('confirm','You are Registered Succesfully');
    }
    public function mobile_otp(Request $request){
        
        if($request->phone !=null){
            
            $random_no=rand(111111,999999);
             //$random_no=123456;
            
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
  CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"63996c2faef27319a725efe4\",\n  \"sender\": \"MSALTZ\",\n  \"short_url\": \"0\",\n  \"mobiles\": \"91$request->phone\",\n  \"otp\": \"$random_no\"\n  \n}",
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
            
            
            $no_fetch=DB::table('phoneno_verify')->where('phoneno',$request->phone)->first();
            if(!isset($no_fetch)){
                   DB::table('phoneno_verify')->insert([
            'phoneno'=>$request->phone,
            'phone_otp'=>$random_no
            ]);
            }
            else{
                DB::table('phoneno_verify')->where('phoneno',$request->phone)->update([
                     'phone_otp'=>$random_no,
                     'updated_at'=>Carbon::now()
                    ]);
            }
     
            
            return response()->json([
                'status'=>200
                
                ]);
        }
        else{
            return response()->json([
                'status'=>204
                ]);
        }
    }
    public function otp_check(Request $request){
       
      $otp=DB::table('phoneno_verify')
      ->where('phoneno',$request->phone)
      ->where('phone_otp',$request->otp_val)
      ->first();
      if(!isset($otp)){
          return response()->json([
              'status'=>206
              ]);
      }
      else{
               $time_differ=Carbon::now()->diff($otp->updated_at)->format('%i');
      //dd($time_differ);
      if($time_differ > 10){
          return response()->json([
              'status'=>205,
              'message'=>'Otp Expired'
              ]);
      }
     
      else{
          
          return response()->json([
              'message'=>'Otp verified successfully',
              'status'=>200
              ]);
      }
          
      }
     
 
      
     
  
    }
    public function email_otp(Request $request){
        // dd($request->all());
        
        
        if($request->email !=null){
            
            $user = User::where('email',$request->email)->first();
        
            
            if($user){
                return response()->json([
                  'message'=>'matched',
                  'status'=>201,
                  ]);
            }
            else{
                
                $send_email=$request->email;
                $random_num=rand(111111,999999);
                //$random_num=987654;
                $email_fetch=DB::table('email_verify')->where('email',$request->email)->first();
                if(!isset($email_fetch)){
                        DB::table('email_verify')->insert([
                            'email'=>$request->email,
                            'email_otp'=>$random_num
                            
                        ]);
                
                        $this->send_mail($random_num,$send_email);
                }
                else{
                    DB::table('email_verify')->where('email',$request->email)->update([
                         'email_otp'=>$random_num,
                         'updated_at'=>Carbon::now()
                        ]);
                    $this->send_mail($random_num,$send_email);
                }
     
             
                return response()->json([
                    'status'=>200
                    
                    ]);
            }
            
           
        }
        else{
            return response()->json([
                'status'=>204
                ]);
        }
    }
    public function mailotp_check(Request $request){
       
      $mail_otp=DB::table('email_verify')
      ->where('email',$request->email)
      ->where('email_otp',$request->mailotp_val)
      ->first();
     if($mail_otp != ''){
      
      $time_differ=Carbon::now()->diff($mail_otp->updated_at)->format('%i');
      //dd($time_differ,$mail_otp);
      if($time_differ > 3){
          return response()->json([
              'status'=>205,
              'message'=>'Email Otp Expired'
              ]);
      }
      else{
          
          return response()->json([
              'message'=>' Email Otp verified successfully',
              'status'=>200
              ]);
      }
      
        
     }
     else{
         return response()->json([
              'message'=>' Invalid OTP',
              'status'=>201
              ]);
     }
  
    }
    public function send_mail($random_num,$send_email){
       
       
        $cmail=['otp_send'=>$random_num];
        $user['to']=$send_email;
        Mail::send('emails.mailotp',$cmail,function($message)use($user){
            $message->to($user['to']);
            $message->subject("Email Verification Otp ,Please Check it!");
        });
        
        
    }
    
    // public function check_email(Request $request){
    //     $user = User::where('email',$request->email)->first();
        
    //     if($user){
    //         return response()->json([
    //           'message'=>'matched',
    //           'status'=>200
    //           ]);
    //     }else{
    //          return response()->json([
    //           'message'=>'unmatched',
    //           'status'=>201
    //           ]);
            
    //     }
        
        
    // }
    
    
    
}