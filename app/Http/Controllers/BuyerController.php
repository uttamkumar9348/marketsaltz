<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerRegister;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class BuyerController extends Controller
{
    //
     public function buyer(){
        return view ('frontend.buyer');
    }
     public function loginpage(){
        return view ('frontend.buyer_login');
    }
     public function packages(){
        return view ('frontend.advertise');
    }
     public function buyer_protection(){
        return view ('frontend.buyer_payment_protection');
    }
    
    public function buyer_list(Request $request){
        //dd($request->all());
       // dd('hy');
       $sort_search = null;
       $buyer_list=BuyerRegister::orderBy('id','Desc')->get()->all();
     // dd($buyer_list);
       if ($request->search != null){
            $fetch_job = $fetch_job->where('job_title', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        return view ('backend.loginapprove.buyer.buyer_list',compact('buyer_list','sort_search'));
    }
        public function change_status(Request $request)
    {

        // dd($request->all());
        // dd($request->id);


        $update = BuyerRegister::where('id', $request->id)->first();

        // dd($update->id); 
        if ($update->status == 0) {
            $update->status = "1";
        } else {
            $update->status = "0";
        }
        // dd($update->status);

        $update->update();
        // return response()->json();


    }
    public function dlt_list($id){
        $dlt_list=BuyerRegister::findOrFail($id);
  
        $dlt_list->delete();
        return redirect('/buyer_list');
    }
    public function gst_verify(Request $request){
        
        $client = new \GuzzleHttp\Client();
        $response =  Http::get('https://appyflow.in/api/verifyGST?gstNo='.$request->gst_no.'&key_secret=U2iRtbN86Ad0oC3cs37INqXoTw43');
        $data= $response->json();
        return response()->json($data);
        
    }
}
