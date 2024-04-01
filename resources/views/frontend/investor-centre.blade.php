 @extends('frontend.layouts.app')
 <style>
     .inv_txt{
    font-size: 30px;
    font-weight: 700!important;
    text-align: center;
    
}
.inv_p{
    text-align: center;
    font-size: 17px;
    padding: 0px 100px;
        color: gray;
}

a.button {
  margin: 20px;
  font-size: 20px;
  padding: 10px 25px;
    border-radius: 25px;
    color: white;
    cursor: pointer;
}
.arrow {
  color: #ffffff!important;
  background-color: #2e3192;
  margin: 1em 0;
}
.arrow::after {
  display: inline-block;
  padding-left: 8px;
  content: "➞";
  transition: transform 0.3s ease-out;
}
.arrow:hover {
  color: #0c5449;
      background-color: #282728;
    border-radius: 30px;
}
.arrow:hover::after {
  transform: translateX(4px);
}

.bg_fade {
    background: #00283fa3;
}
.close:hover {
    background: transparent!important;
}
 </style>
 
 
 @section('content')
 
 <div class="bg-buyer">
    
</div>
<br>

<div class="container mt-4 mb-4">
    <div class="">
        <h2 class="inv_txt mb-4">
            <span style="color:#2e3192;">
                 <span style="font-family:montserrat,sans-serif;">INVESTOR </span>
            </span>
            <span style="color:#282728;">
                 <span style="font-family:montserrat,sans-serif;">CENTRE</span>
            </span>
        </h2>
        <p class="inv_p">Interested Investors, can explore companies that have a strong pipeline and a history of successfully bringing drugs to the market. Normally, it will take months together to find the right Drug Manufacturer partner, to resolve this, Saltz Investors Center Service made easy the whole process shortened and deal with it very quickly. Being at the forefront, to capture the opportunities created from the market dynamics like the increasing incidence of chronic diseases with a rising geriatric population have significantly led to the market growth for Active Pharmaceutical Ingredient (API) market.</p>
        <p class="inv_p">Moreover, the advancements in API manufacturing in the API synthesis process and the evolving Biosimilars market create opportunities in the Global Active Pharmaceutical Ingredient Market.</p>
        <p class="inv_p">Be a proud investor of the evolving Global API market which is expected to reach USD 255.56 Bn by 2025, growing at a CAGR of 6.42%.

Saltz strives to bring life to the investor ideas by linking each other through this platform. Contact us to find your best manufacturing partner.</p>
<p class="inv_p">Manufacturers who are looking for Investors can also reach us to find the right Investor for your business.</p>
<br>
<p style="text-align:Center;"><a class="button arrow" data-toggle="modal"  data-target="#exampleModalCenter">Contact Us</a></p>
<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--  Launch demo modal-->
<!--</button>-->

<!-- Modal -->
<div class="modal fade bg_fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><span style="color:#2e3192;">
                 <span style="font-family:montserrat,sans-serif;">INVESTOR </span>
            </span>
            <span style="color:#282728;">
                 <span style="font-family:montserrat,sans-serif;">FORM</span>
            </span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contact-form-wrapper justify-content-center">
            <form action="{{url('/contact_mail')}}" class="contact-form" method="post">
                @csrf
              <div>
                <input type="text" name="fullname" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
              </div>
              <div>
                <input type="email" name="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
              </div>
              <div>
                <input type="text" name="phoneno" class="form-control rounded border-white mb-3 form-input" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="10" placeholder="Phone No" required>
              </div>
              <div>
                <textarea id="message" name="msg" class="form-control rounded border-white mb-3 form-text-area" rows="2" cols="30" placeholder="Message" required></textarea>
              </div>
              <div class="submit-button-wrapper">
                <input type="submit" value="Send" class=" btn btn-primary">
              </div>
            </form>
        </div>
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      <!--</div>-->
    </div>
  </div>
</div>
    </div>
</div>
 
 
 
 @endsection