 @extends('frontend.layouts.app')
 
  <style>
 .wrap-login100 {
    padding: 44px 80px 50px!important;
    width: 100%!important;
    box-shadow: 0 10px 30px 0 rgb(0 36 100 / 10%);
    border: solid 1px rgba(0,36,100,.03);
}
.mainRowSignup {
    height: 52px;
    border-radius: 4px;
    background: #fff;
    position: initial;
    font-family: 'Open Sans',sans-serif;
    padding: 0 16px 0 0!important;
    width: calc(100% + 16px);
}
.limiter{
        margin-bottom: 50px;
}
.fr_gg{
        left: 15px;
    position: relative;

}
.form-group {
    /*margin-bottom: 20px!important;*/
    background-color: #fff;
    border-radius: 8px;
}
 .validate-input {
    margin-bottom: 40px;
    top: 0;
    left: 0;
    position: relative;
}
.mainRowSignup {
    margin: auto!important;
    display: inline-flex!important;
    padding-left: 20px!important;
}
.formsection {
    width: 100%;
}
.filter-option-inner{
    line-height: 2.2;
}
.dropdown.bootstrap-select.form-control.mb-3 button{
    height: 52px;   
}

/*input:read-only {*/
/*    background-color: #dadce0!important;*/
/*}*/
 .otp_box {
    width: 14.8%!important;
    height: 52px;
    margin-right: 0 2px;
    text-align: center;
}
.martop {
    margin-top: 32px;
}
 input {
    height: 52px;
    border: solid 1px #dadce0;
    border-radius: 8px;
    background: #fff;
    font-family: 'Open Sans',sans-serif;
    padding: 0 16px;
    width: 100%;
    font-size: 15px;
    font-weight: 600;
    color: #232327;
}
 .register_dashboard_latest {
    margin-bottom: 42px;
}
 .register_dashboard_latest h5 {
    margin: 0;
    font-size: 20px;
    line-height: 39px;
    font-family: 'Open Sans',sans-serif;
    color: #0c0c66;
    text-align: center;
    position: relative;
}
.register_dashboard_latest h5:after {
    content: '';
    width: 90px;
    display: inline-block;
    background: #0c0c66;
    height: 2px;
    margin: 0 auto;
    position: absolute;
    bottom: -2px;
    left: 0;
    right: 0;
    font-family: 'Open Sans',sans-serif;
}
.row:before {
    display: table;
    content: " ";
}
 .col-sm-6 {
    padding: 0 48px;
}
.validate-input {
    margin-bottom: 40px;
    top: 0;
    left: 0;
    position: relative;
}

.validate-input label {
    width: 100%;
    font-family: 'Open Sans',sans-serif;
    position: relative;
}
.latest_register label {
    display: block;
    top: 0;
    left: 0;
    position: relative;
}
label {
    pointer-events: inherit !important;
}
label {
    font-size: 14px;
    font-weight: 400;
    position: absolute;
    pointer-events: none;
    left: 15px;
    text-transform: capitalize;
    top: 13px;
    color: #8989be;
    transition: .2s ease all;
    -moz-transition: .2s ease all;
    -webkit-transition: .2s ease all;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
.label_name {
    font-size: 16px;
    line-height: 22px;
    color: #80868c;
    font-family: 'Open Sans',sans-serif;
    font-weight: 600;
    margin-bottom: 10px;
    display: block;
}
/*input {*/
/*    height: 52px;*/
/*    border: solid 1px #dadce0;*/
/*    border-radius: 8px;*/
/*    background: #fff;*/
/*    font-family: 'Open Sans',sans-serif;*/
/*    padding: 0 16px;*/
/*    width: 100%;*/
/*    font-size: 15px;*/
/*    font-weight: 600;*/
/*    color: #232327;*/
/*}*/
.error-validation {
    color: red!important;
    font-size: 12px;
    margin-left: 18px;
    padding-top: 10px;
}

.help-block {
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
    color: #737373;
}
.select2 {
    width: 100% !important;
}
.select2 {
    height: 52px;
}
.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
}
.login100-form-btn {
    height: 52px!important;
    width: 41%!important;
    margin: 0 auto;
    background-color: #0c0c66;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 700;
    font-family: 'Open Sans',sans-serif;
    text-transform: capitalize;
    line-height: 1.5;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 15px;
    float: none;
}
button {
    outline: 0!important;
    border: none;
}
.row:after {
    clear: both;
}
.latest_register input {
    height: 52px;
    border: solid 1px #dadce0;
    border-radius: 8px;
    background: #fff;
    font-family: 'Open Sans',sans-serif;
    padding: 0 16px;
    width: 100%;
    font-size: 15px;
    font-weight: 600;
    color: #232327;
}
.register_title {
    margin-bottom: 23px;
}
.l_g{
    margin: 0;
    font-size: 35px;
    line-height: 47px;
    font-family: 'Open Sans',sans-serif;
    color: #0c0c66;
    font-weight: 600;
}
.select2-selection__rendered {
    display: block;
    padding-left: 8px;
    padding-right: 20px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
 .select2-selection__rendered {
    font-size: 16px;
    font-weight: 600!important;
}
 .select2-selection__rendered {
    color: #8989be;
    line-height: 50px!important;
}
*, :focus, :hover {
    outline: 0;
}
*, :after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
 .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 28px;
    user-select: none;
    -webkit-user-select: none;
}
.fs_70{
    font-size: 70px;
}
.man_img {
    z-index: -6;
    max-width: 100%;
    display: block;
    transform: translateX(0%);
    margin-top: 100px;
}
.h_450px{
    height: 220px;
}
@media(max-width:767px){
    .man_img {
    z-index: -6;
    max-width: 100%;
    display: block;
    transform: translateX(0%);
}
.h_450px {
     height: unset; 
}
.wrap-login100.tab {
    padding: 25px 25px 25px!important;
    }
}
</style>
@section('content')

<div class="container">
<div class="row">
<div class="col-md-4"><div class="">
    <img src="public/uploads/all/buyer_vector.jpg" alt="banner" width="100%;" class="h_450px man_img" loading="lazy">
</div></div>
<div class="col-md-8 mt-5">
    <div class="limiter">
    <div class="wrap-login100 tab">
        <div class="formsection" data-select2-id="21">
            <form method="POST" action="{{url('/submit_done')}}" accept-charset="UTF-8" class="login100-form" enctype="multipart/form-data" >
                @csrf
              

            <div id="userRegisterForm" data-select2-id="userRegisterForm" style="">
 
            <div class="register_dashboard_latest">
                <h5>ORGANIZATION REGISTRATION</h5>
            </div>
                <input class="input100 onlytext d-none" minlength="3" name="first_name" type="text" autocomplete="off" maxlength="" value="{{session('first_name')}}">
                <input class="input100 onlytext d-none" minlength="3" name="last_name" type="text" autocomplete="off" maxlength="" value="{{session('last_name')}}">
                <input class="input100 onlytext d-none" minlength="3" name="email" type="text" autocomplete="off" maxlength="" value="{{session('email')}}">
                <input class="input100 onlytext d-none" minlength="3" name="email_otp" type="text" autocomplete="off" maxlength="" value="{{session('email_otp')}}">
                <input class="input100 onlytext d-none" minlength="3" name="phonenumber" type="text" autocomplete="off" maxlength="" value="{{session('phonenumber')}}">
                <input class="input100 onlytext d-none" minlength="3" name="phone_otp" type="text" autocomplete="off" maxlength="" value="{{session('phone_otp')}}">
                <input class="input100 onlytext d-none" minlength="3" name="password" type="text" autocomplete="off" maxlength="" value="{{session('password')}}">
                <input class="input100 onlytext d-none" minlength="3" name="password_confirmation" type="text" autocomplete="off" maxlength="" value="{{session('password_confirmation')}}">
                <input class="input100 onlytext d-none" minlength="3" name="primary_source" type="text" autocomplete="off" maxlength="" value="{{session('primary_source')}}">

            <div class="nwfor" data-select2-id="20">
                <div class="row">
                    <div class="col-sm-12">
                        
               <div class="form-group validate-input" data-select2-id="17">
                                        <label class="about-carbanio label_name" for="first-choice">Organization Type</label>
                                            <br>
                                        <select class="form-control about select2 input100 select2-hidden-accessible fr_gg" required="" id="organization_type" name="organization_type" data-select2-id="first-choice" tabindex="-1" aria-hidden="true">
                                            
                                            
                                            <option value="" disabled="" selected="" data-select2-id="2">Click to Select…</option>
                                            
                                          
                                            
                                                                                        
                                            <option value="1">Indian Registered Company</option>
                                            
                                                                                        
                                            <option value="2">Other than India</option>
                                            
                                      
                                     
                                                
                                                
                                        </select>


                                        <span class="help-block error-validation error-primary_source" style="color: red"></span>
                                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="wrap-input100 validate-input" data-validate="Full First Name is required">
                            <label>
                                <span class="label_name">GST No. / EIN No. / Tax ID No.</span>
                                <input class="input100 onlytext" minlength="3" id="gst-number" name="gst_number" type="text" maxlength="15" required>
                            </label>
                            <span class="help-block error-validation error-gst-number"></span>
                            
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrap-input100 validate-input" data-validate="Pan no. is required">
                            <label>
                                <span class="label_name">Pan No</span>
                                <input class="input100 onlytext"  minlength="3" id="panno" name="panno" type="text">
                            </label>
                           
                            
                        </div>
                    </div>
                </div>
                        
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrap-input100 validate-input" data-validate="Full First Name is required">
                            <label>
                                <span class="label_name">Organization Name</span>
                                <input class="input100 onlytext"  minlength="3" id="Organization-name" name="Organization_name" type="text" required>
                            </label>
                            <span class="help-block error-validation error-Organization_name"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrap-input100 validate-input" data-validate="Full First Name is required">
                            <label>
                                <span class="label_name">Address</span>
                                <input class="input100 onlytext"  minlength="3" id="address" name="address" type="text" autocomplete="off" maxlength="" required>
                            </label>
                            <span class="help-block error-validation error-address"></span>
                        </div>
                    </div>
                </div>
                        
                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="wrap-input100 validate-input" data-validate="Password should be min 8 and max 15 characters ">
                            <label for="cars"><span class="label_name">State</span>
                            <input class="input100 onlytext"  minlength="3" id="state_id" name="state_id" type="text" required>
                            </label>
                              <!--<select class="form-control mb-3 aiz-selectpicker ttext" id="state_id" data-live-search="true" name="state_id" required>-->
                              <!--</select>-->
                            <span class="help-block error-validation error-state_id"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrap-input100 validate-input" data-validate="Password should be min 8 and max 15 characters ">
                            <label for="cars"><span class="label_name">District</span>
                            <input class="input100 onlytext"  minlength="3" id="country_id" name="country_id" type="text" required>
                            </label>
                              <!--<select class="form-control aiz-selectpicker ttext" id="country_id" data-live-search="true" data-placeholder="{{ translate('Select your country') }}" name="country_id" required>-->
                              <!--                  <option value="">{{ translate('Select your country') }}</option>-->
                              <!--                  @foreach (\App\Models\Country::where('status', 1)->get() as $key => $country)-->
                              <!--                      <option value="{{ $country->id }}">{{ $country->name }}</option>-->
                              <!--                  @endforeach-->
                              <!--              </select>-->
                            <span class="help-block error-validation error-country_id"></span>
                        </div>
                    </div>
                </div>
                 
                <div class="row">
                    <div class="col-sm-6">
                        <div class="wrap-input100 validate-input" data-validate="Full Last Name is required">
                            <label>
                                <span class="label_name">City</span>
                                <input class="input100 onlytext"  minlength="3" id="city_id" name="city_id" type="text" required>
                                <!--<input class="input100 onlytext"  minlength="3" id="City" name="city" type="text" autocomplete="off" maxlength="">-->
                                <!--<select class="form-control mb-3 aiz-selectpicker" data-live-search="true" name="city_id" required>-->
                                </select>
                            </label>
                            <span class="help-block error-validation error-city_id"></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="wrap-input100 validate-input" data-validate="Full First Name is required">
                            <label>
                                <span class="label_name">Zip code</span>
                                <input class="input100 onlytext"  minlength="" id="zipcode" name="zipcode" type="text" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="6"  required>
                            </label>
                            <span class="help-block error-validation error-zipcode"></span>
                        </div>
                    </div>
                </div> 
                            
            </div> 
                        
                         <!-- country name fetch -->
        <input type="hidden" id="country_name" name="country_name">
    
       
            <div class="row">
                <div class="col-md-12">
                    <div class="registerbutton">
                        <div class="container-login100-form-btn1">
                            <button type="submit" class="login100-form-btn " id="user_submit_btn">Submit</button>
                        </div>
                        <!--captcha end-->
                    </div>
                </div>
            </div>

    </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<br>


<!-- error validation-->
<script>
$(document).ready( function(){
    // gst number
    $('#gst-number').focusout( function(){
        if(!$('#gst-number').val()){
            $('.error-gst-number').text("Please Enter Your GTS Number");
        }else{
            $('.error-gst-number').text("");
        }
    });
    // organization name
    $('#Organization-name').focusout( function(){
        if(!$('#Organization-name').val()){
            $('.error-Organization-name').text("Please Enter Your Organization Name");
        }else{
            $('.error-Organization-name').text("");
        }
    });
    
    // address
    $('#address').focusout( function(){
        if(!$('#address').val()){
            $('.error-address').text("Please Enter Your Address");
        }else{
            $('.error-address').text("");
        }
    });
    // State Name
    $('#state_id').focusout( function(){
        if(!$('#state_id').val()){
            $('.error-state_id').text("Please Enter Your State Name");
        }else{
            $('.error-state_id').text("");
        }
    });
    // District Name
    $('#country_id').focusout( function(){
        if(!$('#country_id').val()){
            $('.error-country_id').text("Please Enter Your District Name");
        }else{
            $('.error-country_id').text("");
        }
    });
    // City Name
    $('#city_id').focusout( function(){
        if(!$('#city_id').val()){
            $('.error-city_id').text("Please Enter Your City Name");
        }else{
            $('.error-city_id').text("");
        }
    });
    // zip code
    $('#zipcode').focusout( function(){
        if(!$('#zipcode').val()){
            $('.error-zipcode').text("Please Enter Your Zip Code");
        }else{
            $('.error-zipcode').text("");
        }
    });
    // select country
    $('#organization_type').focusout( function(){
        if(!$('#organization_type').val()){
            $('.error-primary_source').text("Please Select Any Option");
        }else{
            $('.error-primary_source').text("");
        }
    });
});

</script>

            
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script>
        $(document).ready(function(){
            
             
        
            
        });
    </script>
    <script>
        $(document).ready(function () {
             $("input[name='gst_number']").focusout(function(){
                 if($('#organization_type').val() == 1){
                     $('#country_name').val('India');
                                   if(this.value.length == 15){
                     var gst = $(this).val();
                   $.ajax({
                      url:"{{route('gstverify')}}" ,
                      type:"post",
                      data:{
                          gst_no: gst,
                          _token:"{{csrf_token()}}",
                      },
                      dataType:'json',
                      success: function(response){
                        console.log(response['taxpayerInfo']['pradr']['addr']);
                        var state = response['taxpayerInfo']['pradr']['addr']['stcd'];
                        var pincode = response['taxpayerInfo']['pradr']['addr']['pncd'];
                        
                        var panno = response['taxpayerInfo']['panNo'];
                        
                        var city = response['taxpayerInfo']['pradr']['addr']['loc'];
                        var dist = response['taxpayerInfo']['pradr']['addr']['dst'];
                        var address = response['taxpayerInfo']['pradr']['addr']['bno'];
                        var companyname = response['taxpayerInfo']['tradeNam'];
                        $("input[name='Organization_name']").val(companyname).attr("readonly", 'readonly');
                        $("input[name='address']").val(address).attr("readonly", 'readonly');
                        $("input[name='country_id']").val(dist).attr("readonly", 'readonly');
                        $("input[name='state_id']").val(state).attr("readonly", 'readonly');
                        $("input[name='city_id']").val(city).attr("readonly", 'readonly');
                        $("input[name='zipcode']").val(pincode).attr("readonly", 'readonly');
                        
                        
                        $("input[name='panno']").val(panno).attr("readonly", 'readonly');
                      }
                   });
                 }
                 }
                 else{
                     $('#country_name').val('Outside India');
                 }
                 
   
                  
              });
            /*------------------------------------------
            --------------------------------------------
            Country Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#country_id').on('change', function () {
                //alert('hyy');
                var idCountry = this.value;
                $("#state_id").html('');
                $.ajax({
                    url: "{{route('get-state')}}",
                    type: "POST",
                    data: {
                        country_id: idCountry,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                        success: function (response) {
                           
                        //var obj = JSON.parse(response);
                        
                        // if(obj != '') {
                            $('[name="state_id"]').html(response);
                            AIZ.plugins.bootstrapSelect('refresh');
                        // }
                    }
                });
            });
  
            /*------------------------------------------
            --------------------------------------------
            State Dropdown Change Event
            --------------------------------------------
            --------------------------------------------*/
            $('#state_id').on('change', function () {
                var idState = this.value;
              
                $.ajax({
                    url: "{{route('get-city')}}",
                    type: "POST",
                    data: {
                        state_id: idState,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
                     $('[name="city_id"]').html(res);
                            AIZ.plugins.bootstrapSelect('refresh');
                      
                    }
                });
            });
  
        });
    </script>

 
 
 @endsection