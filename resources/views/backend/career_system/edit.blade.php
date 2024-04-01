@extends('backend.layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
<style>
    .choices__list--multiple .choices__item {
    display: inline-block;
    vertical-align: middle;
    border-radius: 20px;
    padding: 0px 11px!important;
    font-size: 12px;
    font-weight: 500;
    margin-right: 3.75px;
    margin-bottom: 3.75px;
    background-color: #00bcd4;
    border: 1px solid #00a5bb;
    color: #fff;
    word-break: break-all;
}
.choices__button:hover{
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjEiIGhlaWdodD0iMjEiIHZpZXdCb3g9IjAgMCAyMSAyMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSIjRkZGIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0yLjU5Mi4wNDRsMTguMzY0IDE4LjM2NC0yLjU0OCAyLjU0OEwuMDQ0IDIuNTkyeiIvPjxwYXRoIGQ9Ik0wIDE4LjM2NEwxOC4zNjQgMGwyLjU0OCAyLjU0OEwyLjU0OCAyMC45MTJ6Ii8+PC9nPjwvc3ZnPg==)!important;
        background-color: transparent!important;
}
</style>
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Job Information')}}</h5>
            </div>
            <div class="card-body">
                <form id="add_form" class="form-horizontal" action="{{url('/update_Post',$fetch_job->id)}}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Job Title')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Job Title')}}" onkeyup="makeSlug(this.value)" id="title" name="job_title" class="form-control" value="{{$fetch_job->job_title}}">
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Slug')}}
                            <span class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="text" placeholder="{{translate('Slug')}}" name="slug" id="slug" class="form-control" value="{{$fetch_job->slug}}" required>
                        </div>
                    </div>
                    
                    
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Short Description')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <textarea name="short_desc" rows="5" class="form-control" required="">{{$fetch_job->short_desc}}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-from-label">
                            {{translate('Description')}}
                        </label>
                        <div class="col-md-9">
                            <textarea class="aiz-text-editor" name="description">{{$fetch_job->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{translate('Location')}}
                            <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <textarea name="location" rows="5" class="form-control" required="">{{$fetch_job->location}}</textarea>
                        </div>
                    </div>
                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-3 col-from-label">-->
                    <!--        {{translate('Country')}}-->
                    <!--    </label>-->
                    <!--    <div class="col-md-9">-->
                    <!--        <select class="form-control aiz-selectpicker ttext" id="country_id" data-live-search="true" data-placeholder="{{ translate('Select your country') }}" name="country_id" required>-->
                    <!--                    <option value="">{{ translate('Select your country') }}</option>-->
                    <!--                    @foreach (\App\Models\Country::where('status', 1)->get() as $key => $country)-->
                    <!--                        <option value="{{ $country->id }}">{{ $country->name }}</option>-->
                    <!--                    @endforeach-->
                    <!--                </select>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-3 col-from-label">-->
                    <!--        {{translate('State')}}-->
                    <!--    </label>-->
                    <!--    <div class="col-md-9">-->
                    <!--        <select class="form-control mb-3 aiz-selectpicker ttext" id="state_id" data-live-search="true" name="state_id" required>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-3 col-from-label">-->
                    <!--        {{translate('City')}}-->
                    <!--    </label>-->
                    <!--    <div class="col-md-9">-->
                    <!--        <select class="form-control mb-3 aiz-selectpicker" data-live-search="true" name="city_id" required>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Add Experience')}}</label>
                        <div class="col-md-9">
                            <select class="form-control select2 select2-hidden-accessible" name="exp_det" style="width: 100%;" tabindex="-1" aria-hidden="true">
                                <option selected="selected">{{$fetch_job->exp_det}}</option>
                                <option value="No Experience">No Experience</option>
                                <option value="1 year Experience">1 year Experience</option>
                                <option value="2 year Experience">2 year Experience</option>
                                <option value="3 year Experience">3 year Experience</option>
                                <option value="5 year Experience">5 year Experience</option>
                                <option value="Above 5 year Experience">Above 5 year Experience</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    
                      @php 
                    
                    $qualification = json_decode($fetch_job->qualification);
                
                    @endphp
                    
                 
                        
                        
                        
                        
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">{{translate('Add Qualifiaction')}}</label>
                        <div class="col-md-9">
                            <select id="choices-multiple-remove-button" placeholder="Select upto 5 tags" name="qualification[]"  multiple>
                                @foreach($qualification as $qual)
                                <option selected>{{$qual}}</option>
                                 @endforeach
                                <option value="mca">mca</option>
                                <option value="mba">mba</option>
                                <option value="b.sc">b.sc</option>
                                <option value="M.sc">M.sc</option>
                                <option value="B.tech">B.tech</option>
                                <option value="M.tech">M.tech</option>
                                <option value="Cse">Cse</option>
                                <option value="EEE">EEE</option>
                                <option value="Python">Phd(chemistry)</option>
                            </select>
                        </div>
                    </div>
                    
                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-3 col-form-label" for="signinSrEmail">-->
                    <!--        {{translate('Meta Image')}} -->
                    <!--        <small>(200x200)+</small>-->
                    <!--    </label>-->
                    <!--    <div class="col-md-9">-->
                    <!--        <div class="input-group" data-toggle="aizuploader" data-type="image">-->
                    <!--            <div class="input-group-prepend">-->
                    <!--                <div class="input-group-text bg-soft-secondary font-weight-medium">-->
                    <!--                    {{ translate('Browse')}}-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--            <div class="form-control file-amount">{{ translate('Choose File') }}</div>-->
                    <!--            <input type="hidden" name="meta_img" class="selected-files">-->
                    <!--        </div>-->
                    <!--        <div class="file-preview box sm">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-3 col-form-label">{{translate('Meta Description')}}</label>-->
                    <!--    <div class="col-md-9">-->
                    <!--        <textarea name="meta_description" rows="5" class="form-control"></textarea>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-3 col-form-label">-->
                    <!--        {{translate('Meta Keywords')}}-->
                    <!--    </label>-->
                    <!--    <div class="col-md-9">-->
                    <!--        <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="{{translate('Meta Keywords')}}">-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">
                            {{translate('Save')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function makeSlug(val) {
        let str = val;
        let output = str.replace(/\s+/g, '-').toLowerCase();
        $('#slug').val(output);
    }
</script>
    <script>
        $(document).ready(function(){
    
     var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        maxItemCount:5,
        searchResultLimit:5,
        renderChoiceLimit:5
      }); 
     
     
 });
    </script>
@endsection
