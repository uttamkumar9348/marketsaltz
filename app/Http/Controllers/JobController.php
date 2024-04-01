<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Jobsapply;

class JobController extends Controller
{
    //
    public function jobpost(Request $request){
        //dd($request->all());
       // dd('hy');
       $sort_search = null;
       $fetch_job=Job::all()->where('status','1');
       
       if ($request->search != null){
            $fetch_job = $fetch_job->where('job_title', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        // $fetch_job = $fetch_job->paginate(15);
        return view ('backend.career_system.index',compact('fetch_job','sort_search'));
    }
    public function create(){
        //dd($request->all());
       // dd('hy');
        return view ('backend.career_system.create');
    }
    public function insert(Request $request){
       // dd(json_encode($request->qualification));
        $insert=new Job;
        $insert->job_title=$request->job_title;
        $insert->slug=$request->slug;
        $insert->short_desc=$request->short_desc;
        $insert->description=$request->description;
        $insert->location=$request->location;
        $insert->qualification=json_encode($request->qualification);
        $insert->exp_det=$request->exp_det;
        
        //dd($insert);
        $insert->save();
        return redirect ('/career_allpost');
    }
    public function edit($id){
        //  $fetch_job=Job::find($id);
        //  dd($fetch_job);
      
       $fetch_job=Job::where('id',$id)->first();
      //dd($fetch_job);
        return view ('backend.career_system.edit',compact('fetch_job'));
    }
    public function update_Post(Request $request,$id){
        //dd($request->all());
        
        $update_post=Job::find($id);
        $update_post->job_title=$request->job_title;
        
        $update_post->slug=$request->slug;
        $update_post->short_desc=$request->short_desc;
        $update_post->description=$request->description;
        $update_post->location=$request->location;
        $update_post->qualification=json_encode($request->qualification);
        $update_post->exp_det=$request->exp_det;
        
        $update_post->update();
        return redirect('/career_allpost');
    }
    public function delete_job($id){
        $job_dlt = Job::find($id);
     $job_dlt->delete();
      
      return redirect('/career_allpost');  
    }
    public function qual_fetch(Request $request){
       
        $id=Job::where('id',$request->id)->get();
        $data=json_decode($id[0]->qualification,true);
        
        return response()->json($data);
        
    }
    public function candidate_list(){
       
           $candidates=Jobsapply::all()->where('status','1');
        return view ('backend.career_system.apply_candidates',compact('candidates'));
        
    }
    public function dlt_candidate($id){
        $dlt_candidate = Jobsapply::find($id);
        // dd($dlt_candidate);
     $dlt_candidate->delete();
      
      return redirect('/candidate_list');  
    }
}
