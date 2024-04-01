$(document).ready(function(){
    $('#package_checkout').on('click',function(){
        
        var price = $('.price').text();
        var order_id = $('#order_id').text();
           var options = {
                    "key": "rzp_test_VLDJk63D9StgBt", // Enter the Key ID generated from the Dashboard
                    "amount": price*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                    "currency": "INR",
                    "name": "MarketSaltz",
                    "description": "Package Payment",
                    "image": "https://chemical.mobbsr.in/public/uploads/all/RSGrfp9xkFWWgbS4wVptju0Sjtv4Fd1TMy9oEh8T.png",
                    "handler": function (response){
                     
                       $.ajax({
                           method:"POST",
                           url:'/adsuccesspayment',
                           data: {
                               payment_id:response.razorpay_payment_id,
                               order_id:order_id
                           },
                           success:function(response){
                               window.location.href = "/seller/dashboard";
                           }
                       });
              
                    },
                    "prefill": {
                        "name":"MarketSaltz",
                        "email": "gaurav.kumar@example.com",
                        "contact": "9999999999"
                    },
                    "notes": {
                        "address": "Razorpay Corporate Office"
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                  var rzp1 = new Razorpay(options);
                    rzp1.open();
    });
    
});