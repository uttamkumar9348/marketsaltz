@extends('frontend.layouts.app')


<style>
.pd_17 {
    padding: 16px 20px!important;
}
.wrap-login100 {
    padding: 44px 80px 50px !important;
    width: 100% !important;
    box-shadow: 0 10px 30px 0 rgb(0 36 100 / 10%);
    border: solid 1px rgba(0, 36, 100, .03);
}

.mainRowSignup {
    height: 52px;
    border-radius: 4px;
    background: #fff;
    position: initial;
    font-family: 'Open Sans', sans-serif;
    padding: 0 16px 0 0 !important;
    width: calc(100% + 16px);
}

.limiter {
    margin-bottom: 50px;
}
.success_clr{
    color: #43c045;
}
.error_clr{
    color: red;
}
.confirm-password{
    color: green!important;
    font-size: 13px;
}
.error-confirm-password{
    color: red!important;
    font-size: 13px;
}
.blank_password{
    color: red!important;
    font-size: 13px;
}
.fr_gg {
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
    margin: auto !important;
    display: inline-flex !important;
    padding-left: 20px !important;
}

.formsection {
    width: 100%;
}

/*input:read-only {*/
/*    background-color: #dadce0 !important;*/
/*}*/

.otp_box {
    width: 14.8% !important;
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
    font-family: 'Open Sans', sans-serif;
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
    font-family: 'Open Sans', sans-serif;
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
    font-family: 'Open Sans', sans-serif;
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
    font-family: 'Open Sans', sans-serif;
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
    font-family: 'Open Sans', sans-serif;
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
    color: red !important;
    font-size: 13px;
}

.help-block {
    display: block;
    margin: 17px!important;
    margin-bottom: 10px;
    color: #737373;
}

.select2 {
    width: 100% !important;
}

.select2 {
    height: 54px !important;
    border-radius: 7px !important;
    margin-top: 25px;
    border: 1px solid #dadce0 !important;
}

.select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
}

.login100-form-btn {
    height: 52px !important;
    width: 41% !important;
    margin: 0 auto;
    background-color: #0c0c66;
    border-radius: 5px;
    font-size: 18px;
    font-weight: 700;
    font-family: 'Open Sans', sans-serif;
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
    outline: 0 !important;
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
    font-family: 'Open Sans', sans-serif;
    padding: 0 16px;
    width: 100%;
    font-size: 15px;
    font-weight: 600;
    color: #232327;
}

.register_title {
    margin-bottom: 23px;
}

.l_g {
    margin: 0;
    font-size: 35px;
    line-height: 47px;
    /*font-family: 'Open Sans', sans-serif;*/
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
    font-weight: 600 !important;
}

.select2-selection__rendered {
    color: #8989be;
    line-height: 50px !important;
}

*,
:focus,
:hover {
    outline: 0;
}

*,
:after,
:before {
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

.man_img {
    z-index: -6;
    margin-top: 100px;
    max-width: 100%;
    display: block;
    transform: translateX(0%);
    margin-bottom: 20px;
}

.h_450px {
    height: 220px;
}

 .loading-container {
      display: flex;
    align-items: center;
    justify-content: right;
    position: relative;
 }
.loading-container .loading {
    height: 49px;
    width: 49px;
    border-radius: 50%;
    border-style: solid;
    border-width: var(--border-width);
    border-color: transparent #2e3192 transparent #2e3192;
    position: absolute;
    bottom: 0;
    right: 8px;
}
 .loading-container .loading::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: calc(23%);
    width: calc(26%);
    border-radius: 50%;
    border-style: solid;
    border-width: calc(21px);
    box-sizing: border-box;
    border-color: #2e3192 transparent #2e3192 transparent;
    animation: animate 3s ease-in-out infinite backwards;
}
.loading-container .loading1 {
    height: 49px;
    width: 49px;
    border-radius: 50%;
    border-style: solid;
    border-width: var(--border-width);
    border-color: transparent #2e3192 transparent #2e3192;
    position: absolute;
    bottom: 0;
    right: 8px;
}
 .loading-container .loading1::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: calc(23%);
    width: calc(26%);
    border-radius: 50%;
    border-style: solid;
    border-width: calc(21px);
    box-sizing: border-box;
    border-color: #2e3192 transparent #2e3192 transparent;
    animation: animate 3s ease-in-out infinite backwards;
}

 @keyframes animate {
   0% {
     transform: translate(-50%, -50%) rotate(-90deg);
   }
   50% {
     transform: translate(-50%, -50%) rotate(90deg);
   }
   100% {
     transform: translate(-50%, -50%) rotate(-90deg);
   }
 }
 .otp-countdown{
    display: inline-block;
    margin: 0 auto;
    padding: 8px 27px;
    background-color: #c5c5c5;
    border-radius: 7px;
    color: #2e3192!important;
    position: absolute;
    right: 8px;
    top: 54px;
}
.timmer{
    display: none;
}
.fs_20{
    font-size: 20px;
}

@media(max-width:767px){
    .l_g {
    margin: 10px!important;
    font-size: 22px!important;
    line-height: 26px;
    /* font-family: 'Open Sans', sans-serif; */
    color: #0c0c66;
    font-weight: 600;
    }
    .validate-input {
    margin-bottom: 0px!important;
    top: 0;
    left: 0;
    position: relative;
}
}
@media(max-width:991px){
    .h_450px {
    height: 100%;
    }
    .man_img {
    z-index: -6;
    max-width: 100%;
    display: block;
    transform: unset;
    }
    .li_brd {
    border: 1px solid white;
    padding: 10px!important;
    text-align: left!important;
    font-size: 12px!important;
    }
    .l_g {
    margin: 0;
    font-size: 30px;
    line-height: 34px;
    /* font-family: 'Open Sans', sans-serif; */
    color: #0c0c66;
    font-weight: 600;
    }
    .wrap-login100.tab {
    padding: 25px 25px 25px!important;
    }
}
.buyer-head{
    color: #fff !important;
}
.li_brd {
    padding: 8px !important;
}
</style>
@section('content')
<!--<div class="bg-buyer">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.62/jquery.inputmask.bundle.js"></script>
<!--</div>-->

<br>
<div class="container">
    <div class="row">
       
        <div class="col-md-4">
            <div class="col-xl-12 col-sm-12 col-12">
                 <div class="">
                    <img src="public/uploads/all/buyer_vector.jpg" alt="banner" width="100%;" class="h_450px man_img" loading="lazy">
                </div>
                <div class="row">
                    <ul class="col-xl-12 col-sm-12 col-12">
                        <li class="buyer-head fs_20 pr-15px li_brd mb-2"><i class="las la-hand-point-right pr-10px"></i>No
                            hassle of finding a best supplier</li>
                        <li class="buyer-head fs_20 pr-15px li_brd mb-2"><i class="las la-hand-point-right pr-10px"></i>No
                            wait for Quotations</li>
                        <li class="buyer-head fs_20 pr-15px li_brd mb-2"><i class="las la-hand-point-right pr-10px"></i>No
                            negotiations to lapse your valuable time</li>
    
                    </ul>
                    <ul class="col-xl-12 col-sm-12 col-12">
                        <li class="buyer-head fs_20 pr-15px li_brd mb-2"><i
                                class="las la-hand-point-right pr-10px"></i>Instant & competitive price at your finger tips
                        </li>
                        <li class="buyer-head fs_20 pr-15px li_brd mb-2"><i class="las la-hand-point-right pr-10px"></i>Pay
                            in your local currency</li>
                        <li class="buyer-head fs_20 pr-15px li_brd mb-2"><i
                                class="las la-hand-point-right pr-10px"></i>marketsaltz take care of the delivery at your
                            door step</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="register_title">
        <h4 class="l_g">REGISTER NOW AND BUY</h4>


    </div>
    <div class="active_list_section">
        <ul>
            <li class="active_list" onclick="backToUserRegister()"></li>
            <li class=""></li>
        </ul>
    </div>

    <div class="limiter">
        <div class="wrap-login100 tab">
            <div class="formsection" data-select2-id="21">
                <form method="post" action="{{url('/submit_next')}}"  class="login100-form validate-user-form" id="validate_pass"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_token" value="X4XvwYjC1FE6B4wM7rtrLDE8yv7ghOP0lV0xprYG">

                    <div id="userRegisterForm" data-select2-id="userRegisterForm" style="">

                        <div class="register_dashboard_latest">
                            <h5>USER REGISTRATION</h5>
                        </div>
                        <div class="nwfor" data-select2-id="20">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate="Full First Name is required">
                                        <label>
                                            <span class="label_name">First Name </span>
                                            <input class="input100 onlytext" placeholder="First Name" minlength="3"
                                                id="first_name" name="first_name" type="text" autocomplete="off"
                                                maxlength="" required>
                                        </label>
                                        <span class="help-block error-validation error-first_name"></span>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate="Full Last Name is required">
                                        <label>
                                            <span class="label_name">Last Name</span>
                                            <input class="input100 onlytext" placeholder="Last Name" minlength="3"
                                                id="last_name" name="last_name" type="text" autocomplete="off"
                                                maxlength="" required>
                                        </label>
                                        <span class="help-block error-validation error-last_name"></span>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate="Full First Name is required">
                                        <label>
                                            <span class="label_name">Email ID <span id="image3"></span></span>
                                            <input type="hidden" name="email" id="hidden_email"> 
                                            <input class="input100 onlytext" placeholder="your@email.com" minlength="3"
                                                id="email" name="email" type="email" autocomplete="off"
                                                maxlength="" required>
                                                <div class="loading-container">
                                                  <div class="loading1"></div>
                                                </div>
                                        </label>
                                        <span class="help-block error-validation error-email"></span>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate="Full First Name is required">
                                        <label>
                                            <span class="label_name">Email  Otp </span>
                                            <input type="text" class="input100" name="email_otp" id="email_otp" placeholder="0 0 0 0 0 0"
                                           value=""  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="6" required>
                                        </label>
                                        <span class="help-block error-validation error-email-otp"></span>
                                    </div>
                                    <div class="text-center">
                                        <div class="otp-countdown timmer"  id="timer-countdown1">05:00</div>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate="Full First Name is required">
                                        <label>
                                            <span class="label_name">Phone Number <span id="image"></span> </span>
                                                  
                                               <input type="hidden" name="phonenumber" id="hidden_phone"> 
                                            <input class="input100 onlytext" placeholder="0000000000" minlength="3"
                                                id="phonenumber" type="text" autocomplete="off"
                                                maxlength="10"
                                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" required>
                                                <div class="loading-container">
                                                  <div class="loading"></div>
                                                </div>
                                                
                                                
                                                
                                        </label>
                                      
                                        <span class="help-block error-validation error-phone"></span>

                                    </div>
                                </div>
                              
                                          
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate="Full First Name is required">
                                        <label>
                                            <span class="label_name">Phone Otp </span>
                                            <input type="text" class="input100" name="phone_otp" id="is_phone_otp_verf" placeholder="0 0 0 0 0 0"
                                            value="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="6" required>
                                        </label>
                                        <span class="help-block error-validation error-phone-otp"></span>

                                    </div>
                                    <div class="text-center">
                                        <div class="otp-countdown timmer"  id="timer-countdown">05:00</div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate="Password should be min 8 and max 15 characters ">
                                        <label><span class="label_name">Password</span>
                                            <input type="password" class="input100" placeholder="********" id="password"  data-validate="password" name="password"
                                                type="text" value="" maxlength="15" aria-autocomplete="list" required>
                                            <p class="pass_btn" onclick="showHidePassword('password')">
                                                <!--<i class="fa fa-eye" aria-hidden="true"></i>-->
                                                <!--<i class="fa fa-eye-slash" aria-hidden="true"></i>-->
                                            </p>
                                            <!-- <span class="focus-input100"></span> -->
                                        </label>
                                        <span class="help-block blank_password"></span>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="wrap-input100 validate-input"
                                        data-validate=" Valid Comfirm Password is required ">
                                        <label><span class="label_name">Confirm Password <span id="passimage"></span></span>
                                            <input type="password" class="input100 success_clr error_clr" placeholder="********" id="password_confirmation"
                                                name="password_confirmation" type="text" value="" maxlength="" required>
                                            <p class="pass_btn" onclick="showHidePassword('password_confirmation')">
                                                <!--<i class="fa fa-eye" aria-hidden="true"></i>-->
                                                <!--<i class="fa fa-eye-slash" aria-hidden="true"></i>-->
                                            </p>
                                            <!--   <span class="focus-input100"></span> -->
                                        </label>
                
                                            <span class="help-block  confirm-password"
                                            style="color: green"></span>
                                            <span class="help-block  error-confirm-password"
                                            style="color: green"></span>
                                    </div>
                                </div>
                            </div>
                            <!--captcha start-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group validate-input" data-select2-id="17">
                                        <label class="about-carbanio label_name" for="first-choice">How do you know
                                            about MarketSaltz?</label>
                                        <select
                                            class="form-control about select2 input100 select2-hidden-accessible fr_gg"
                                            required="" id="first-choice" name="primary_source"
                                            data-select2-id="first-choice" tabindex="-1" aria-hidden="true">
                                            
                                            
                                            <option value="" disabled="" selected="" data-select2-id="2">Click to Select…</option>
                                            
                                          
                                            
                                            @foreach($registration_form as $registration_lists)
                                            
                                            <option value="{{ $registration_lists->id }}" >{!! $registration_lists->option !!}</option>
                                            
                                            @endforeach
                                            <!--<option value="1" >I found through Internet search</option>-->
                                            <!--<option value="2" >I found through an e-mail / newsletter</option>-->
                                            <!--<option value="3" >Marketsaltz's Marketing Team approached me</option>-->
                                            <!--<option value="4" >A known person referred me to Marketsaltz</option>-->
                                            <!--<option value="5" >I came to know through offline Advertisement</option>-->
                                            <!--<option value="6" >I found it on social media </option>-->
                                            <!--<option value="7" >I read about Marketsaltz online</option>-->
                                            <!--<option value="8" >ChemExpo 2022</option>-->
                                            <!--<option value="9" >I came to know through an Online Advertisement</option>-->
                                                
                                            <!--<option value="48" >I came to know through an Online Advertisement</option>-->
                                            <!--<option value="62" >ChemExpo 2022</option>-->
                                                
                                                
                                        </select>


                                        <span class="help-block error-validation error-primary_source"
                                            style="color: red"></span>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="registerbutton">
                                        <div class="container-login100-form-btn1">
                                            <!--<a href="{{ url('buyer') }}" class="login100-form-btn validate-form-btn"-->
                                            <!--    id="user_submit_btn">Next</a>-->
                                            <button type="submit" class="login100-form-btn validate-form-btn" id="user_submit_btn">Next</button>




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
    
    
    
</div>

<!-- error validation-->
<script>
$(document).ready( function(){
    // first name
    $('#first_name').focusout( function(){
        if(!$('#first_name').val()){
            $('.error-first_name').text("Please Enter Your First Name");
        }else{
            $('.error-first_name').text("");
        }
    });
    // last name
    $('#last_name').focusout( function(){
        if(!$('#last_name').val()){
            $('.error-last_name').text("Please Enter Your Last Name");
        }else{
            $('.error-last_name').text("");
        }
    });
    
    // password
    $('#password').focusout( function(){
        if(!$('#password').val()){
            $('.error-password').text("Please Enter Your Password");
        }else{
            $('.error-password').text("");
        }
    });
    // confirm password
    $('#password_confirmation').focusout( function(){
        if(!$('#password_confirmation').val()){
            $('.error-confirm-password').text("Please Enter Your Confirm Password");
        }else{
            $('.error-confirm-password').text("");
        }
    });
    // dropdown button
    $('#first-choice').focusout( function(){
        if(!$('#first-choice').val()){
            $('.error-primary_source').text("Please Select Any Option");
        }else{
            $('.error-primary_source').text("");
        }
    });
});

</script>


<!--//password confirm //-->
<script>
$(document).ready(function(){
$('#Passwordverify').hide();
    $('#password_confirmation').keyup(function(){
        var password=$('#password').val();
        var confirm_pass=$(this).val();
        if(password!=''){
            $('.blank_password').text('');
            
        if(password == confirm_pass){
            $('#password').prop('readonly',true);
            $('.error-confirm-password').text('');
            $('#passimage').append('<img id="Passwordverify" src="{{asset("public/assets/ok.png")}}" style="width: 19px;">')
            $('#Passwordverify').show();
            $('#password_confirmation').prop('disabled',true)
            $('input[name="password_confirmation"]').addClass('success_clr');
            $('input[name="password_confirmation"]').removeClass('error_clr');
        }
        else{
            $('.error-confirm-password').text('Password Mismatch');
           
            $('#Passwordverify').hide();
            $('#password').prop('readonly',false);
            $('#password_confirmation').prop('disabled',false);
            $('input[name="password_confirmation"]').removeClass('success_clr');
            $('input[name="password_confirmation"]').addClass('error_clr');
        }
            
        }
        else{
            $('.blank_password').text('Please Enter Password First');
            $('#password_confirmation').prop('disabled',true);
        }
    });
        
});
    
</script>
<!--//End password confirm //-->


<!--phonenumber confirm ajax-->

<script>

$(document).ready(function(){
    $('.loading').hide();
    
    
    $('#phonenumber').focusout(function(){
      
        var phone=$(this).val();
        $('#hidden_phone').val(phone);
        
        if($('#hidden_phone').val()){
            $('.error-phone').text("");
        }  
      
      $.ajax({
          url:"{{'/phone_otp'}}",
          type:"post",
          beforesend:function(){
              $('.loading').hide();
          },
          
          data:{
              phone:phone,
              _token:"{{csrf_token()}}"
          },
          success:function(response){
               if(response.status==204){
                   $('.error-phone').text("Please Enter valid Phone Number");
                   
               }
               else{
                   $('.error-phone').text();
                   $('#phonenumber').prop("disabled", true);
                   $('#timer-countdown').removeClass("timmer");
                   if ($('#timer-countdown').length) {
    function countdown( elementName, minutes, seconds )
    {
        var element, endTime, hours, mins, msLeft, time;
        function twoDigits( n )
        {
            return (n <= 9 ? "0" + n : n);
        }
        function updateTimer()
        {
            msLeft = endTime - (+new Date);
            if ( msLeft < 1000 ) {
                element.innerHTML = "<a href=>Resend</a>";
                $('#phonenumber').prop("disabled", false);
            } else {
                time = new Date( msLeft );
                hours = time.getUTCHours();
                mins = time.getUTCMinutes();
                element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
            }
        }
        element = document.getElementById( elementName );
        endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
        updateTimer();
    }
    countdown( "timer-countdown", 10, 0 );
}
               }
              
          },
           
      });
  
    });
    $('#phonenumber').focusout(function(){
        
       
    });
    
});
</script>
<script>
    // -------- coundown-timer-----
$(document).ready(function(){
      $('#mobileverify').hide();
  
    $('#is_phone_otp_verf').keyup(function(){
    var phone=$('#phonenumber').val();
    
       var otp_val=$(this).val();
       if(otp_val.length==6){
           $('.error-phone-otp').text('');
           
           $.ajax({
               url:"{{'/otp_check'}}",
                type:"post",
                data:{
              phone:phone,
              otp_val:otp_val,
              _token:"{{csrf_token()}}"
          },
          success:function(response){
               $('.loading').hide();
              if(response.status==205){
                  $('.error-phone-otp').text('OTP Expired');
              }
             else{
                 
                  if(response.status==206){
                     $('.error-phone-otp').text('Invalid OTP');
                     
                 }
                  else{
                      $('#is_phone_otp_verf').prop('disabled',true);
                      $('#phonenumber').prop('readonly',true);
                      $('#image').empty().append('<img id="mobileverify" src="{{asset("public/assets/verified.png")}}" style="width: 50px;">')
                      $('#mobileverify').show();
                      $('#loading-container').hide();
                      $('#timer-countdown').addClass("timmer");
                  }
            }
          },
           });
       }
        
    });
   
    
});

</script>

<!--Mail confirm ajax-->

<script>

$(document).ready(function(){
    $('.loading1').hide();
    
    
    $('#email').focusout(function(){
      
        var email=$(this).val();
        $('#hidden_email').val(email);
        
        if($('#email').val()){
            $('.error-email').text("");
        } 
      
      $.ajax({
          url:"{{'/email_otp'}}",
          type:"post",
          beforesend:function(){
              $('.loading1').hide();
          },
          
          data:{
              email:email,
              _token:"{{csrf_token()}}"
          },
          success:function(response){
               if(response.status==204){
                    $('.error-email').text("Please Enter valid Email Address");
                        
               }
               else if(response.status==201){
                   $('.error-email').text("Email account already exists");
                   
               }
               else{
                   $('.error-email').text();
                   $('#email').prop("disabled", true);
                   $('#timer-countdown1').removeClass("timmer");
                   if ($('#timer-countdown1').length) {
    function countdown( elementName, minutes, seconds )
    {
        var element, endTime, hours, mins, msLeft, time;
        function twoDigits( n )
        {
            return (n <= 9 ? "0" + n : n);
        }
        function updateTimer()
        {
            msLeft = endTime - (+new Date);
            if ( msLeft < 1000 ) {
                element.innerHTML = "<a href=>Resend</a>";
                $('#email').prop("disabled", false);
            } else {
                time = new Date( msLeft );
                hours = time.getUTCHours();
                mins = time.getUTCMinutes();
                element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
                setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
            }
        }
        element = document.getElementById( elementName );
        endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
        updateTimer();
    }
    countdown( "timer-countdown1", 10, 0 );
}
               }
          },
           
      });
  
    });
    $('#email').focusout(function(){
        
       
    });
    
});
</script>
<script>
    // -------- coundown-timer-----
$(document).ready(function(){
  $('#emailverify').hide();
  
    $('#email_otp').keyup(function(){
    var email=$('#email').val();
    
       var mailotp_val=$(this).val();
       if(mailotp_val.length==6){
           
               $.ajax({
                   url:"{{'/mailotp_check'}}",
                    type:"post",
                    data:{
                  email:email,
                  mailotp_val:mailotp_val,
                  _token:"{{csrf_token()}}"
              },
              success:function(response){
                  $('.loading1').hide();
                  if(response.status==205){
                      $('.error-email-otp').text("OTP Expired");
                  }
                  else{
                      if(response.status==201){
                          $('.error-email-otp').text("Please Enter valid OTP");
                      }
                      else{
                          
                          $('#email_otp').prop('disabled',true);
                          $('#email').prop('readonly',true);
                          $('#image3').empty().append('<img id="emailverify" src="{{asset("public/assets/verified.png")}}" style="width: 50px;">');
                          $('#emailverify').show();
                          $('#loading-container').hide();
                          $('#timer-countdown1').addClass("timmer");
                          
                      }
                  }
              },
           });
       }
        
    });
   
    
});

</script>



@endsection