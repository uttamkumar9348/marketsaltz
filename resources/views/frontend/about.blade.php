@extends('frontend.layouts.app')

@section('content')

<style>
    @media(max-width:991px){
        .cert_img {
    position: relative;
    left: unset;
    }
}
    .pd_17 {
    padding: 14.7px 20px!important;
    }
</style>
<div class="pd_t">
<div class="block-title pd_t">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">
                            {{ translate('About Us') }}
                        </span>
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </h3>
                </div>
<!--<h3 class="abt">About Us</h3>-->
<p class="f_zz">Saltz believes not being able to find the ingredients should never be a reason for stopping the production of a medicine.</br> Saltz wants to fight the global medicine shortages and unnecessary high raw material prices.</br> We want to make it easier for formulation companies to produce medicines for people.</p>
<p class="f_zz">Inspired by companies such as Amazon and Flipkart, Saltz aims at giving a transparent platform to all medicine makers worldwide access to high-quality pharmaceutical ingredients.</p>

</div>
<div class="container">
    <div class="col-sm-12 col-md-12 col-xs-12 pd_tt">
    <div class="row">
        
        <div class="col-md-6">
     <h2 class="font_2" style="font-size:25px; text-align:center;">
         <span style="font-size:25px;">
             <span>
             <span style="color:#006EB0;">
                 <span style="font-family:montserrat,sans-serif;">Our </span>
                 </span>
                 </span>
                 </span>
                 <span style="font-size:25px;">
                     <span >
                         <span style="color:#FF7F26;">
                             <span style="font-family:montserrat,sans-serif;">mission</span>
                             </span>
                             </span>
                             </span>
                             </h2>
        <p class="f_zz">We help the Pharma Companies grow the ingredient it needs.</p>
        </div> 
         
        <div class="col-md-6">
          <h2 class="font_2" style="font-size:25px; text-align:center;">
              <span style="font-size:25px;">
                  <span>
                      <span style="color:#006EB0;">
                          <span style="font-family:montserrat,sans-serif;">Our </span>
                          </span>
                          </span>
                          </span>
                          <span style="font-size:25px;">
                              <span >
                                  <span style="color:#FF7F26;">
                                      <span style="font-family:montserrat,sans-serif;">Vision</span>
                                      </span>
                                      </span>
                                      </span>
                                      </h2>
        <p class="f_zz">Affordable and Healthy lives to Everyone.</p>
        </div> 
    </div>
    </div>
   </div>
   
   <div class="container pb-30px ">
        <div class="row">
            <div class="col-xl-6 col-sm-12 col-12">
                <img class="cert_img" src="public/uploads/all/saltz-certificate.jpg" alt="saltz" width="100%">
            </div>
        </div>
    </div>
@endsection

