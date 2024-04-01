@extends('frontend.layouts.app')


@section('content')
<style>
.pd{
    padding: 4px 20px;
}

.sch_pd{
    padding: 30px 47px;
}
    .dsp_flex{
        display: inline-flex;
    }
    .eform{
        padding: 10px;
    background: white;
    -webkit-box-shadow: 2px 2px 15px rgb(0 0 0 / 10%);
    border-radius: 10px;
    }.career{
        background: url(/public/uploads/all/c-us.jpg);
    background-size: cover;
    width: 100%;
    background-repeat: no-repeat;
    position: relative;
    }
    .package-box {
   padding: 45px 15px 5px;
    position: relative;
    -webkit-box-shadow: 2px 2px 15px rgb(0 0 0 / 10%);
    box-shadow: 0px 0px -13px 0px rgb(108 177 225 / 29%);
    transition: 0.5s ease-in-out;
    background: var(--white);
    margin-bottom: 50px;
    border-radius: 10px;
    border-radius: 50px 10px;
    z-index: 99;
    margin-top: 30px;
    min-height: 100px;
    overflow: hidden;
    width: 80%;
}
.package-box .package-top h4 {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
    line-height: 25px;
    text-transform: uppercase;
    color: var(--black);
}
.package-box .package-top .h5 {
    font-size: 45px;
    font-weight: 700;
    display: block;
    color: var(--red);
    margin-bottom: 10px;
}
.package-box ul.pkg-list {
    height: 100px;
    text-align: start;
    overflow-y: scroll;
    padding: 0 6px;
}
.package-box ul li {
    margin: 5px 0;
    word-break: break-word;
    padding-right: 10px;
    font-size: 15px;
    line-height: initial;
    color: var(--blsck);
    position: relative;
    padding: 4px 20px;
    line-height: 15px;
}
.btn_packages {
    padding: 20px 0 10px;
    
}
.btn_packages a {
    background: #2e3192;
    color: var(--white) !important;
    padding: 3px 14px 3px;
    display: inline-block;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: 500;
    border-radius: 5px;
    box-shadow: 0px 0px 10px #bdbdbd;
    cursor: pointer;
    margin-left: 25px;
}
.btn_packages a:hover {
    background: var(--blue);
    animation: stripes-move 1s infinite linear;
    background-image: repeating-linear-gradient( 263deg ,#2e3192 0%,#2467d7a6 100%);
    color: #fff;
}
.frs{
    color: #ffffff;
    font-size: 17px;
    font-weight: 600;
    background: #2e3192;
    padding: 8px 27px;
    border-radius: 20px 3px 20px 3px;
    letter-spacing: 2px;
}
.frs_abs{
    position: absolute;
    top: 11px;
    left: 0px;
}
/* ===== Scrollbar CSS ===== */
  /* Firefox */
  * {
    scrollbar-width: thin;
    scrollbar-color: #102694 #ffffff;
  }

  /* Chrome, Edge, and Safari */
  *::-webkit-scrollbar {
    width: 10px;
  }

  *::-webkit-scrollbar-track {
    background: #ffffff;
  }

  *::-webkit-scrollbar-thumb {
    background-color: #102694;
    border-radius: 5px;
    border: 1px solid #ffffff;
  }
  .c_btn{
      position: absolute;
    border: none;
    right: 7px;
    top: 0;
    padding: 4px;
    font-size: 23px;
    background: transparent;
  }
</style>

<div class="pb-30px pt-30px career">
		<div class="container rs_pd_0">
		    <div class="col-md-12 col-sm-12 col-xs-12">
		        <div class="row">
			<div class="col-md-8 col-sm-8 col-xs-12">
				<div class="col-md-12 col-sm-12 col-xs-12 pd_0">
					<p class="fs_16 t_j">
						<strong>Notice:</strong>
						<strong>Currently there is no Vacancy. </strong>
					</p>
				@if(Session::has('submit'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
                <span class="alert-inner--text"><strong>{{ Session::get('submit')}}</strong></span>
                    <button type="button" class="btn-close c_btn" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
            </div>
            @endif
                @foreach($fetch_job as $fetch_jobs)
                <div class="package-box">
                    <div class="package-top pd">
                        <h4>{{$fetch_jobs->job_title}}</h4>
                        <span class="fs_16">{{$fetch_jobs->short_desc}}</span></span>
                        <p class="mb-0"><span class="fs_16">{{$fetch_jobs->location}}</span></p>
                        @if($fetch_jobs->exp_det == "No Experience")
                        <p class="mb-0 frs_abs"><span class="frs"><i class="las la-briefcase mr_10"></i>Freshers</span></p>
                        @else
                        <p class="mb-0 frs_abs"><span class="frs"><i class="las la-briefcase mr_10"></i>Experienced</span></p>
                        @endif
                    </div>
                    <ul class="pkg-list">
                        <li class=""><b>Job Responsibilities</b> </li>
                        <li> {!!$fetch_jobs->description!!} </li>
                        
                        <li class=""><b>Qualification</b></li>    
                        @php
                        $qualification = json_decode($fetch_jobs->qualification);
                        @endphp
                        <li>
                            @foreach($qualification as $qual)
                           <span>{{$qual}},</span>
                            @endforeach
                        </li>
                        <li class=""><b>Experience</b> </li>
                        <li class="">{{$fetch_jobs->exp_det}}</li>
                    </ul>
                    <div class="btn_packages">
                        <span>Posted {{$fetch_jobs->created_at->diffForHumans()}}</span>
                        <a data-toggle="" data-target="#order_pop" onclick="" name="" class="btn-line-fill" tabindex="0">More<i class="las la-angle-double-right"></i></a>
                    </div>
                </div>
                @endforeach
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
			    <div class="fix_rel">
			        <div class="fix_abs">
			     <form method="POST" action="{{url('/c_apply')}}" class="form-horizontal eform" enctype="multipart/form-data">
			         @csrf
				    <div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<p><strong>Apply Now</strong></p>
						</div>						
					</div>
				    @php 
				    $fetch_jobid=App\Models\Job::get();
				    
				    @endphp
				    <div class="form-group">
				        <div class="col-md-12 col-sm-12 col-xs-12">
							<select class="form-control" name="job_id" id="job_id">
							    <option selected disabled>Apply For </option>
							    @foreach($fetch_jobid as $fetch_jobids)
								<option value="{{$fetch_jobids->id}}">{{$fetch_jobids->job_title}} </option>
								@endforeach
							</select>
						</div>
				    </div>
											
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" class="form-control" name="fullname" value="" placeholder="Enter Full name">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="email" class="form-control" name="email" value="" placeholder="Enter Email-Id">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="text" class="form-control" name="mobile_no" value="" placeholder="Enter Mobile No.">
						</div>
					</div>
					<div class="form-group dsp_flex">
						<div class="col-md-6 col-sm-12 col-xs-12">
							<select class="form-control" name="experience">
								<option value="">Years Of Experience </option>
								<option value="No Experience">No Experience </option>
								<option value="1 Year">1 Year</option>
								<option value="2 Years">2 Years</option>
								<option value="3 Years">3 Years</option>
								<option value="4 Years">4 Years</option>
								<option value="5 Years">5 Years</option>
								<option value="6 Years">6 Years</option>
								<option value="7 Years">7 Years</option>
								<option value="8 Years">8 Years</option>
								<option value="9 Years">9 Years</option>
								<option value="10 Years +">10 Years +</option>
							</select>
						</div>
						<div class="col-md-6 col-sm-12 col-xs-12">
							<select class="form-control" name="qualification" id="qual">
								<!--<option value="" selected disabled>Select Qualification </option>-->	
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="file" class="form-control" name="resume" accept=".doc,.pdf,.docx,.DOC,.PDF,.DOCX">
							<p class="text-primary">(NB- Upload Resume only pdf|doc|docx file)</p>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<textarea name="address" class="form-control" rows="5" placeholder="Address"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="submit-button-wrapper">
                        <input type="submit" value="Send" class=" btn btn-primary">
                      </div>
						</div>                                        
					</div>                                        
					
				</form>
			        </div>
			    </div>
				
			</div>
			    
		        </div>
		    </div>
		</div>
	</div>
	
	<script>
	    $(document).ready(function(){
	        $('#job_id').on('change',function(){
	            var job_id=$(this).val();
	            
	            $('#qual').html();
	            $.ajax({
	                url:"{{url('/qual_fetch')}}",
	                type:"POST",
	                data:{
	                    id:job_id,
	                    _token:'{{csrf_token()}}'
	                    
	                },
	                datatype:'json',
	                success:function(result){
	                    
	                   $('#qual').html('<option value="">-- Select Qualification --</option>');
                            $.each(result, function(key, value) {
                              
                            $("#qual").append('<option value="' + value + '">' + value + '</option>');
                        }); 
                            
                        
	                }
	            });
	            
	        });
	        
	    });
	</script>

@endsection