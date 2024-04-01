@extends('frontend.layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
    .material-textfield {
  position: relative;  
}

label {
  position: absolute;
  font-size: 1rem;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
  background-color: white;
  color: gray;
  padding: 0 0.3rem;
  margin: 0 0.5rem;
  transition: .1s ease-out;
  transform-origin: left top;
  pointer-events: none;
}
input {
  font-size: 1rem;
  outline: none;
  border: 1px solid gray;
  border-radius: 5px;  
  padding: 1rem 0.7rem;
  color: gray;
  transition: 0.1s ease-out;
}
input:focus {
  border-color: #6200EE;  
}
input:focus + label {
  color: #6200EE;
  top: 0;
  transform: translateY(-50%) scale(.9);
}
input:not(:placeholder-shown) + label {
  top: 0;
  transform: translateY(-50%) scale(.9);
}
.fl_ri8{
        float: right;
}
.box_rad{
    box-shadow: 0px 0px 12px 1px lightgrey;
    padding: 40px 80px;
    border-radius: 10px;
    height: 530px;
    background: url(/public/uploads/all/bg-ch1.jpg);
    width: 100%;
    position: relative;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: revert;
}
.box_rad1{
    height: 530px;
    box-shadow: 0px 0px 12px 1px lightgrey;
        padding: 20px 60px;
    border-radius: 10px;
   background: linear-gradient(135deg, #2e3192, #2e3192bd,#2e3192);
}
.mtb_50{
        margin-top: 50px;
    margin-bottom: 50px;
}
.reg_txt{
    font-weight: 600;
    color: #6c6c6c;
    font-size: 24px;
}
.brd_rnd{
    width: 100px;
    height: 100px;
    border: solid 1.5px #2e3192;
    border-radius: 100%;
    position: relative;
    margin: 0 auto 11px;
    line-height: 7;
    box-shadow: 10px 3px 5px 2px inset #2e3192c9;
}
.w_50{
    max-width: 50px;
}
.reg_box{
    color: white;
    font-weight: 600;
}
.clr_wht{
    color: white;
        font-weight: 600;
    letter-spacing: 1px;
}
.reg_btn:hover{
    font-size: 18px;
    
    text-align: center;
    color: white;
    
    border: 1px solid #282728;
    background: linear-gradient(163deg, #2e3192, #0000002e,#2e3192);
}
.reg_btn{
    color: white;
    border: 1px solid #000000;
    background-color: #000000;
    padding: 10px 40px;
    border-radius: 23px;
}
.clr_blk{
        color: black;
}
.clr_blk:hover{
    color: white;
}
.wd_26{
        width: 26%;
}
.f_family{
    font-family: fangsong;
}

@media(max-width:767px){
    .box_rad {
    box-shadow: 0px 0px 12px 1px lightgrey;
    padding: 30px 40px;
    border-radius: 10px;
    height: 100%;
    }
    .box_rad1 {
    box-shadow: 0px 0px 12px 1px lightgrey;
    padding: 20px 40px;
    border-radius: 10px;
    background: linear-gradient(135deg, #2e3192, #2e3192bd,#2e3192);
    }
    
}

/* Google Design*/
.login-with-google-btn {
  transition: background-color .3s, box-shadow .3s;
    
  padding: 12px 16px 12px 42px;
  border: none;
  border-radius: 3px;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
  
  color: #757575;
  font-size: 14px;
  font-weight: 500;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
  
  background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTcuNiA5LjJsLS4xLTEuOEg5djMuNGg0LjhDMTMuNiAxMiAxMyAxMyAxMiAxMy42djIuMmgzYTguOCA4LjggMCAwIDAgMi42LTYuNnoiIGZpbGw9IiM0Mjg1RjQiIGZpbGwtcnVsZT0ibm9uemVybyIvPjxwYXRoIGQ9Ik05IDE4YzIuNCAwIDQuNS0uOCA2LTIuMmwtMy0yLjJhNS40IDUuNCAwIDAgMS04LTIuOUgxVjEzYTkgOSAwIDAgMCA4IDV6IiBmaWxsPSIjMzRBODUzIiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNNCAxMC43YTUuNCA1LjQgMCAwIDEgMC0zLjRWNUgxYTkgOSAwIDAgMCAwIDhsMy0yLjN6IiBmaWxsPSIjRkJCQzA1IiBmaWxsLXJ1bGU9Im5vbnplcm8iLz48cGF0aCBkPSJNOSAzLjZjMS4zIDAgMi41LjQgMy40IDEuM0wxNSAyLjNBOSA5IDAgMCAwIDEgNWwzIDIuNGE1LjQgNS40IDAgMCAxIDUtMy43eiIgZmlsbD0iI0VBNDMzNSIgZmlsbC1ydWxlPSJub256ZXJvIi8+PHBhdGggZD0iTTAgMGgxOHYxOEgweiIvPjwvZz48L3N2Zz4=);
  background-color: white;
  background-repeat: no-repeat;
  background-position: 12px 11px;
}
  .login-with-google-btn:hover {
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 2px 4px rgba(0, 0, 0, .25);
    color: #757575 !important;
  }
  
  .login-with-google-btn:active {
    background-color: #eeeeee;
  }
  
  .login-with-google-btn:focus {
    outline: none;
    box-shadow: 
      0 -1px 0 rgba(0, 0, 0, .04),
      0 2px 4px rgba(0, 0, 0, .25),
      0 0 0 3px #c8dafc;
  }
  
  .login-with-google-btn:disabled {
    filter: grayscale(100%);
    background-color: #ebebeb;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
    cursor: not-allowed;
  }
  /* LinkedIn Design*/
.login-with-linkedin-btn {
  transition: background-color .3s, box-shadow .3s;
    
  padding: 12px 16px 12px 42px;
  border: none;
  border-radius: 3px;
  box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
  
  color: #757575;
  font-size: 14px;
  font-weight: 500;
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu,Cantarell,"Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
  
  background-image: url("{{ asset('public/assets/img/linkedin.png') }}");
  background-color: white;
  background-repeat: no-repeat;
  background-position: 12px 11px;
}
  .login-with-linkedin-btn:hover {
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 2px 4px rgba(0, 0, 0, .25);
    color: #757575 !important;
  }
  
  .login-with-linkedin-btn:active {
    background-color: #eeeeee;
  }
  
  .login-with-linkedin-btn:focus {
    outline: none;
    box-shadow: 
      0 -1px 0 rgba(0, 0, 0, .04),
      0 2px 4px rgba(0, 0, 0, .25),
      0 0 0 3px #c8dafc;
  }
  
  .login-with-linkedin-btn:disabled {
    filter: grayscale(100%);
    background-color: #ebebeb;
    box-shadow: 0 -1px 0 rgba(0, 0, 0, .04), 0 1px 1px rgba(0, 0, 0, .25);
    cursor: not-allowed;
  }

</style>


<div class="container mtb_50">
    <h1 class="text-center mb_10 f_family">Hello Manufacturer !</h1>
    <div class="row mt-4">
        <div class="col-xl-5 col-sm-6 col-12 offset-xl-1 mb_10">
            <div class="box_rad">
                <form class="form-default" role="form" action="{{ route('login') }}" method="POST">
                                        @csrf
                    <div class="text-center mb_10">
                        <img src="{{asset('public/uploads/all/mom_icon.png')}}" alt="" class="wd_26">
                    </div>
                    <h5 class="mb_10 text-center reg_txt">Already Registered in MarketSaltz? Login Here</h5>
                        @if (addon_is_activated('otp_system') && env("DEMO_MODE") != "On")
                            <div class="form-group phone-form-group mb-1 material-textfield">
                                <input type="tel" id="phone-code" class="form-control-file{{ $errors->has('phone') ? ' is-invalid' : '' }}" value="{{ old('phone') }}" placeholder="" name="phone" autocomplete="off">
                                <label>Email</label>
                            </div>

                            <input type="hidden" name="country_code" value="">

                            <div class="form-group email-form-group mb-1 material-textfield d-none">
                                <input type="email" class="form-control-file {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email" id="email" autocomplete="off">
                                <label>Email</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group text-right">
                                <button class="btn btn-link p-0 opacity-50 text-reset" type="button" onclick="toggleEmailPhone(this)">{{ translate('Use Email Instead') }}</button>
                            </div>
                        @else
                            <div class="form-group material-textfield">
                                <input type="email" class="form-control-file{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email" id="email" autocomplete="off">
                                <label>Email</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        @endif

                        <div class="form-group material-textfield">
                            <input type="password" class="form-control-file {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ translate('Password')}}" name="password" id="password">
                            <label>Password</label>
                        </div>

                        <div class="row mb-2">
                            <div class="col-6">
                                <label class="aiz-checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span class=''>{{  translate('Remember Me') }}</span>
                                    <span class="aiz-square-check"></span>
                                </label>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{ route('password.request') }}" class="text-reset opacity-60 fs-14">{{ translate('Forgot password?')}}</a>
                            </div>
                        </div>

                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary btn-block fw-600">{{  translate('Login') }}</button>
                        </div>
                        
                        <div class="mb-5">
                                            <!--<a type="submit" href="https://chemical.mobbsr.in/login/google" class="login-with-google-btn">{{  translate('Sign in with Google') }}</a>-->
                                            <!--<a type="submit" href="https://chemical.mobbsr.in/auth/linkedin" class="login-with-linkedin-btn">{{  translate('Sign in with LinkedIn') }}</a>-->
                            <!--<a type="submit" href="https://chemical.mobbsr.in/social-login/linkedin/callback" class="btn btn-danger btn-block fw-600 in_btn"><i class="lab la-linkedin-in"></i>  {{  translate('Login with LinkedIn') }}</a>-->
                        </div>
                    </form>
                    @if (env("DEMO_MODE") == "On")
                        <div class="mb-5">
                            <table class="table table-bordered mb-0">
                                <tbody>
                                    <tr>
                                        <td>{{ translate('Seller Account')}}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm" onclick="autoFillSeller()">{{ translate('Copy credentials') }}</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ translate('Customer Account')}}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm" onclick="autoFillCustomer()">{{ translate('Copy credentials') }}</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{ translate('Delivery Boy Account')}}</td>
                                        <td>
                                            <button class="btn btn-info btn-sm" onclick="autoFillDeliveryBoy()">{{ translate('Copy credentials') }}</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    @endif

                    @if(get_setting('google_login') == 1 || get_setting('facebook_login') == 1 || get_setting('twitter_login') == 1)
                        <div class="separator mb-3">
                            <span class="bg-white px-3 opacity-60">{{ translate('Or Login With')}}</span>
                        </div>
                        <ul class="list-inline social colored text-center mb-5">
                            @if (get_setting('facebook_login') == 1)
                                <li class="list-inline-item">
                                    <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="facebook">
                                        <i class="lab la-facebook-f"></i>
                                    </a>
                                </li>
                            @endif
                            @if(get_setting('google_login') == 1)
                                <li class="list-inline-item">
                                    <a href="{{ route('social.login', ['provider' => 'google']) }}" class="google">
                                        <i class="lab la-google"></i>
                                    </a>
                                </li>
                            @endif
                            @if (get_setting('twitter_login') == 1)
                                <li class="list-inline-item">
                                    <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="twitter">
                                        <i class="lab la-twitter"></i>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    @endif 
            </div>
        </div>
        <div class="col-xl-5 col-sm-6 col-12">
            <div class="box_rad1">
                <div class="text-center mb-4 brd_rnd">
                <img src="{{asset('public/uploads/all/grp_logo.png')}}" alt="" class="w_50">
                </div>
                <h4 class="mb-4 text-center reg_box">Are You New To MarketSaltz ?</h4>
                    <div class="">
                        <h4 class="text-center reg_box">Businesses</h4>
                        <p class="text-center fs-16 clr_wht">Your journey to digitally sell and buy chemicals online starts here.</p>
                    </div>
                    <div class="">
                        <h4 class="text-center reg_box">Academia</h4>
                        <p class="text-center fs-16 clr_wht">No more waiting for weeks to months. Buy chemicals from multiple suppliers and receive at your doorstep.</p>
                    </div>
                    <div class="text-center">
                        <a href="manufacturer_register" class=" btn btn-outline-warning reg_btn">Register Now</a>
                    </div>
                    <!--<div class="reg_box text-center mt-4 mb-0">-->
                    <!--    <p class="fs_21">Are You Not From India ?<a href="#" class="ml_10 clr_blk">Click Here</a></p>-->
                    <!--</div>-->
                
            </div>
        </div>
    </div>
    
  </div>


@endsection