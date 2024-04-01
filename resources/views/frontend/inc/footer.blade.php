<!--<section class="bg-white border-top mt-auto">-->
<!--    <div class="container">-->
<!--        <div class="row no-gutters">-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('terms') }}">-->
<!--                    <i class="la la-file-text la-3x text-primary mb-2"></i>-->
<!--                    <h4 class="h6">{{ translate('Terms & conditions') }}</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('returnpolicy') }}">-->
<!--                    <i class="la la-mail-reply la-3x text-primary mb-2"></i>-->
<!--                    <h4 class="h6">{{ translate('Return Policy') }}</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <a class="text-reset border-left text-center p-4 d-block" href="{{ route('supportpolicy') }}">-->
<!--                    <i class="la la-support la-3x text-primary mb-2"></i>-->
<!--                    <h4 class="h6">{{ translate('Support Policy') }}</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-3 col-md-6">-->
<!--                <a class="text-reset border-left border-right text-center p-4 d-block" href="{{ route('privacypolicy') }}">-->
<!--                    <i class="las la-exclamation-circle la-3x text-primary mb-2"></i>-->
<!--                    <h4 class="h6">{{ translate('Privacy Policy') }}</h4>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<style>
    .mb-4 {
        color: #141414;
    }
    .fw-600 {
        font-weight: 900 !important;
    }
    .mb-2{
        color: #5f5e5e;
        font-weight: 600;
    }
    .text-col-bl{
        color: #5f5e5e;
        font-weight: 600;
    }
</style>

<section class="bg-white py-5 ftr_blk footer-widget bg1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-4 col-sm-12 col-12 text-md-left">
                <div class="mt-4">
                    <div class="ftr_title position-relative">
                        <h4 class="fs-13 fw-600 pb-2 mb-4">
                            About marketsaltz
                        </h4>
                    </div>
                    <div class="my-3 text-col-bl">
                        {!! get_setting('about_us_description',null,App::getLocale()) !!}
                    </div>
                    <div class="d-inline-block d-md-block mb-4">
                        <div class="ftr_title position-relative">
                            <h4 class="fs-13 fw-600 pb-2 mb-4 mt_17">Newsletter </h4>
                        </div>
                        <form class="form-inline" method="POST" action="{{ route('subscribers.store') }}">
                            @csrf
                            <div class="form-group ">
                                <input type="email" class="form-control mt_17" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                            </div>
                            <button type="submit" class="btn pp_d bdr_btn1">
                                {{ translate('Subscribe') }}
                            </button>
                        </form>
                    </div>
                    <div class="w-300px mw-100 mx-auto mx-md-0">
                        @if(get_setting('play_store_link') != null)
                            <a href="{{ get_setting('play_store_link') }}" target="_blank" class="d-inline-block mr-3 ml-0">
                                <img src="{{ static_asset('assets/img/play.png') }}" class="mx-100 h-40px">
                            </a>
                        @endif
                        @if(get_setting('app_store_link') != null)
                            <a href="{{ get_setting('app_store_link') }}" target="_blank" class="d-inline-block">
                                <img src="{{ static_asset('assets/img/app.png') }}" class="mx-100 h-40px">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mr-0">
                <div class="text-md-left mt-4">
                    <a href="{{ route('home') }}" class="d-block text-center mb_20">
                        @if(get_setting('footer_logo') != null)
                            <img class="lazyload max_wd" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset(get_setting('footer_logo')) }}" alt="{{ env('APP_NAME') }}">
                        @else
                            <img class="lazyload" src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" height="44">
                        @endif
                    </a>
                    <p class="text-center ftr_lnk mb_20">
                        <a href="{{ route('terms') }}">Terms & conditions</a>
                        <a href="{{ route('returnpolicy') }}">Return Policy</a>
                        <a href="{{ route('supportpolicy') }}">Support Policy</a>
                        <a href="{{ route('privacypolicy') }}">Privacy Policy</a>
                        <a href="{{ route('refundpolicy') }}">Refund Policy</a>
                    </p>
                    @if ( get_setting('show_social_links') )
                        <ul class="list-inline my-3 my-md-0 social colored text-center ">
                            @if ( get_setting('facebook_link') !=  null )
                            <li class="list-inline-item">
                                <a href="{{ get_setting('facebook_link') }}" target="_blank" class="facebook  p_t"><i class="lab la-facebook-f lh"></i></a>
                            </li>
                            @endif
                            @if ( get_setting('twitter_link') !=  null )
                            <li class="list-inline-item">
                                <a href="{{ get_setting('twitter_link') }}" target="_blank" class="twitter  p_t"><i class="lab la-twitter lh"></i></a>
                            </li>
                            @endif
                            @if ( get_setting('instagram_link') !=  null )
                            <li class="list-inline-item">
                                <a href="{{ get_setting('instagram_link') }}" target="_blank" class="instagram  p_t"><i class="lab la-instagram lh"></i></a>
                            </li>
                            @endif
                            @if ( get_setting('youtube_link') !=  null )
                            <li class="list-inline-item">
                                <a href="{{ get_setting('youtube_link') }}" target="_blank" class="youtube  p_t"><i class="lab la-youtube lh"></i></a>
                            </li>
                            @endif
                            @if ( get_setting('linkedin_link') !=  null )
                            <li class="list-inline-item">
                                <a href="{{ get_setting('linkedin_link') }}" target="_blank" class="linkedin  p_t"><i class="lab la-linkedin-in lh"></i></a>
                            </li>
                            @endif
                        </ul>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mr-0">
                <div class="row">
                    
                    <div class="col-lg-3 col-3 p_3">
                        <div class="text-md-left mt-4">
                            <div class="ftr_title position-relative">
                                <h4 class="fs-13 fw-600 pb-2 mb-4">
                                    {{ translate('My Account') }}
                                </h4>
                            </div>
                            <ul class="list-unstyled">
                                @if (Auth::check())
                                    <li class="mb-2">
                                        <a class=" hov-opacity-100 text-reset" href="{{ route('logout') }}">
                                            {{ translate('Logout') }}
                                        </a>
                                    </li>
                                @else
                                    <li class="mb-2">
                                        <a class=" hov-opacity-100 text-reset" href="{{ route('user.login') }}">
                                            {{ translate('Login') }}
                                        </a>
                                    </li>
                                @endif
                                <li class="mb-2">
                                    <a class=" hov-opacity-100 text-reset" href="{{ route('purchase_history.index') }}">
                                        {{ translate('Order History') }}
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class=" hov-opacity-100 text-reset" href="{{ route('wishlists.index') }}">
                                        {{ translate('My Wishlist') }}
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class=" hov-opacity-100 text-reset" href="{{ route('orders.track') }}">
                                        {{ translate('Track Order') }}
                                    </a>
                                </li>
                                @if (addon_is_activated('affiliate_system'))
                                    <li class="mb-2">
                                        <a class=" hov-opacity-100 text-light" href="{{ route('affiliate.apply') }}">{{ translate('Be an affiliate partner')}}</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                        
                        @if (get_setting('vendor_system_activation') == 1)
                            <!--<div class="text-center text-md-left mt-4">-->
                            <!--    <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">-->
                            <!--        {{ translate('Be a Seller') }}-->
                            <!--    </h4>-->
                            <!--    <a href="{{ route('shops.create') }}" class="btn btn-primary btn-sm shadow-md">-->
                            <!--        {{ translate('Apply Now') }}-->
                            <!--    </a>-->
                            <!--</div>-->
                        @endif
                </div>
                <div class="col-lg-4 col-4 mr-0 p_3">
                        <div class="text-md-left mt-4">
                            <div class="ftr_title position-relative">
                                <h4 class="fs-13 fw-600 pb-2 mb-4">
                                    {{ translate('Support Links') }}
                                </h4>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                   <span class="d-block"><a href="/faqs" class="text-reset">{{ translate('FAQ’s') }}</a></span>
                              
                                </li>
                                <li class="mb-2">
                                   <span class="d-block"><a href="/buyer_paymet_protection" class="text-reset">{{translate('Buyer Protection')}}</a></span>
                                   
                                </li>
                                <li class="mb-2">
                                   <span class="d-block"><a href="{{ url('buyer_login') }}" class="text-reset">{{translate(' Buy on Marketsaltz')}}</a></span>
                                   
                                </li>
                                <li class="mb-2">
                                   <span class="d-block"><a href="{{ url('manufacturer_login') }}" class="text-reset">{{translate(' Sell on marketsaltz')}}</a></span>
                                   
                                </li>
                                <li class="mb-2">
                                   
                                   <!--<span class="d-block">-->
                                   <!--    <a href="#bonty" class="text-reset">{{ translate('Advertise with Us')  }}</a>-->
                                   <!-- </span>-->
                                    <span class="d-block">
                                       <a href="#support" class="text-reset">{{ translate('More')  }}<i class="las la-angle-double-right"></i></a>
                                    </span>
                                </li>
                                
                                @if(auth()->user() != null)
                                @php
                                    $id = auth()->user()->id;
                                @endphp
                                <li class="mb-2">
                                   <span class="d-block"><a href="{{ url('customerfeedback',encrypt($id)) }}" class="text-reset">{{translate('Feedback')}}</a></span>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 col-5 mr-0 p_3">
                        <div class="text-md-left mt-4">
                            <div class="ftr_title position-relative">
                                <h4 class="fs-13 fw-600 pb-2 mb-4">
                                    {{ translate('Contact Info') }}
                                </h4>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                   <span class="d-block">{{ translate('Address') }}:</span>
                                   <span class="d-block">{{ get_setting('contact_address',null,App::getLocale()) }}</span>
                                </li>
                                <li class="mb-2">
                                   <span class="d-block">{{translate('Phone')}}:</span>
                                   <span class="d-block">{{ get_setting('contact_phone') }}</span>
                                </li>
                                <li class="mb-2">
                                   <span class="d-block">{{translate('Email')}}:</span>
                                   <span class="d-block">
                                       <a href="mailto:{{ get_setting('contact_email') }}" class="text-reset">{{ get_setting('contact_email')  }}</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-4 col-md-4">-->
            <!--    <div class="text-center text-md-left mt-4">-->
            <!--        <h4 class="fs-13 text-uppercase fw-600 border-bottom border-gray-900 pb-2 mb-4">-->
            <!--            {{ get_setting('widget_one',null,App::getLocale()) }}-->
            <!--        </h4>-->
            <!--        <ul class="list-unstyled">-->
            <!--            @if ( get_setting('widget_one_labels',null,App::getLocale()) !=  null )-->
            <!--                @foreach (json_decode( get_setting('widget_one_labels',null,App::getLocale()), true) as $key => $value)-->
            <!--                <li class="mb-2">-->
            <!--                    <a href="{{ json_decode( get_setting('widget_one_links'), true)[$key] }}" class="opacity-50 hov-opacity-100 text-reset">-->
            <!--                        {{ $value }}-->
            <!--                    </a>-->
            <!--                </li>-->
            <!--                @endforeach-->
            <!--            @endif-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</div>-->

            
        </div>
   
    
</section>
<section class="footer-menu">
    <div class="container">
        <div class="footer-inner">


@foreach (\App\Models\Category::where('level', 0)->orderBy('order_level', 'desc')->get()->take(11) as $key => $category)
	<div class="brandContainerFooter pb-10px">
		<span class="brandValueFooter">
			<ul class="footerSubCategoriesUl pb-10px">
				<a href="{{ route('products.category', $category->slug) }}" class="brandLabelFooter">{{ $category->getTranslation('name') }}</a> 
				@foreach (\App\Utility\CategoryUtility::get_immediate_children_ids($category->id) as $key => $first_level_id)
				<li class="footerSubCategory">
				    <a href="{{ route('products.category', \App\Models\Category::find($first_level_id)->slug) }}">{{ \App\Models\Category::find($first_level_id)->getTranslation('name') }}</a>
					<span class="slash mr_5"> | </span>
                </li>
											
				@endforeach				
			</ul>
		</span>
	</div>
@endforeach
					
					
						
						<div class="brandContainerFooter pb-10px " id="support">
							<span class="brandValueFooter">
								<ul class="footerSubCategoriesUl pb-10px">
									<a href="#" class="brandLabelFooter ft_cl_fs">Support Links:</a> 
									
									<!--<li class="footerSubCategory">-->
									<!--		<a href="#">FAQ’s</a>-->
									<!--		<span class="slash mr_5"> |</span></li>-->
									<li class="footerSubCategory">
											<a href="{{ url('buyer_paymet_protection') }}">Buyer Protection</a>
											<span class="slash mr_5"> |</span></li>
									<!--<li class="footerSubCategory">-->
									<!--		<a href="#">Buy on Marketsaltz</a>-->
									<!--		<span class="slash mr_5"> |</span></li>-->
									<!--<li class="footerSubCategory">-->
									<!--		<a href="#">Sell on Marketsaltz</a>-->
									<!--		<span class="slash mr_5"> |</span></li>-->
									<!--<li class="footerSubCategory">-->
									<!--		<a href="#bonty">Advertise with Us</a>-->
									<!--		<span class="slash mr_5"> |</span></li>-->
									
									<li class="footerSubCategory">
											<a href="{{url('/investor_centre')}}">Investors Center</a>
											<span class="slash mr_5"> |</span></li>
									<li class="footerSubCategory">
											<a href="{{ url('blog')}}">Blogs & News</a>
											<span class="slash mr_5"> |</span></li>
									<li class="footerSubCategory">
											<a href="{{url('careers')}}">Pharma Careers</a>
											<span class="slash mr_5"> |</span></li>
									
									</ul>
							</span>
						</div>
					
					<!-- <p class="footerAboutHeading">About Snapdeal</p> -->
					<div class="footer-text fs_14px mt-2" style="#000">We value our customers’ privacy & confidentiality of information, and have highly secured online transactions. To achieve this we have industry recommended site lock & https in place. We have a dedicated Toll-free number to support customers who buy chemicals online. Open policies and Terms & conditions are drafted in mutual benefit and have a genuine return policy when the need arises. Lastly, considering our busy life style and latest trends, we have made our website mobile responsive, make use of M-commerce to buy chemicals on the go. Whenever you buy chemicals online you save time,effort and above all lets you stay focused at work leaving behind worries.</div>
				</div>
    </div>
</section>

<!-- FOOTER -->
<footer class="pt-3 pb-7 pb-xl-3 bg-white text-black bdr_t1">
    <div class="container">
        <div class="row align-items-center" style="color: #000;">
            <div class="col-lg-6">
                <div class="mob_res1" current-verison="{{get_setting("current_version")}}">
                    {!! get_setting('frontend_copyright_text',null,App::getLocale()) !!}
                </div>
            </div>
            <div class="col-lg-6">
                <p class="mb-0 text-right mob_lf">Designed and Developed by <a href="https://edevlop.com/" target="_blank">EDevlop</a></p>
            </div>
            <div class="col-lg-4">
                <div class="text-center text-md-right">
                    <ul class="list-inline mb-0">
                        @if ( get_setting('payment_method_images') !=  null )
                            @foreach (explode(',', get_setting('payment_method_images')) as $key => $value)
                                <li class="list-inline-item">
                                    <img src="{{ uploaded_asset($value) }}" height="30" class="mw-100 h-auto" style="max-height: 30px">
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>


<div class="aiz-mobile-bottom-nav d-xl-none fixed-bottom bg-white shadow-lg border-top rounded-top" style="box-shadow: 0px -1px 10px rgb(0 0 0 / 15%)!important; ">
    <div class="row align-items-center gutters-5">
        <div class="col">
            <a href="{{ route('home') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-home fs-20 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 text-primary')}}"></i>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['home'],'opacity-100 fw-600')}}">{{ translate('Home') }}</span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('categories.all') }}" class="text-reset d-block text-center pb-2 pt-3">
                <i class="las la-list-ul fs-20 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 text-primary')}}"></i>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['categories.all'],'opacity-100 fw-600')}}">{{ translate('Categories') }}</span>
            </a>
        </div>
        @php
            if(auth()->user() != null) {
                $user_id = Auth::user()->id;
                $cart = \App\Models\Cart::where('user_id', $user_id)->get();
            } else {
                $temp_user_id = Session()->get('temp_user_id');
                if($temp_user_id) {
                    $cart = \App\Models\Cart::where('temp_user_id', $temp_user_id)->get();
                }
            }
        @endphp
        <div class="col-auto">
            <a href="{{ route('cart') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="align-items-center bg-primary border border-white border-width-4 d-flex justify-content-center position-relative rounded-circle size-50px" style="margin-top: -33px;box-shadow: 0px -5px 10px rgb(0 0 0 / 15%);border-color: #fff !important;">
                    <i class="las la-shopping-bag la-2x text-white"></i>
                </span>
                <span class="d-block mt-1 fs-10 fw-600 opacity-60 {{ areActiveRoutes(['cart'],'opacity-100 fw-600')}}">
                    {{ translate('Cart') }}
                    @php
                        $count = (isset($cart) && count($cart)) ? count($cart) : 0;
                    @endphp
                    (<span class="cart-count">{{$count}}</span>)
                </span>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('all-notifications') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-inline-block position-relative px-2">
                    <i class="las la-bell fs-20 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 text-primary')}}"></i>
                    @if(Auth::check() && count(Auth::user()->unreadNotifications) > 0)
                        <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right" style="right: 7px;top: -2px;"></span>
                    @endif
                </span>
                <span class="d-block fs-10 fw-600 opacity-60 {{ areActiveRoutes(['all-notifications'],'opacity-100 fw-600')}}">{{ translate('Notifications') }}</span>
            </a>
        </div>
        <div class="col">
        @if (Auth::check())
            @if(isAdmin())
                <a href="{{ route('admin.dashboard') }}" class="text-reset d-block text-center pb-2 pt-3">
                    <span class="d-block mx-auto">
                        @if(Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @else
                <a href="javascript:void(0)" class="text-reset d-block text-center pb-2 pt-3 mobile-side-nav-thumb" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav">
                    <span class="d-block mx-auto">
                        @if(Auth::user()->photo != null)
                            <img src="{{ custom_asset(Auth::user()->avatar_original)}}" class="rounded-circle size-20px">
                        @else
                            <img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">
                        @endif
                    </span>
                    <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
                </a>
            @endif
        @else
            <a href="{{ route('user.login') }}" class="text-reset d-block text-center pb-2 pt-3">
                <span class="d-block mx-auto">
                    <!--<img src="{{ static_asset('assets/img/avatar-place.png') }}" class="rounded-circle size-20px">-->
                    <i class="las la-user-circle fs-20 opacity-60"></i>
                </span>
                <span class="d-block fs-10 fw-600 opacity-60">{{ translate('Account') }}</span>
            </a>
        @endif
        </div>
    </div>
</div>
@if (Auth::check() && !isAdmin())
    <div class="aiz-mobile-side-nav collapse-sidebar-wrap sidebar-xl d-xl-none z-1035">
        <div class="overlay dark c-pointer overlay-fixed" data-toggle="class-toggle" data-backdrop="static" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb"></div>
        <div class="collapse-sidebar bg-white">
            @include('frontend.inc.user_side_nav')
        </div>
    </div>
@endif
