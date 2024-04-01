@extends('frontend.layouts.app')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<style>
.thanks{
    font-size: 30px;
    font-weight: 700;
}
.thanks_des{
    font-size: 20px;
    font-weight: 500;
}
.hr{
     border-top: 1px dashed gray;
}
.order_no{
    font-weight: 700;
    color: #2E3192;
   
}
.sub{
    font-weight: 600;
    font-size: 20px;
}
.price{
    font-weight: 500;
    font-size:25px ;
}
.summery{
     font-size: 20px;
    font-weight: 700;
    font-size: 15px;
}
</style>
@section('content')
@php
$data = session('paymentdata');

@endphp




<div class="row justify-content-center">
    <div class="text-center">
        <div class="card">
  <div class="card-body">
    <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_fdd5z83w.json" class="img-fluid"  background="transparent"  speed="1"  style="height: 250px;"  loop  autoplay></lottie-player>
    <h3 class="thanks">Thanks for your order</h3>
    <h5 class="thanks_des">Please complete the payment to confirm the order</h5>
    <hr class="hr">
    <div class=col-md-12>
        <div class="row">
            <div class="col-md-6">
                 <h5 class="thanks_des">Order Id: <span class="order_no" id="order_id"> {{$data->order_id}}</span></h5>
                </div>
                 <div class="col-md-6">
                 <h5 class="thanks_des">Date: <span class="order_no"> {{date("jS F, Y", strtotime($data->created_at))}}</span></h5>
                </div>
        </div>
        </div>
         <hr class="hr">
         <div class="col-md-12">
             <div class="row">
             <div class="col-md-6">
             <h3 class="summery">ORDER SUMMERY<h3>
             </div>
             </div>
             </div>
             <div class="col-md-12">
                 <div class="row">
                 <div class="col-md-6">
                    <h6>{{$data->package_type}}<span> X </span><span>1</span></h6> 
                 </div>
                 <div class="col-md-6">
                   
                             <h6 class="sub">Subtotal: <span class="price"> {{$data->total_amount}}</span></h6>
                       
                          
                      
                 </div>
                 </div>
                 </div>
                  <hr class="hr">
                  <div class="col-md-12">
                      <button type="button" id="package_checkout" class="btn btn-primary">
                              Pay Now
                            </button>
                      </div>
    </div>
    </div>
    </div>
    </div>
 
   
<script src="{{asset('public/js/advertise_checkout.js')}}"></script>
@endsection