<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Models\Job;
use App\Models\Jobsapply;

class CareerController extends Controller
{
    //
     public function create(){
         $fetch_job=Job::orderBy('id','Desc')->where('status','1')->get();
        // dd($fetch_job);
        return view ('frontend.career',compact('fetch_job'));
    }
     public function faq(){
        return view ('frontend.faq');
    }
     public function contact_mail(Request $request){
        
        
        $cmail=['name'=>$request->fullname,'email'=>$request->email,'phoneno'=>$request->phoneno,'mess'=>$request->msg];
        $user['to']='support@marketsaltz.com';
        Mail::send('emails.contactmail',$cmail,function($message)use($user){
            $message->to($user['to']);
            $message->subject("New contact mail ,Please Check it!");
        });
        return redirect()->back();
    }
     public function req_quote(Request $request){
        
        
        $rmail=['cname'=>$request->cname,'pname'=>$request->pname,'dgn_name'=>$request->dgn_name,'email'=>$request->email,'phone_no'=>$request->phone_no,'zip'=>$request->zip,'turnover'=>$request->turnover,'msg'=>$request->msg,'file'=>$request->r_doc];
        $user['to']='support@marketsaltz.com';
        Mail::send('emails.request_a_quote',$rmail,function($message)use($user){
            $message->to($user['to']);
            $message->subject("New Request ,Please Check it!");
        });
        return redirect()->back();
    }
    public function c_apply(Request $request){
        //dd($request->all());
        
        $filenameWithExt = $request->file('resume')->getClientOriginalName();

        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        $extension = $request->file('resume')->getClientOriginalExtension();

        $fileNameToStore =time().'.'.$extension;

        $path = $request->file('resume')->storeAs('candidate_cv/', $fileNameToStore);
        
        
        $apply_data=new Jobsapply;
        
        $apply_data->job_id=$request->job_id;
        $apply_data->fullname=$request->fullname;
        $apply_data->email=$request->email;
        $apply_data->mobile_no=$request->mobile_no;
        $apply_data->experience=$request->experience;
        $apply_data->qualification=$request->qualification;
        $apply_data->resume=$fileNameToStore;
        $apply_data->address=$request->address;
        $apply_data->save();
        return redirect()->back()->with('submit','Thank you for apply,we will noitfy You soon!');
    }
    public function mailtest(){
     
        $data = array('name'=>"Abinash Bhatta",'company_name'=>"EDevlop Services Pvt. Ltd");
      Mail::send('emails.welcom_mail', $data, function($message) {
         $message->to('abinash889@gmail.com', 'Market Saltz')->subject
            ('Welcome Mail');
         $message->from('support@marketsaltz.com','Market Saltz');
      });
      echo "HTML Email Sent. Check your inbox.";
        
    
    }
}
