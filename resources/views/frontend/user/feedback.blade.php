
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', get_setting('website_name').' | '.get_setting('site_motto'))</title>
    <link rel="icon" href="{{ uploaded_asset(get_setting('site_icon')) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
</head>
<body>
    <div class="container mt-5" style="margin-bottom: 3rem;">
        <div class="col-12 text-center">
            @php
                $header_logo = get_setting('header_logo');
            @endphp
            @if($header_logo != null)
                <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" style="width: 30%;">
            @else
                <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" style="width: 30%;">
            @endif
        </div>
    </div>
    <div class="container mt-5" style="margin-bottom: 3rem;">
        <div class="row">
            <div class="col-md-6 offset-md-3 border p-4 shadow bg-light">
                <div class="col-12">
                    <h1 class="h4 fw-600 text-center" style="color:black">Feedback Form</h1>
                    <h6>Dear Valued Customer, </h6>
                    <blockquote>It is always our endeavor to continuously improve the quality of our services provided to you.
                        Kindly,spare few moments to let us have your feedback, it will help us to serve you better. Thank
                        you.
                    </blockquote>
                </div>
                <form action="{{url('feedback_insert')}}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$id}}">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="">Chemicals</label>
                            <select class="form-select" name="chemicals">
                                <option selected>Select Chemicals</option>
                                <option value="lab equipment’s">lab equipment’s</option>
                                <option value="essential oils">essential oils </option>
                                <option value="CRO, CMO services">CRO, CMO services</option>
                                <option value="product shipping">product shipping</option>
                                <option value="delivery services">delivery services</option>
                                <option value="payment issues">payment issues</option>
                                <option value="return / refund issues">return / refund issues</option>
                                <option value="website UI/UX">website UI/UX</option>
                                <option value="Anything addition / deletion">Anything addition / deletion</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="">Full Name:</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="col-md-12">
                            <label for="">Designation:</label>
                            <input type="text" name="designation" class="form-control" placeholder="Designation">
                        </div>
                        <div class="col-md-12">
                            <label for="">Company Name:</label>
                            <input type="text" name="company_name" class="form-control" placeholder="Company name">
                        </div>
                        <div class="col-md-12">
                            <label for="">Location:</label>
                            <input type="text" name="location" class="form-control" placeholder="Location">
                        </div>
                        <div class="col-md-12">
                            <label for="">Email:</label>
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <label for="">Mobile:</label>
                            <input type="number" name="mobile" class="form-control" placeholder="Mobile">
                        </div>
                       
                        <div class="col-md-12">

                            <h4>5-Excellent     4-Very Good    3-Satisfactory    2-Need improvement    1-Poor</h4>
                            
                            <ol>
                                <li>
                                    <label for="html">Promptness of response to your service request?</label>
                                    <input type="radio" id="html" name="service_request_response" value="5">
                                    5 &nbsp;
                                    <input type="radio" id="html" name="service_request_response" value="4">
                                    4 &nbsp;
                                    <input type="radio" id="html" name="service_request_response" value="3">
                                    3 &nbsp;
                                    <input type="radio" id="html" name="service_request_response" value="2">
                                    2 &nbsp;
                                    <input type="radio" id="html" name="service_request_response" value="1">
                                    1 &nbsp;
                                </li>

                                <li>
                                    <label for="html">Staff politeness with you while providing necessary information?</label>
                                    <input type="radio" id="html" name="staff_politeness" value="5">
                                    5 &nbsp;
                                    <input type="radio" id="html" name="staff_politeness" value="4">
                                    4 &nbsp;
                                    <input type="radio" id="html" name="staff_politeness" value="3">
                                    3 &nbsp;
                                    <input type="radio" id="html" name="staff_politeness" value="2">
                                    2 &nbsp;
                                    <input type="radio" id="html" name="staff_politeness" value="1">
                                    1 &nbsp;
                                </li>
                                <li>
                                    <label for="html">Were invoices sent intime to you?</label>
                                    <input type="radio" id="html" name="invoices_sent_intime" value="5">
                                    5 &nbsp;
                                    <input type="radio" id="html" name="invoices_sent_intime" value="4">
                                    4 &nbsp;
                                    <input type="radio" id="html" name="invoices_sent_intime" value="3">
                                    3 &nbsp;
                                    <input type="radio" id="html" name="invoices_sent_intime" value="2">
                                    2 &nbsp;
                                    <input type="radio" id="html" name="invoices_sent_intime" value="1">
                                    1 &nbsp;
                                </li>
                                <li><label for="html">Overall quality of marketsaltz services delivered to you?</label>
                                    <input type="radio" id="html" name="quality_of_delivery_service" value="5">
                                    5 &nbsp;
                                    <input type="radio" id="html" name="quality_of_delivery_service" value="4">
                                    4 &nbsp;
                                    <input type="radio" id="html" name="quality_of_delivery_service" value="3">
                                    3 &nbsp;
                                    <input type="radio" id="html" name="quality_of_delivery_service" value="2">
                                    2 &nbsp;
                                    <input type="radio" id="html" name="quality_of_delivery_service" value="1">
                                    1 &nbsp;
                                </li>
                                <li>
                                    <label for="html">Would you prefer to use marketsaltz services again?</label>
                                    <input type="radio" id="html" name="prefer_service_again" value="5">
                                    5 &nbsp;
                                    <input type="radio" id="html" name="prefer_service_again" value="4">
                                    4 &nbsp;
                                    <input type="radio" id="html" name="prefer_service_again" value="3">
                                    3 &nbsp;
                                    <input type="radio" id="html" name="prefer_service_again" value="2">
                                    2 &nbsp;
                                    <input type="radio" id="html" name="prefer_service_again" value="1">
                                    1 &nbsp;
                                </li>
                                <li>
                                    <label for="html">How would you rate marketsaltz as compared to our competitors?</label>
                                    <input type="radio" id="html" name="marketsaltz_rating" value="5">
                                    5 &nbsp;
                                    <input type="radio" id="html" name="marketsaltz_rating" value="4">
                                    4 &nbsp;
                                    <input type="radio" id="html" name="marketsaltz_rating" value="3">
                                    3 &nbsp;
                                    <input type="radio" id="html" name="marketsaltz_rating" value="2">
                                    2 &nbsp;
                                    <input type="radio" id="html" name="marketsaltz_rating" value="1">
                                    1 &nbsp;
                                </li>
                                    
                            </ol>
                        </div>
                        <div class="col-12">
                            <label for="">Please mention any other services that you would like marketsaltz to add to its portfolio?
                                </label>
                            <textarea class="form-control" name="services_add_to_portfolio" placeholder="Comment"></textarea>
                        </div>
                        <div class="col-12">
                            <label for="">Any marketsaltz employee you would like to mention of ? 
                                </label>
                            <textarea class="form-control" name="comment_box" placeholder="Comment"></textarea>
                        </div>
                        <div class="col-12 mt-5">                        
                            <button type="submit" class="btn btn-primary float-end">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>