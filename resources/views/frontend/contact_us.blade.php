@extends('frontend.layouts.app')


@section('content')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<style>
    .title-left {
    margin-bottom: 40px;
}


.mb_46 {
    margin-bottom: 46px;
}
.contact-info-two ul li {
    margin-bottom: 20px;
    padding-left: 49px;
    position: relative;
}
.ar14 {
    border:2px solid #2e3192;
    border-radius: 32px;
    width: 36px;
    height: 36px;
    text-align: center;
    line-height: 33px!important;
}
.po_l0 {
    position: absolute;
    left: 0px;
    color: #282728;
}
.contact-info-two ul li p {
    margin: 0;
}
.align_center{
    text-align: -webkit-center;
}
.mx_wd_600px{
    max-width: 500px;
}
.lh_3{
    line-height: 3;
}
.contact-info-two{
    position: relative;
    top: 20px;
    right: 30px;
}
@media(max-width:767px){
    .mt-5, .my-5 {
     margin-top: unset!important; 
    }
    .contact-form {
    padding: 0;
    background-color: #ffffff;
    border-radius: 12px;
    max-width: 400px;
    }
    .contact-info-two {
    position: relative;
    top: 20px;
     right: 0px!important; 
    }
}
</style>
<div class="pd_t">
<div class="block-title pd_t">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">
                            We’d Love To Help You
                        </span>
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </h3>
                </div>
<!--<h3 class="abt">About Us</h3>-->
<p class="f_zz">Please feel free to get in touch using the form below. We'd love to hear your thoughts & answer<br> any questions you may have!</p>


</div>
<div class="container mb-4">
    <div class="col-xl-12 col-sm-12 col-12">
        <div class="row">
            <div class="col-xl-3 col-sm-12 col-12">
                <lottie-player src="public/uploads/all/contact_us.json"  background="transparent"  speed="1"   loop  autoplay></lottie-player>
            </div>
            <div class="col-xl-6 col-sm-6 col-12">
                <div>
                  <div class="contact-form-wrapper align_center justify-content-center mt-5">
                    <form action="{{url('/contact_mail')}}" class="contact-form mx_wd_600px" method="post">
                        @csrf
                      <!--<h5 class="title">Contact us</h5>-->
                      <!--<p class="description">Feel free to contact us if you need any assistance, any help or another question.-->
                      <!--</p>-->
                      <div>
                          
                      </div>
                      <div class="mb_10">
                        <input type="text" name="fullname" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                      </div>
                      <div class="mb_10">
                        <input type="email" name="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                      </div>
                      <div class="mb_10">
                        <input type="text" name="phoneno" class="form-control rounded border-white mb-3 form-input" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="10" placeholder="Phone No" required>
                      </div>
                      <div class="mb_10">
                        <textarea id="message" name="msg" class="form-control rounded border-white mb-3 form-text-area" rows="2" cols="30" placeholder="Message" required></textarea>
                      </div>
                      <div class="submit-button-wrapper">
                        <input type="submit" value="Send" class=" btn btn-primary">
                      </div>
                    </form>
                  </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="contact-info-two mt-5">
                        <h3 class="title-left">We're Great Listeners. Seriously.</h3>
                        <ul class="mb_46">
                            <li>
								<i class="las la-map-marker ar14 ar67 po_l0 fw_500"></i>
                                <p class="fw_500">Plot No.396, Ground Floor, Sri Srinivasapuram Colony, Vanasthalipuram, Hyderabad – 500070, Telangana, India.</p>
                            </li>
                            <li><a href="tel:7842160133">
                                <i class="fa fa-phone  ar14 ar166 po_l0"></i>
                                <p class="fw_500 lh_3">7842160133, 7842160136</p>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:saltzindia6@gmail.com">
                                <i class="fa fa-envelope ar14 ar166 po_l0"></i>
                                <p class="lh_3"><span class="fw_500">Email:</span>saltzindia6@gmail.com </p>
								</a> 
                            </li>
                        </ul>
						
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-4 mb-4">
    <div class="">
        <div class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3808.664166133453!2d78.55987669999999!3d17.3317454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcba386a3c4d7ab%3A0xbafbc9dc779d9720!2smarketsaltz.com!5e0!3m2!1sen!2sin!4v1667475264531!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>



@endsection