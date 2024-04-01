@extends('frontend.layouts.app')

@section('content')

<style>
.accordion {
  color: #fff;
    cursor: pointer;
        padding: 18px 8px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    background: #6567a8;
    margin-bottom: 5px;
}

.active, .accordion:hover {
  background-color: #0c0c0c;
}

.accordion:after {
  content: '\002B';
    color: #fff;
    font-weight: bold;
    float: right;
    margin-left: 5px;
    font-size: 15px;
}

.active:after {
  content: "\2212";
}

.panel {
      padding: 0 18px;
    background-color: #2e319236;
    margin-bottom: 5px;
    max-height: 0;
    overflow: hidden;
    font-size: 14px;
    transition: max-height 0.2s ease-out;
}
.pd_acc{
    padding: 10px 0px;
}
.pd_faq{
    padding: 30px 0px;
}
.hgt_1{
     height: 472px;
}
.hgt_2{
    height: 744px;
}
.hgt_400{
    height: 400px;
}
.hgt_600{
    height: 600px;
}

@media(max-width:991px){
    .d_none{
        display: none;
    }
    .hgt_2 {
    height: unset;
    }
    .hgt_400{
        height: unset;
    }
    .hgt_600{
    height: unset;
}
}
@media(max-width:767px){
    .d_none{
        display: none;
    }
    .hgt_2 {
    height: unset;
    }
    .hgt_400{
        height: unset;
    }
    .hgt_600{
    height: unset;
}
}
</style>
<div class="container mt-4 mb-4">
   <div class="col-xl-12 col-sm-12 col-12">
       <img class="hgt_400" src="public/uploads/all/faq_ban2.jpg" width="100%" alt="faq">
   </div>
    
    <div class="col-xl-12 col-sm-12 col-12">
        <div class="row pd_faq">
            <div class="col-xl-8 col-sm-12 col-12">
                
                <button class="accordion">I am an individual, but I want to register and supply on Marketsaltz. Can I?</button>
                <div class="panel">
                  <p class="pd_acc">No, you cannot. Supplying requires a business entity to be registered as per the rules framed by the Govt. of India or if you are from any other country, rules of your native Government apply, and GST / EIN / Tax ID is mandatory to supply on Marketsaltz.</p>
                </div>
                
                <button class="accordion">I want my business brand to be displayed. Is it possible?</button>
                <div class="panel">
                  <p class="pd_acc">No, Marketsaltz does not have such policy to display business brands for chemicals. However, lab equipment / equipment brands are allowed to display.</p>
                </div>
                
                <button class="accordion">I do not have ready stock. Can I still supply on Marketsaltz?</button>
                <div class="panel">
                  <p class="pd_acc">You need to have ready stock in your warehouse. Sale Proceeds / Once the customer makes the payment, within 24 hours, Marketsaltz’s logistics team will come to your place to pick the shipment up.</p>
                </div>
                <button class="accordion">Who is responsible to pack the product?</button>
                <div class="panel">
                  <p class="pd_acc">It is the supplier who is responsible to pack the product for shipment as per the packing standards.</p>
                </div>
                <button class="accordion">Who is responsible if the Product Pack is damaged during transit?</button>
                <div class="panel">
                  <p class="pd_acc">It is the supplier who is responsible for any damage. Please be aware that packing has to be as per the packing standards and it is mandatory to adhere to the standards. For more information, please visit Indian Institute of Packaging website - <a href="">https://www.iip-in.com/</a></p>
                </div>
                <button class="accordion">Can I get enquiries on my chemical / equipment products which are listed on Marketsaltz?</button>
                <div class="panel">
                  <p class="pd_acc">Marketsaltz is an e-commerce enabler platform and its unique approach to solve the supply chain issues helps the customers to conduct the trade without any hassle. If any enquiry generates on your product, it will hit customer support team and we will ensure to address the enquiry in a proper manner without revealing your identity.</p>
                </div>
                <button class="accordion">Can the customer ask for a different weight for my chemical product?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. Customer can ask for a different weight and you can upload the new weight details for that product</p>
                </div>
                <button class="accordion">What are the list of chemicals I cannot supply?</button>
                <div class="panel">
                  <p class="pd_acc">You cannot supply the below:<br>
                    (1) Chemicals listed by the International Narcotic Control Board (INCB).<br>
                    (2) Chemicals that need narcotic manufacturing or trading license.<br>
                    (3) Any other chemical which is used against the society or India’s national security or Your Country’s national security</p>
                </div>
                <button class="accordion">Does the Marketsaltz logistics team pick up the chemical / equipment from my doorstep?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. Once you pack the chemical / equipment as per Indian Packaging Standards, Marketsaltz’s logistics team will pick up the package from your warehouse.</p>
                </div>
                
            </div>
            <div class="col-xl-4 col-sm-12 col-12 d_none">
               <div>
                   <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_accg3lm5.json"  background="transparent"  speed="1"  style="width: 100%; height: 600px;"  loop  autoplay></lottie-player> 
               </div>
               
            </div>
        </div>
        <div class="row pd_faq">
            <div class="col-xl-4 col-sm-12 col-12">
                <div class="hgt_400">
                   <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_bGJKZd.json"  background="transparent"  speed="1"  style="width: 100%;"class="hgt_600"  loop  autoplay></lottie-player>
               </div>
            </div>
            <div class="col-xl-8 col-sm-12 col-12">
                <button class="accordion">How do I upload a list of chemicals / equipment at once?</button>
                <div class="panel">
                  <p class="pd_acc">You can list multiple, readily available products on Marketsaltz. The Marketsaltz platform provides an easy user friendly interface to make your task easy. After logging in, click on My Dashboard > Supplying > Publish Products to upload either a single or list of products.</p>
                </div>
                <button class="accordion">How do I change the price of a chemical?</button>
                <div class="panel">
                  <p class="pd_acc">Whenever, you want to change email us the price details to <a href="">support@marketsaltz.com</a> and we will make the changes on behalf of your business</p>
                </div>
                <button class="accordion">What if my prices change after receiving an order?</button>
                <div class="panel">
                  <p class="pd_acc">Once an order is received, changes in pricing are not allowed for the ordered chemicals/equipment. However, if you want to change the price for future transactions, email us the desired changes and we will do it for you.</p>
                </div>
                <button class="accordion">Is there a limit on the number of chemicals / equipments  I can supply on this platform?</button>
                <div class="panel">
                  <p class="pd_acc">There is no limit to the number of chemicals / equipments you can supply on Marketsaltz.</p>
                </div>
                <button class="accordion">With in, How much time do I have to pack the chemical / equipment for shipping?</button>
                <div class="panel">
                  <p class="pd_acc">The logistics team will visit the warehouse within 24 hours from the time you receive the order confirmation to pick up the shipment.</p>
                </div>
                <button class="accordion">What happens if I cannot fulfill an order?</button>
                <div class="panel">
                  <p class="pd_acc">When you miss fulfilling the order for the first time, the Marketsaltz team will call you to understand your reason for non-fulfillment and asks for an explanation in written. When you miss it for the second time, Marketsaltz will initiate legal action.</p>
                </div>
                <button class="accordion">What do I do if there are unforeseen circumstances or natural disasters at my warehouse leading to nonfulfillment of an order?</button>
                <div class="panel">
                  <p class="pd_acc">Inform Marketsaltz via support@marketsaltz.com proactively about the situation so that they can further communicate with the customer either to seek more time or arrange alternative purchase.</p>
                </div>
                <button class="accordion">What if my stock turns zero after I accept an order?</button>
                <div class="panel">
                  <p class="pd_acc">Marketsaltz mandates the supplying of only readily available stock. Also, you should continuously update the inventory in Marketsaltz. This will help you sail through situations when the stock gets sold too fast. It will appear as out of stock still you update.<br>
                  Marketsaltz team calls you before placing an order with you. Therefore, if you take the order but can’t fulfill, your account will be suspended immediately.</p>
                </div>
                <button class="accordion">If a customer refuses a shipment for any reason, how do I get the shipment back?</button>
                <div class="panel">
                  <p class="pd_acc">Customer can refuse the product only based on 2 conflicting reasons.<br>
                    If the purity and/or quantity of the product received is different from the purity mentioned in the product details and COA.
                    During such cases, as a supplier you have to pay the following charges to get the shipment back:<br>
                    (1) Service charge<br>
                    (2) Shipment charges<br>
                    (3) Taxes as applicable</p>
                </div>
                
            </div>
        </div>
        <div class="row pd_faq">
            <div class="col-xl-8 col-sm-12 col-12">
                <button class="accordion">What do I get as part of the payment settlement?</button>
                <div class="panel">
                  <p class="pd_acc">You will receive:<br>
                    (1) Sale value (service charges will be deducted at the time of calculating the sale value).<br>
                    (2) GST / Country Specific Tax collected on the sale. You will have to remit GST to the Govt. of India or respective Tax to your Government (other than India). 
                  </p>
                </div>
                <button class="accordion">Can I advertise on the Marketsaltz platform?</button>
                <div class="panel">
                  <p class="pd_acc">Yes, you can visit Advertise With Us page by clicking here. You can find the suitable plan according to your requirement. If your requirement is different from the given plan please contact us on <a href="mail to:support@marketsaltz.com">support@marketsaltz.com</a></p>
                </div>
                 <button class="accordion">What could be the possible reasons for banning my business from Marketsaltz?</button>
                <div class="panel">
                  <p class="pd_acc">(1) Supplying and souring chemicals banned by NADP.<br>
                    (2) Writing abusive comments in product reviews.<br>
                    (3) Providing false test results of chemicals when uploading the details of the chemicals.<br>
                    (4) Adding personal details such as your phone number and email addresses in the product review or feedback section or violation of any of the marketsaltz policy.</p>
                </div>
                <button class="accordion">What if my area is not serviced by your logistics team?</button>
                <div class="panel">
                  <p class="pd_acc">Once you register and upload your list of products, Marketsaltz will come to know about your location. However, Marketsaltz team will get in touch with you in case if the area is not under serviceable.</p>
                </div>
                <button class="accordion">How do I contact Marketsaltz support center?</button>
                <div class="panel">
                  <p class="pd_acc">Write to us at <a href="mail to:support@marketsaltz.com">support@marketsaltz.com</a></p>
                </div>
                <button class="accordion">How do I activate a suspended account?</button>
                <div class="panel">
                  <p class="pd_acc">Write to your support team at <a href="mail to:support@marketsaltz.com">support@marketsaltz.com</a></p>
                </div>
                <button class="accordion">What is the jurisdiction of a dispute?</button>
                <div class="panel">
                  <p class="pd_acc">All disputes arising out of the transactions of Marketsaltz.com are subject to the laws of Hyderabad, Telangana, India.</p>
                </div>
                
            </div>
            <div class="col-xl-4 col-sm-12 col-12 d_none">
                <div>
                    <img class="hgt_1" src="public/uploads/all/faq_1.jpg" width="100%"alt="image">
                </div>
            </div>
        </div>
        <div class="row pd_faq">
            <div class="col-xl-4 col-sm-12 col-12">
                <div>
                    <lottie-player src="public/uploads/all/faq_des.json"  background="transparent"  speed="1"  loop  autoplay></lottie-player>
                </div>
            </div>
            <div class="col-xl-8 col-sm-12 col-12">
                <button class="accordion">What are the components of the payment I receive when I supply a chemical / equipment at a discounted price?</button>
                <div class="panel">
                  <p class="pd_acc">You will receive the cost of the chemical / equipment after deducting the Service charge.</p>
                </div>
                <button class="accordion">Who assures payment for my chemical / equipment product which is sold on Marketsaltz?</button>
                <div class="panel">
                  <p class="pd_acc">Marketsaltz assures the settlement of the purchase of your product.</p>
                </div>
                <button class="accordion">What standards should I maintain for packaging?</button>
                <div class="panel">
                  <p class="pd_acc">To know about the packing standards for India Please visit https://www.iip-in.com/</p>
                </div>
                <button class="accordion">Can the logistics person refuse my product for shipping?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. Logistics person can refuse primarily because of two reasons:<br>
                        (1) Lack of proper documentation.<br>
                        (2) Improper packaging.</p>
                </div>
                <button class="accordion">Who decides the price of my chemical product?</button>
                <div class="panel">
                  <p class="pd_acc">You own the product and hence you and your business will decide the price and marketsaltz in no way concerned about your pricing.</p>
                </div>
                <button class="accordion">Will the customer negotiate on the price?</button>
                <div class="panel">
                  <p class="pd_acc">No. marketsaltz is a negotiation free platform and hence, the price which is displayed by you is the final price.</p>
                </div>
                <button class="accordion">Do I need to pay for shipping the product?</button>
                <div class="panel">
                  <p class="pd_acc">No. As a supplier you do not have to pay for the shipping.</p>
                </div>
            </div>
        </div>
        <div class="row pd_faq">
            <div class="col-xl-8 col-sm-12 col-12">
                <button class="accordion">What is a service charge?</button>
                <div class="panel">
                  <p class="pd_acc">Service charge is the fee collected by Marketsaltz for providing the platform for conducting business. This is levied on each transaction that occurs on the platform.</p>
                </div>
                <button class="accordion">Do I need to pay the services charges?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. You need to pay service charges against your product sale soon after a transaction takes place.</p>
                </div>
                <button class="accordion">Can I change the price after approving the order from the customer?</button>
                <div class="panel">
                  <p class="pd_acc">No. Once you approve an order from the customer, you cannot change the price or quality or any other parameters of the product order placed.</p>
                </div>
                <button class="accordion">Will I get a document proof for the sale of the product?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. You will receive order confirmation as soon as the customer makes the payment towards the product. Order confirmation will have the information of the customer’s billing details and also the product which is purchased.</p>
                </div>
                <button class="accordion">Will I get an Invoice for Marketsaltz's service charges?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. You will receive Sales Invoice from Marketsaltz mentioning the service charges levied against the product purchased by the customer.</p>
                </div>
                <button class="accordion">Can I know how many orders I have received from Marketsaltz?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. Once you are registered on Marketsaltz, Marketsaltz will provide you with the dashboard to see all the data regarding your orders.</p>
                </div>
                <button class="accordion">Can I change the quantity mentioned for my products in Marketsaltz?</button>
                <div class="panel">
                  <p class="pd_acc">Yes. By using the dashboard, you can update the quantity mentioned in Marketsaltz for your products.</p>
                </div>
                <button class="accordion">I do not have the ready stock of the product which is mentioned in Marketsaltz. What should I do?</button>
                <div class="panel">
                  <p class="pd_acc">Using the dashboard, you can update the product's quantity to zero so that the customer will not attempt to purchase. Alternatively, if the customer has placed the order, you can reject the order by following the email you would receive from us.</p>
                </div>
                <button class="accordion">I have received bulk order from Marketsaltz. But it will take time to keep the product ready. What should I do?</button>
                <div class="panel">
                  <p class="pd_acc">For all bulk orders, Marketsaltz gives a lead time of 72 hours to keep the shipment ready. But in case if there is further delay, then you should immediately get in touch with Marketsaltz  at support@marketsaltz.com and provide the details of the order along with the additional timeline you need to keep the shipment ready.</p>
                </div>
                <button class="accordion">How can I provide the bank details to receive the product money?</button>
                <div class="panel">
                  <p class="pd_acc">As soon as your registration process is completed, Marketsaltz will email the merchant agreement document. You will have to add the information as required in the document.</p>
                </div>
                <button class="accordion">Can I supply a patent restricted product in Marketsaltz?</button>
                <div class="panel">
                  <p class="pd_acc">You can do, as long you own the product or authorized to supply the patented product in India. However, please be aware that Marketsaltz does not take the responsibility of checking the patent related issues. Being a supplier, you are responsible to take care of all patent related issues.</p>
                </div>
            </div>
            <div class=" col-xl-4 col-sm-12 col-12">
                <img class="hgt_2" src="public/uploads/all/faq_2.jpg" width="100%"alt="image">
            </div>
        </div>
    </div>
   
</div>




<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>                        
@endsection
