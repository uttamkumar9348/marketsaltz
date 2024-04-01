@extends('frontend.layouts.app')


@section('content')
<style>

    .reg_btn:hover{
    font-size: 18px;
    background-color: #ff7f26;
    text-align: center;
    color: white;
    border: 1px solid #ff7f26;
}
.reg_btn{
    color: white;
    border: 2px solid #22b14c;
    background: linear-gradient(163deg, #36fe71cc, #00000069,#36fe71cc);
    padding: 10px 40px;
    border-radius: 23px;
}
.text-center{
    text-align: center;
}
.clr_grey{
    color: grey;
    font-size: 15px;
     word-spacing: 2px;
}
.bp_p{
color: grey;
    font-size: 18px;
    word-spacing: 2px;
    margin-top: 10px;
    margin-left: 10px;
}
.head_af::after{
   content: '';
    width: 35px;
    display: inline-block;
    background: #0c0c66;
    height: 2px;
    margin: 0 auto;
    position: relative;
    bottom: 5px;
    left: 2px;
    font-family: 'Open Sans',sans-serif;
}
.head_af_h1::before{
        content: '';
    width: 70px;
    display: inline-block;
    background: #0c0c66;
    height: 2px;
    margin: 0 auto;
    position: relative;
    bottom: 10px;
    left: -10px;
    right: 0;
    font-family: 'Open Sans',sans-serif;
}
.head_af_h1::after{
    content: '';
    width: 70px;
    display: inline-block;
    background: #0c0c66;
    height: 2px;
    margin: 0 auto;
    position: relative;
    bottom: 5px;
    left: 10px;
    font-family: 'Open Sans',sans-serif;
}
.pd_20{
    padding: 0px 35px;
}
.pp_li{
    list-style-type: disclosure-closed;
}
.ptb{
    padding: 50px 0px;
}
.pad_box{
        padding: 37px 0px;
}
.max_100{
    max-width: 100%;
}
#arrow img {
    position: relative;
    top: 0;
    transition: top ease 0.5s;
}
#arrow:hover img {
    top: -10px;
}
.work::after{
    position: absolute;
    content: "";
    top: 26%;
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    right: -11px;
    color: #f82249;
    font-size: 82px;
    background: url(public/uploads/all/arrow_right1.png);
    background-size: 100% 100px;
    width: 29%;
    height: 100px;
}
.pp_bg{
        background: linear-gradient(45deg, #feffff, #cbcdce80,#feffff);
}
.op_img{
     border: 1px solid #2e3192;
    border-radius: 86px;
    background: #2e3192;
    height: 143px;
    width: 143px;
    line-height: 136px;
}
/*.op_img:hover{*/
/*     border: 1px solid #2e3192;*/
/*    border-radius: 86px;*/
/*    background: black;*/
/*    height: 143px;*/
/*    width: 143px;*/
/*    line-height: 136px;*/
/*}*/
@media(max-width:767px){
    .work::after {
    position: absolute;
    content: "";
    top: 71%;
    -webkit-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 115px;
    color: #f82249;
    font-size: 82px;
    background: url(public/uploads/all/arrow_right1.png);
    background-size: 100% 100px;
    width: 29%;
    height: 100px;
    transform: rotate(94deg);
}
.ptb{
    padding: 20px 0px;
}
}
</style>
<div class="container mt-4 mb-4">
    <div class="">
        <div class="mb-4">
           <h2 class="text-center fw-600 head_af_h1">No worries, we have covered you</h2>
        </div> 
        <div class="text-center">
            <a href="#" class=" btn btn-primary">Register Now</a>
            <p class="bp_p">Your all purchase transactions were protected by marketsaltz</p>
            <p class="bp_p ">Your transaction safety is our top priority</p>
        </div>
        
    </div><hr>
    <div class="">
        <div class="mb-4">
           <h5 class="fw-600 head_af">Transaction Disputes</h5>
           <p class="clr_grey">If your transaction (purchase) doesn’t meet your requirements, you can raise a request to return money or replacement of chemical with in 72 hrs of shipment receipt.</p>
        </div> 
    </div>
    <div class="">
        <div class="mb-4">
           <h5 class="fw-600 head_af">Customer Support </h5>
           <p class="clr_grey m-0">If you have problems with the purchase, you can approach your support team via
            support@marketsaltz.com
            </p>
            <p class="clr_grey">We will help you out.</p>
        </div> 
    </div>
    <div class="">
        <div class="mb-4">
           <h5 class="fw-600 head_af">Fraud Protection </h5>
           <p class="clr_grey m-0">Our payment gateway is PCI DSS Level 1 compliant along with frequent third party audits and a
dedicated internal security team to make sure your data is always safe
            </p>
        </div> 
    </div>
    <div class="">
        <div class="mb-4">
           <h5 class="fw-600 head_af">Suspicious Activity </h5>
           <p class="clr_grey m-0"><span>if you find any suspicious activity or concerned about any such activity like Identity theft or
Phishing, contact us immediately on support@marketsaltz.com</span>
            </p>
        </div> 
        <!--VECTOR WHAT WE DO SECTION START-->
        
        
        <!--VECTOR WHAT WE DO SECTION START-->
    </div>
</div>
<div class="container">
    <div class="col-xl-10 col-sm-12 col-12 offset-xl-1">
    <div class="row">
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="mb-4 ptb work dsp_inl">
                <div class="img-responsive text-center op_img" id="arrow">
            <img src="{{asset('public/uploads/all/order_ptn.png')}}" alt="" class="max_wd_100">
            </div>
            <p class="bp_p mb-1 pad_box">You order <br>Marketsaltz protects it</p><br>
           
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="mb-4 ptb work dsp_inl">
                <div class="img-responsive text-center op_img" id="arrow">
            <img src="{{asset('public/uploads/all/quality_ptn.png')}}" alt="" class="max_wd_100">
            </div>
            <p class="bp_p pad_box">Quality confirmation<br>by You</p>
            </div>
        </div>
        <div class="col-xl-4 col-sm-4 col-12">
            <div class="mb-4 ptb dsp_inl">
                <div class="img-responsive text-center op_img" id="arrow">
            <img src="{{asset('public/uploads/all/supplier_ptn.png')}}" alt="" class="max_wd_100">
            </div>
            <p class="bp_p pad_box">Payment to Supplier<br>after you confirm quality</p>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="container mt-4">
    <div class="col-xl-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-xl-7 col-sm-7 col-12">
            <div class="mb-4 ptb">
                <h5 class="fw-600 head_af mb-4">What’s under Purchase Protection</h5>
                <ul class="pd_20 clr_grey">
                    <li class="pp_li mb-2">  You received similar chemical but not the exact chemical you ordered for</li>
                    <li class="pp_li mb-2"> For example: You ordered for 100 GMS of a chemical but you received 90 GMS</li>
                    <li class="pp_li mb-2">Chemical package damaged however, other quality parameters stands same with your order</li>
                    <li class="pp_li mb-2"> The purity of the chemical is not as displayed at the time of order placing</li>
                </ul>
            </div>
        </div>
        <div class="col-xl-5 col-sm-5 col-12">
            <div class="img-responsive" id="arrow">
            <img src="{{asset('public/uploads/all/payment_protection_2.jpg')}}" alt="" class="max_100">
            </div>
        </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="col-xl-12 col-sm-12 col-12">
    <div class="row">
        <div class="col-xl-5 col-sm-5 col-12">
            <div class="img-responsive" id="arrow">
            <img src="{{asset('public/uploads/all/payment_protection.jpg')}}" alt="" class="max_100">
            </div>
        </div>
        <div class="col-xl-7 col-sm-7 col-12">
            <div class="mb-4 ptb">
                <h5 class="fw-600 head_af mb-4">What is not covered under Purchase Protection</h5>
                <ul class="pd_20 clr_grey">
                    <li class="pp_li mb-2">You purchased the chemical directly from a supplier and the transaction was not done on marketsaltz</li>
                    <li class="pp_li mb-2"> Purchased the chemical on marketsaltz however, contacted supplier without consulting marketsaltz for replacement, and supplier denies the replacement</li>
                    <li class="pp_li mb-2"> You did the Quality & Quantity confirmation after 72 Hrs and contacted marketsaltz for Refund / Replacement of chemical.</li>
                    
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection