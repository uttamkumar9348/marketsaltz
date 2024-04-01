@extends('frontend.layouts.app')

@section('content')
<style>
      .hiddendiv{
display:none;
height:auto;

}

.clicker:focus + .hiddendiv{
display:block;
}

.pd_17 {
    padding: 14.5px 20px;
}
.main{
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: center;
	-ms-align-items: center;
	align-items: center;
	height: 100vh;
}
.card{
	    margin: 12px;
    box-shadow: 0 0 15px rgb(0 0 0 / 20%);
    width: 345px;
    height: 555px;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    color: #fff;
}
.mx_height{
        padding: 0px 25px!important;
     overflow-y: unset!important;
        max-height: 82vh!important;
}
.close{
    background: transparent!important;
}
.brd_2px{
        border: 2px solid;
}
.card h1,
.card h2{
	margin: 10px;
}
.card h2{
	font-size: 28px;
}

hr{
	opacity: 0.3;
}

.card li{
	margin: 5px;
	padding: 5px;
	text-align: left;
	font-size: 18px;
}

.card button{
	    position: absolute;
    display: block;
    background-color: transparent;
    padding: 8px 40px;
    margin-top: 43px;
    color: #fff;
    border: 1px solid;
    bottom: 21px;
    left: 95px;
	
}

.card:nth-child(1){
    background: rgb(46 49 146);
	/*background: linear-gradient(91deg, #00b007ad, #ff4343c7);*/
	height: 590px;
}
.card:nth-child(2){
    background: rgb(46 49 146);
	/*background: linear-gradient(113deg, rgba(66,187,223,1) 0%, rgba(91,229,132,1) 100%);*/
	height: 590px;
	box-shadow: 0 0 20px rgba(0,0,0,0.4);
}
.card:nth-child(3){
    background: rgb(46 49 146);
	/*background: linear-gradient(113deg, rgba(66,143,223,1) 0%, rgba(229,91,193,1) 100%);*/
}
.card:nth-child(4){
    background: rgb(46 49 146);
	/*background:linear-gradient(113deg, rgb(66 78 223) 0%, rgba(91,229,132,1) 100%);*/
	height: 590px;
	box-shadow: 0 0 20px rgba(0,0,0,0.4);
}
.modal-dialog-centered{
    max-width: 1500px!important;
        
}
.bg_fade{
    background: #00283fa3;
    padding-right: 0px!important;
}
.box{
        color: #fff;
       
        display: none;
        
    }
    
.txt_left{
    text-align: left!important;
    margin: 0;
}
.chk_box{
    position: relative;
    padding-left: 11px;
    font-size: 15px;
}
.chk_amt1{
    display: block;
    position: absolute;
    top: 0px;
    left: 114px;
    color: #ffec56;
}
.chk_amt2{
    display: block;
    position: absolute;
    top: 22px;
    left: 160px;
    color: #ffec56;
}
.chk_amt3{
    display: block;
    position: absolute;
    top: 44px;
    left: 124px;
    color: #ffec56;
}
.chk_amt1{
    display: none;
}
.chk_amt2{
    display: none;
}
.chk_amt3{
    display: none;
}


/* ===== Scrollbar CSS ===== */
  /* Firefox */
  .scroll_bar {
    scrollbar-width: thin;
    scrollbar-color: #006eb0 #ffffff;
  }

  /* Chrome, Edge, and Safari */
  .scroll_bar::-webkit-scrollbar {
    width: 6px;
  }

  .scroll_bar::-webkit-scrollbar-track {
    background: #006eb0;
  }

  .scroll_bar::-webkit-scrollbar-thumb {
        background-color: #ffffffeb;
    border-radius: 0px;
    border: 1px ridge #006eb0;
  }
  .scroll_bar{
      overflow-y: scroll;
    height: 355px;
  }
  .mtb_50{
      margin-top: 50px;
      margin-bottom: 50px;
  }
  
  
/*  input[type="checkbox"] {*/
/*  -webkit-appearance: none;*/
/*  -moz-appearance: none;*/
/*  appearance: none;*/

  /* Styling checkbox */
/*  width: 16px;*/
/*  height: 16px;*/
/*  background-color: transparent;*/
/*}*/
input[type="checkbox"] {
  accent-color: #2ecdff;
}
.ads_p{
    color: grey;
    padding: 0px 300px;
    font-size: 20px;
}
</style>

<div class="container-fluid mtb_50">
    <div class="block-title pd_t">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">
                         Advertise With Us
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </span></h3>
                </div>
                <p class="text-center ads_p">Marketsaltz helps you showcase your brand & products to reach gain more customers, build and enhance your sales, fast.</p>
    <div class="row m-0 mt-4">
        	<div class="card mb_res">
        		<h1 class="fs-23">Basic</h1><hr>
        		<ul class="">
        			<li>Featured Banner</li>
        			<div class="chk_box">
                        <p class="txt_left">Home Page <input type="checkbox" name="hp_banner" id="hp_30" value="{{(3000*18/100)+3000}}"> </p><div class="red  chk_amt1" id="hp_amt30"><strong>Rs.3000 + 18% GST</strong></div>
                        
                        <p class="txt_left">Comparision Page <input type="checkbox" name="cp_banner" id="cp_30" value="{{(3000*18/100)+3000}}"> </p><div class="green chk_amt2" id="cp_amt30"><strong>Rs.3000 + 18% GST</strong></div>
                        
                        <p class="txt_left">Product Page <input type="checkbox" name="pp_banner" id="pp_30" value="{{(3000*18/100)+3000}}"> </p><div class="blue  chk_amt3" id="pp_amt30"><strong>Rs.3000 + 18% GST</strong></div>
                    </div>
        			<li>Featured Product (30 Days x 1 Product)</li>
        			<div class="chk_box">
                        <p class="txt_left">Home Page <input type="checkbox" name="fp_hp_banner" id="fhp_30" value="{{(3000*18/100)+3000}}"> </p><div class="red  chk_amt1" id="fhp_amt30"><strong>Rs.3000 + 18% GST</strong></div>
                        <p class="txt_left">Comparision Page <input type="checkbox" name="fp_cp_banner" id="fcp_30" value="{{(3000*18/100)+3000}}"> </p><div class="green chk_amt2" id="fcp_amt30"><strong>Rs.3000 + 18% GST</strong></div>
                        <p class="txt_left">Product Page <input type="checkbox" name="fp_pp_banner" id="fpp_30" value="{{(3000*18/100)+3000}}"> </p><div class="blue  chk_amt3" id="fpp_amt30"><strong>Rs.3000 + 18% GST</strong></div>
                    </div>
        			<li>1month =30 Days x 1 Banner</li>
        			<li>2 Promotional emails to registerd members of relevant category</li>
        		
        		</ul>
        		<button class="ads_buy" type="button" value="Buy" id="basic_buy">Buy Now</button>
        	</div>
        	
            	<div class="card mb_res">
            		<h1 class="fs-23">Silver</h1><hr>
            		<!--<h2 class="fs-20">Rs.5000 + 18% GST</h2>-->
    
            		<ul class="">
            			<li>Featured Banner</li>
            			<div class="chk_box">
                            <p class="txt_left">Home Page <input type="checkbox" name="hp_banner_90" id="hp_90" value="{{(5000*18/100)+5000}}"> </p><div class="red  chk_amt1" id="hp_amt90"><strong>Rs.5000 + 18% GST</strong></div>
                            <p class="txt_left">Comparision Page <input type="checkbox" name="cp_banner_90" id="cp_90" value="{{(5000*18/100)+5000}}"> </p><div class="green chk_amt2" id="cp_amt90"><strong>Rs.5000 + 18% GST</strong></div>
                            <p class="txt_left">Product Page <input type="checkbox" name="pp_banner_90" id="pp_90" value="{{(5000*18/100)+5000}}"> </p><div class="blue  chk_amt3" id="pp_amt90"><strong>Rs.5000 + 18% GST</strong></div>
                        </div>
            			<li>Featured Product (90 Days x 1 Product)</li>
            			<div class="chk_box">
                            <p class="txt_left">Home Page <input type="checkbox" name="fp_hp_banner_90" id="fhp_90" value="{{(5000*18/100)+5000}}"> </p><div class="red  chk_amt1" id="fhp_amt90"><strong>Rs.5000 + 18% GST</strong></div>
                            <p class="txt_left">Comparision Page <input type="checkbox" name="fp_cp_banner_90" id="fcp_90" value="{{(5000*18/100)+5000}}"> </p><div class="green chk_amt2" id="fcp_amt90"><strong>Rs.5000 + 18% GST</strong></div>
                            <p class="txt_left">Product Page <input type="checkbox" name="fp_pp_banner_90" id="fpp_90" value="{{(5000*18/100)+5000}}"> </p><div class="blue  chk_amt3" id="fpp_amt90"><strong>Rs.5000 + 18% GST</strong></div>
                        </div>
            			<li>3 months =90 Days x 1 Banner</li>
            			<li>6 Promotional emails to registerd members of relevant category</li>
            		</ul>
            		<button class="ads_buy" type="button" id="silver_buy">Buy Now</button>
            	</div>
        	</form>
        	<form action="" method="post" enctype="multipart/form-data">
            	<div class="card mb_res">
            		<h1 class="fs-23">Gold</h1><hr>
            		<!--<h2 class="fs-20"><b></b>Rs.8000 + 18% GST</b></h2>-->
    
            		<ul class="">
            			<li>Featured Banner</li>
            			<div class="chk_box">
                        <p class="txt_left">Home Page <input type="checkbox" name="hp_banner_180" id="hp_180" value="{{(8000*18/100)+8000}}"> </p><div class="red  chk_amt1" id="hp_amt180"><strong>Rs.8000 + 18% GST</strong></div>
                        <p class="txt_left">Comparision Page <input type="checkbox" name="cp_banner_180" id="cp_180" value="{{(8000*18/100)+8000}}"> </p><div class="green chk_amt2" id="cp_amt180"><strong>Rs.8000 + 18% GST</strong></div>
                        <p class="txt_left">Product Page <input type="checkbox" name="pp_banner_180" id="pp_180" value="{{(8000*18/100)+8000}}"> </p><div class="blue  chk_amt3" id="pp_amt180"><strong>Rs.8000 + 18% GST</strong></div>
                    </div>
            			<li>Featured Product (180 Days x 1 Product)</li>
            			<div class="chk_box">
                        <p class="txt_left">Home Page <input type="checkbox" name="fp_hp_banner_180" id="fhp_180" value="{{(8000*18/100)+8000}}"> </p><div class="red  chk_amt1" id="fhp_amt180"><strong>Rs.8000 + 18% GST</strong></div>
                        <p class="txt_left">Comparision Page <input type="checkbox" name="fp_cp_banner_180" id="fcp_180" value="{{(8000*18/100)+8000}}"> </p><div class="green chk_amt2" id="fcp_amt180"><strong>Rs.8000 + 18% GST</strong></div>
                        <p class="txt_left">Product Page <input type="checkbox" name="fp_pp_banner_180" id="fpp_180" value="{{(8000*18/100)+8000}}"> </p><div class="blue  chk_amt3" id="fpp_amt180"> <strong>Rs.8000 + 18% GST</strong></div>
                    </div>
            			<li>6 months =180 Days x 1 Banner</li>
            			<li>12 Promotional emails to registerd members of relevant category</li>
            			
            			
            		</ul>
    
            		<button class="ads_buy" type="button" id="Gold_buy">Buy Now</button>
            	</div>
        	</form>
        	<form action="" method="post" enctype="multipart/form-data">
            	<div class="card mb_res">
            		<h1 class="fs-23">Platinum</h1><hr>
            		
    
            		<ul class="">
            			<li>Featured Banner</li>
            			<div class="chk_box">
                        <p class="txt_left">Home Page <input type="checkbox" name="hp_banner_360" id="hp_1" value="{{(10000*18/100)+10000}}"> </p><div class="red  chk_amt1" id="hp_amt"> <strong>Rs.10000 + 18% GST</strong></div>
                        <p class="txt_left">Comparision Page <input type="checkbox" name="cp_banner_360" id="cp_1" value="{{(10000*18/100)+10000}}"> </p><div class="green chk_amt2" id="cp_amt"> <strong>Rs.10000 + 18% GST</strong></div>
                        <p class="txt_left">Product Page <input type="checkbox" name="pp_banner_360" id="pp_1" value="{{(10000*18/100)+10000}}"> </p><div class="blue  chk_amt3" id="pp_amt"> <strong>Rs.10000 + 18% GST</strong></div>
                    </div>
                 
            			<li>Featured Product (360 Days x 1 Product)</li>
            			<div class="chk_box">
                        <p class="txt_left">Home Page <input type="checkbox" name="fp_hp_banner_360" id="fhp_1" value="{{(10000*18/100)+10000}}"> </p><div class="red  chk_amt1" id="fhp_amt"> <strong>Rs.10000 + 18% GST</strong></div>
                        <p class="txt_left">Comparision Page <input type="checkbox" name="fp_cp_banner_360" id="fcp_1" value="{{(10000*18/100)+10000}}"> </p><div class="green chk_amt2" id="fcp_amt"> <strong>Rs.10000 + 18% GST</strong></div>
                        <p class="txt_left">Product Page <input type="checkbox" name="fp_pp_banner_360" id="fpp_1" value="{{(10000*18/100)+10000}}"> </p><div class="blue  chk_amt3" id="fpp_amt"> <strong>Rs.10000 + 18% GST</strong></div>
                    </div>
            			<li>12 months =360 Days x 1 Banner</li>
            			<li>12 Promotional emails to registerd members of relevant category</li>
            		</ul>
            		
    
            		<button class="ads_buy" type="button" id="Platinum_buy">Buy Now</button>
            	</div>
        	</form>
        </div>
</div>



<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>Login to your Account</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                  <div class="p-3">
                        <form class="form-default" role="form" action="https://chemical.mobbsr.in/users/login/cart" method="POST">
                            
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="" placeholder="Email" name="email" id="email" autocomplete="off">
                                </div>
                            
                            <div class="form-group">
                                <input type="password" class="form-control " placeholder="Password" name="password" id="password">
                            </div>

                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember">
                                        <span class="opacity-60">Remember Me</span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="https://chemical.mobbsr.in/password/reset" class="text-reset opacity-60 fs-14">Forgot password?</a>
                                </div>
                            </div>

                            <div class="mb-5">
                                <button type="submit" class="btn btn-primary btn-block fw-600">Login</button>
                            </div>

                            <div class="text-center mb-3">
                                <p class="text-muted mb-0">Dont haave an account?</p>
                                <!--<a href="http://localhost/chemical/users/registration">Register Now</a>-->
                                <a href="http://localhost/chemical/buyer_registration">Register Now</a>
                            </div>
                        </form>

                    </div>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')

<!--package for 360days-->
<script>
    $(function () {
        $("#hp_1").click(function () {
            if ($(this).is(":checked")) {
                $("#hp_amt").show();
                
                
            } else {
                $("#hp_amt").hide();
                
            }
        });
    });
</script>
<script>
    $(function () {
        $("#pp_1").click(function () {
            if ($(this).is(":checked")) {
                $("#pp_amt").show();
            } else {
                $("#pp_amt").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#cp_1").click(function () {
            if ($(this).is(":checked")) {
                $("#cp_amt").show();
            } else {
                $("#cp_amt").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fhp_1").click(function () {
            if ($(this).is(":checked")) {
                $("#fhp_amt").show();
                
            } else {
                $("#fhp_amt").hide();
                
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fpp_1").click(function () {
            if ($(this).is(":checked")) {
                $("#fpp_amt").show();
            } else {
                $("#fpp_amt").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fcp_1").click(function () {
            if ($(this).is(":checked")) {
                $("#fcp_amt").show();
            } else {
                $("#fcp_amt").hide();
            }
        });
    });
</script>


<!--package for 180days-->
<script>
    $(function () {
        $("#hp_180").click(function () {
            if ($(this).is(":checked")) {
                $("#hp_amt180").show();
            } else {
                $("#hp_amt180").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#cp_180").click(function () {
            if ($(this).is(":checked")) {
                $("#cp_amt180").show();
            } else {
                $("#cp_amt180").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#pp_180").click(function () {
            if ($(this).is(":checked")) {
                $("#pp_amt180").show();
            } else {
                $("#pp_amt180").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fhp_180").click(function () {
            if ($(this).is(":checked")) {
                $("#fhp_amt180").show();
            } else {
                $("#fhp_amt180").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fcp_180").click(function () {
            if ($(this).is(":checked")) {
                $("#fcp_amt180").show();
            } else {
                $("#fcp_amt180").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fpp_180").click(function () {
            if ($(this).is(":checked")) {
                $("#fpp_amt180").show();
            } else {
                $("#fpp_amt180").hide();
            }
        });
    });
</script>


<!--package for 90days-->
<script>
    $(function () {
        $("#hp_90").click(function () {
            if ($(this).is(":checked")) {
                $("#hp_amt90").show();
            } else {
                $("#hp_amt90").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#cp_90").click(function () {
            if ($(this).is(":checked")) {
                $("#cp_amt90").show();
            } else {
                $("#cp_amt90").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#pp_90").click(function () {
            if ($(this).is(":checked")) {
                $("#pp_amt90").show();
            } else {
                $("#pp_amt90").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fhp_90").click(function () {
            if ($(this).is(":checked")) {
                $("#fhp_amt90").show();
            } else {
                $("#fhp_amt90").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fcp_90").click(function () {
            if ($(this).is(":checked")) {
                $("#fcp_amt90").show();
            } else {
                $("#fcp_amt90").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fpp_90").click(function () {
            if ($(this).is(":checked")) {
                $("#fpp_amt90").show();
            } else {
                $("#fpp_amt90").hide();
            }
        });
    });
</script>

<!--package for 30days-->
<script>
    $(function () {
        $("#hp_30").click(function () {
            if ($(this).is(":checked")) {
                $("#hp_amt30").show();
                var hp_val=$(this).val();
                $('#total_val').val(hp_val);
                
            } else {
                $("#hp_amt30").hide();
                $('#total_val').val('');
            }
        });
    });
</script>
<script>
    $(function () {
        $("#cp_30").click(function () {
            if ($(this).is(":checked")) {
                $("#cp_amt30").show();
            } else {
                $("#cp_amt30").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#pp_30").click(function () {
            if ($(this).is(":checked")) {
                $("#pp_amt30").show();
            } else {
                $("#pp_amt30").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fhp_30").click(function () {
            if ($(this).is(":checked")) {
                $("#fhp_amt30").show();
            } else {
                $("#fhp_amt30").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fcp_30").click(function () {
            if ($(this).is(":checked")) {
                $("#fcp_amt30").show();
            } else {
                $("#fcp_amt30").hide();
            }
        });
    });
</script>
<script>
    $(function () {
        $("#fpp_30").click(function () {
            if ($(this).is(":checked")) {
                $("#fpp_amt30").show();
            } else {
                $("#fpp_amt30").hide();
            }
        });
    });
</script>

<script>

    $('#basic_buy').on('click',function(){
        
      var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
      if(loggedIn){
          var x=[];
          if($('#hp_30').prop('checked')==true){
            x.push(1);}
            if($('#cp_30').prop('checked')==true){
                x.push(1);
            }
            if($('#pp_30').prop('checked')==true){
                x.push(1);
            }
            if($('#fhp_30').prop('checked')==true){
                x.push(1);
            }
            if($('#fcp_30').prop('checked')==true){
                x.push(1);
            }
            if($('#fpp_30').prop('checked')==true){
                x.push(1);
            }
            if(x.length!==0){
               $('#basic_buy').prop('disabled',false);
              
      var type="Basic";
      var hp_banner= $('input[name="hp_banner"]:checked').val();
      var cp_banner= $('input[name="cp_banner"]:checked').val();
      var pp_banner= $('input[name="pp_banner"]:checked').val();
      var fp_hp_banner= $('input[name="fp_hp_banner"]:checked').val();
      var fp_cp_banner= $('input[name="fp_cp_banner"]:checked').val();
      var fp_pp_banner= $('input[name="fp_pp_banner"]:checked').val();
      
    //   alert('hyy');
    $.ajax({
        url:'{{url ("/packages")}}',
        method:'post',
        data:{
            type:type,
            hp_banner:hp_banner,
            cp_banner:cp_banner,
            pp_banner:pp_banner,
            fp_hp_banner:fp_hp_banner,
            fp_cp_banner:fp_cp_banner,
            fp_pp_banner:fp_pp_banner,
            _token:'{{csrf_token()}}'
            
        },
        dataType:'json',
        success:function(response_data){
            if(response_data==true){
                window.location.href = "/payment_confirmation";
            }
        }
    });
         
          }
          else{
              $('#basic_buy').prop('disabled',true);
          }
      }
      else{
            $('#login').modal('show');
      }
        
 
    
    });
</script>
<script>
    $('#silver_buy').on('click',function(){
         var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
      if(loggedIn){
          var x=[];
          if($('#hp_90').prop('checked')==true){
            x.push(1);}
            if($('#cp_90').prop('checked')==true){
                x.push(1);
            }
            if($('#pp_90').prop('checked')==true){
                x.push(1);
            }
            if($('#fhp_90').prop('checked')==true){
                x.push(1);
            }
            if($('#fcp_90').prop('checked')==true){
                x.push(1);
            }
            if($('#fpp_90').prop('checked')==true){
                x.push(1);
            }
            if(x.length!==0){
               $('#silver_buy').prop('disabled',false);
          
        var type="Silver";
      var hp_banner_90= $('input[name="hp_banner_90"]:checked').val();
      var cp_banner_90= $('input[name="cp_banner_90"]:checked').val();
      var pp_banner_90= $('input[name="pp_banner_90"]:checked').val();
      var fp_hp_banner_90= $('input[name="fp_hp_banner_90"]:checked').val();
      var fp_cp_banner_90= $('input[name="fp_cp_banner_90"]:checked').val();
      var fp_pp_banner_90= $('input[name="fp_pp_banner_90"]:checked').val();
      
    //   alert('hyy');
    $.ajax({
        url:'{{url ("/packages")}}',
        method:'post',
        data:{
            type:type,
            hp_banner:hp_banner_90,
            cp_banner:cp_banner_90,
            pp_banner:pp_banner_90,
            fp_hp_banner:fp_hp_banner_90,
            fp_cp_banner:fp_cp_banner_90,
            fp_pp_banner:fp_pp_banner_90,
            _token:'{{csrf_token()}}'
            
        },
        dataType:'json',
        success:function(response_data){
            if(response_data==true){
                window.location.href = "/payment_confirmation";
            }
            
        }
    });
            }
            else{
                $('#silver_buy').prop('disabled',true);
            }
      }
       else{
            $('#login').modal('show');
      }
    
    });
</script>
<script>
    $('#Gold_buy').on('click',function(){
          var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
      if(loggedIn){
          var x=[];
          if($('#hp_180').prop('checked')==true){
            x.push(1);}
            if($('#cp_180').prop('checked')==true){
                x.push(1);
            }
            if($('#pp_180').prop('checked')==true){
                x.push(1);
            }
            if($('#fhp_180').prop('checked')==true){
                x.push(1);
            }
            if($('#fcp_180').prop('checked')==true){
                x.push(1);
            }
            if($('#fpp_180').prop('checked')==true){
                x.push(1);
            }
            if(x.length!==0){
               $('#Gold_buy').prop('disabled',false);
          
        var type="Gold";
      var hp_banner_180= $('input[name="hp_banner_180"]:checked').val();
      var cp_banner_180= $('input[name="cp_banner_180"]:checked').val();
      var pp_banner_180= $('input[name="pp_banner_180"]:checked').val();
      var fp_hp_banner_180= $('input[name="fp_hp_banner_180"]:checked').val();
      var fp_cp_banner_180= $('input[name="fp_cp_banner_180"]:checked').val();
      var fp_pp_banner_180= $('input[name="fp_pp_banner_180"]:checked').val();
      
    //   alert('hyy');
    $.ajax({
        url:'{{url ("/packages")}}',
        method:'post',
        data:{
            type:type,
            hp_banner:hp_banner_180,
            cp_banner:cp_banner_180,
            pp_banner:pp_banner_180,
            fp_hp_banner:fp_hp_banner_180,
            fp_cp_banner:fp_cp_banner_180,
            fp_pp_banner:fp_pp_banner_180,
            _token:'{{csrf_token()}}'
            
        },
        dataType:'json',
        success:function(response_data){
            if(response_data==true){
                window.location.href = "/payment_confirmation";
            }
        }
    });
            }
            else{
                $('#Gold_buy').prop('disabled',true);
            }
      }
       else{
            $('#login').modal('show');
      }
    
    });
</script>
<script>
    $('#Platinum_buy').on('click',function(){
            var loggedIn = {{ auth()->check() ? 'true' : 'false' }};
      if(loggedIn){
          var x=[];
          if($('#hp_1').prop('checked')==true){
            x.push(1);}
            if($('#cp_1').prop('checked')==true){
                x.push(1);
            }
            if($('#pp_1').prop('checked')==true){
                x.push(1);
            }
            if($('#fhp_1').prop('checked')==true){
                x.push(1);
            }
            if($('#fcp_1').prop('checked')==true){
                x.push(1);
            }
            if($('#fpp_1').prop('checked')==true){
                x.push(1);
            }
            if(x.length!==0){
               $('#Platinum_buy').prop('disabled',false);
          
        var type="Platinum";
      var hp_banner_360= $('input[name="hp_banner_360"]:checked').val();
      var cp_banner_360= $('input[name="cp_banner_360"]:checked').val();
      var pp_banner_360= $('input[name="pp_banner_360"]:checked').val();
      var fp_hp_banner_360= $('input[name="fp_hp_banner_360"]:checked').val();
      var fp_cp_banner_360= $('input[name="fp_cp_banner_360"]:checked').val();
      var fp_pp_banner_360= $('input[name="fp_pp_banner_360"]:checked').val();
      
    //   alert('hyy');
    $.ajax({
        url:'{{url ("/packages")}}',
        method:'post',
        data:{
            type:type,
            hp_banner:hp_banner_360,
            cp_banner:cp_banner_360,
            pp_banner:pp_banner_360,
            fp_hp_banner:fp_hp_banner_360,
            fp_cp_banner:fp_cp_banner_360,
            fp_pp_banner:fp_pp_banner_360,
            _token:'{{csrf_token()}}'
            
        },
        dataType:'json',
        success:function(response_data){
            if(response_data==true){
                window.location.href = "/payment_confirmation";
            }
        }
    });
            }
            else{
                $('#Platinum_buy').prop('disabled',true);
            }
      }
     else{
            $('#login').modal('show');
      }
    
    });
</script>

<script>
// $(document).ready(function(){
//     $('#login').modal('show');
//     $('.ads_buy').on('click',function(){
//         alert('hi');
//     });
    
// });
</script>


@endsection