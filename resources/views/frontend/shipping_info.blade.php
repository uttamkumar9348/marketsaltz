@extends('frontend.layouts.app')

@section('content')

<section class="pt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <div class="row aiz-steps arrow-divider">
                    <div class="col done">
                        <div class="text-center text-success">
                            <i class="la-3x mb-2 las la-shopping-cart"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">{{ translate('1. My Cart')}}</h3>
                        </div>
                    </div>
                    <div class="col active">
                        <div class="text-center text-primary">
                            <i class="la-3x mb-2 las la-map"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block ">{{ translate('2. Shipping info')}}</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-truck"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">{{ translate('3. Delivery info')}}</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-credit-card"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">{{ translate('4. Payment')}}</h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center">
                            <i class="la-3x mb-2 opacity-50 las la-check-circle"></i>
                            <h3 class="fs-14 fw-600 d-none d-lg-block opacity-50 ">{{ translate('5. Confirmation')}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-4 gry-bg">
    <div class="container">
        <div class="row cols-xs-space cols-sm-space cols-md-space">
            <div class="col-xxl-8 col-xl-10 mx-auto">
                <form class="form-default" data-toggle="validator" action="{{ route('checkout.store_shipping_infostore') }}" role="form" method="POST">
                    @csrf
                    @if(Auth::check())
                        <div class="shadow-sm bg-white p-4 rounded mb-4">
                            <h3 style="margin-left: 18px;margin-bottom: 0px;"><b>Shipping Address</b></h3>
                            <div class="row gutters-5">
                                @foreach (Auth::user()->addresses as $key => $address)
                                    <div class="col-md-6 mb-3">
                                        <label class="aiz-megabox d-block bg-white mb-0">
                                            <input type="radio" name="address_id" value="{{ $address->id }}" @if ($address->set_default)
                                                checked
                                            @endif required>
                                            <span class="d-flex p-3 aiz-megabox-elem">
                                                <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                                <span class="flex-grow-1 pl-3 text-left">
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Address') }}:</span>
                                                        <span class="fw-600 ml-2" id="s_address">{{ $address->address }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Postal Code') }}:</span>
                                                        <span class="fw-600 ml-2" id="s_pin">{{ $address->postal_code }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('City') }}:</span>
                                                        <span class="fw-600 ml-2" id="s_city">{{ optional($address->city)->name }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('State') }}:</span>
                                                        <span class="fw-600 ml-2" id="s_state">{{ optional($address->state)->name }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Country') }}:</span>
                                                        <span class="fw-600 ml-2" id="s_country">{{ optional($address->country)->name }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Phone') }}:</span>
                                                        <span class="fw-600 ml-2" id="s_phone">{{ $address->phone }}</span>
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                        <div class="dropdown position-absolute right-0" style="top:16px;">
                                            <button class="btn bg-gray px-2" type="button" data-toggle="dropdown">
                                                <i class="la la-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" onclick="delete_address('{{$address->id}}')">
                                                    {{ translate('Delete') }}
                                                </a>  
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <input type="hidden" name="checkout_type" value="logged">
                                <div class="col-md-6" style="margin-top: 13px;margin-bottom: 4px;padding-left: 26px;">
                                    <div class="border p-3 rounded mb-3 c-pointer text-center bg-white h-100 d-flex flex-column justify-content-center" onclick="add_new_address()">
                                        <i class="las la-plus la-2x mb-3"></i>
                                        <div class="alpha-7">{{ translate('Add New Address') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <input type="checkbox" id="billing_address" style="margin-left: 44px;"><b style="color:#8989be">Same as shipping address</b>
                            
                        <div class="shadow-sm bg-white p-4 rounded mb-4">
                            <h3 style="margin-left: 18px;margin-bottom: 0px;"><b>Billing Address</b></h3>
                            <div class="row gutters-5">
                            <div class="col-md-6 mb-3 same_as_spaddress">
                                <label class="aiz-megabox d-block bg-white mb-0">
                                    <input type="radio" name="billing_address_id" value="">
                                    <span class="d-flex p-3 aiz-megabox-elem">
                                        <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                        <span class="flex-grow-1 pl-3 text-left">
                                            <div>
                                                <span class="opacity-60">{{ translate('Address') }}:</span>
                                                <span class="fw-600 ml-2" id="b_address"></span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">{{ translate('Postal Code') }}:</span>
                                                <span class="fw-600 ml-2" id="b_pin"></span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">{{ translate('City') }}:</span>
                                                <span class="fw-600 ml-2" id="b_city"></span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">{{ translate('State') }}:</span>
                                                <span class="fw-600 ml-2" id="b_state"></span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">{{ translate('Country') }}:</span>
                                                <span class="fw-600 ml-2" id="b_country"></span>
                                            </div>
                                            <div>
                                                <span class="opacity-60">{{ translate('Phone') }}:</span>
                                                <span class="fw-600 ml-2" id="b_phone"></span>
                                            </div>
                                        </span>
                                    </span>
                                </label>
                            </div>
                                @foreach ($billing_address as $baddress)
                                    <div class="col-md-6 mb-3">
                                        <label class="aiz-megabox d-block bg-white mb-0">
                                            <input type="radio" name="billing_address_id" value="{{ $baddress->id }}" @if ($baddress->set_default)
                                                checked
                                            @endif required>
                                            <span class="d-flex p-3 aiz-megabox-elem">
                                                <span class="aiz-rounded-check flex-shrink-0 mt-1"></span>
                                                <span class="flex-grow-1 pl-3 text-left">
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Address') }}:</span>
                                                        <span class="fw-600 ml-2">{{ $baddress->address }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Postal Code') }}:</span>
                                                        <span class="fw-600 ml-2">{{ $baddress->pincode }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('City') }}:</span>
                                                        <span class="fw-600 ml-2">{{ optional($baddress->citi)->name }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('State') }}:</span>
                                                        <span class="fw-600 ml-2">{{ optional($baddress->stat)->name }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Country') }}:</span>
                                                        <span class="fw-600 ml-2">{{ optional($baddress->countri)->name }}</span>
                                                    </div>
                                                    <div>
                                                        <span class="opacity-60">{{ translate('Phone') }}:</span>
                                                        <span class="fw-600 ml-2">{{ $baddress->mobile }}</span>
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                @endforeach
                                <input type="hidden" name="checkout_type_1" value="logged">
                                <div class="col-md-6" style="margin-top: 13px;margin-bottom: 4px;padding-left: 26px;">
                                    <div class="border p-3 rounded mb-3 c-pointer text-center bg-white h-100 d-flex flex-column justify-content-center" id="add_billing_address">
                                        <i class="las la-plus la-2x mb-3"></i>
                                        <div class="alpha-7">{{ translate('Add New Address') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif  
                    <div class="row align-items-center">
                        <div class="col-md-6 text-center text-md-left order-1 order-md-0">
                            <a href="{{ route('home') }}" class="btn btn-link">
                                <i class="las la-arrow-left"></i>
                                {{ translate('Return to shop')}}
                            </a>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <button type="submit" class="btn btn-primary fw-600">{{ translate('Continue to Delivery Info')}}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function(){
        $('.same_as_spaddress').hide();
        $('#add_billing_address').on('click',function(){
            $('#billing-address-modal').modal('show');
        });
        $('#billing_address').on('click',function(){
            if ($(this).prop('checked')==true){ 
                $('.same_as_spaddress').show();
                var saddress = $('#s_address').text();
                var spin = $('#s_pin').text();
                var scity = $('#s_city').text();
                var sstate = $('#s_state').text();
                var scountry = $('#s_country').text();
                var sphone = $('#s_phone').text();
                var id = $("input[name=address_id]").val();


                $('#b_address').text(saddress);
                $('#b_pin').text(spin);
                $('#b_city').text(scity);
                $('#b_state').text(sstate);
                $('#b_country').text(scountry);
                $('#b_phone').text(sphone);
                $("input[name=billing_address_id]").val(id);
            }else{
                $('.same_as_spaddress').hide();
            }   
        });
    });
</script>
@endsection

@section('modal')
    @include('frontend.partials.address_modal')
    @include('frontend.partials.billing_address_modal')
@endsection