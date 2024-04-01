<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Questrial&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<style>
.hvrnone{
    display: none;
    left: 9px;
}
    .myHoverMenu:hover .hvrnone{
        display: block;
    }
ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

.link_a {
    display: block;
    padding: 0.2rem 0;
    color: #000;
    text-decoration: none;
    font-size: 14px;
    background: #c1c1c363;
    padding: 10px 10px;
    margin-bottom: 10px;
}
.link_a:hover {
  color: #2e3192;
  font-weight: 600;
}

h4 {
  margin: 0.5rem 0 0.75rem;
  padding-bottom: 0.5rem;
  border-bottom: 1px solid #ddd;
  font-size: 1.25rem;
  font-weight: normal;
}

h5 {
  margin: 0;
  margin-bottom: 0.5rem;
  font-size: 0.875rem;
}

nav::after {
  content: "";
  display: block;
  clear: both;
}

.menu {
  display: inline-block;
  border-radius: 0.2rem;
  background: #fff;
  position: relative;
  z-index: 2;
}
.menu:hover {
  box-shadow: 0 0 0.35rem 0 rgba(0, 0, 0, 0.5);
  position: absolute;
}
.menu:hover > li {
  display: block;
}
.menu:hover > li:first-child {
  border-color: transparent;
  border-bottom: none;
  border-radius: 0.2rem 0.2rem 0 0;
  background-color: #eee;
  box-shadow: none;
  position: relative;
  z-index: 1;
  color: #444;
  cursor: default;
}
.menu:hover > li:first-child::after {
  content: "";
}
.menu:hover > li:last-child {
  border-radius: 0 0 0.2rem 0.2rem;
}
.menu:hover + .temp::after {
  display: block;
}
.menu > li {
  display: none;
  width: 14rem;
  margin: 0;
  border-right: 1px solid #bbb;
}
.menu > li:first-child {
display: block;
    padding: 0.65rem;
    border: 1px solid #bbb;
    border-radius: 0.2rem;
    background: #191d7eab;
    box-shadow: 0 3px 3px -3px rgb(0 0 0 / 50%);
    color: #ffffff;
    font-weight: bold;
    font-size: 17px;
    cursor: pointer;
}
.menu > li:first-child::after {
  content: "";
  float: right;
  font: bold 1rem fontAwesome;
  line-height: 1.7;
}
.menu > li:not(:first-child):hover {
  width: calc(960px - 31rem);
  border-right: none;
}
.menu > li:nth-child(2):hover::before {
  content: "";
  display: block;
  width: 14rem;
  height: 3rem;
  border: 1px solid transparent;
  position: absolute;
  top: 0;
  z-index: 10;
}

li .cat_h3 {
  width: 14rem;
  margin: 0;
  padding: 0.65rem 0.75rem;
  border: 1px solid transparent;
  border-width: 1px 0;
  background: #fff;
  position: relative;
  z-index: 10;
  font-size: 17px;
  font-weight: normal;
  cursor: default;
}
li:last-child .cat_h3 {
  border-radius: 0 0 0.2rem 0.2rem;
 
}
li:last-child:hover .cat_h3 {
  border-bottom-color: transparent;
  border-radius: 0 0 0 0.2rem;
}
li:hover .cat_h3 {
  width: calc(14rem + 1px);
  border-color: #bbb;
  color: #2e3192;
    font-weight: 700;
}
li:hover .cat_div {
  display: block;
}
li .cat_div {
  display: none;
  width: calc(293px - 1.5rem - 2rem);
  padding: 1rem 1.2rem;
  border-left: 1px solid #bbb;
  border-radius: 0 0.2rem 0.2rem 0;
  background: #fff;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 14rem;
  z-index: 1;
  overflow: auto;
}

.temp {
  display: flex;
  width: 72%;
  border-radius: 0.2rem;
  float: right;
  font-size: 0.875rem;
}
.temp::after {
  content: "";
  display: none;
  background: rgba(0, 0, 0, 0.35);
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
}
.temp li {
  padding: 0.65rem 0;
  flex: 1;
  text-align: center;
  cursor: pointer;
}

/* ===== Scrollbar CSS ===== */
  /* Firefox */
  

@media (max-width: 60rem) {
  .temp {
    width: 67%;
  }
}
</style>
@if(get_setting('topbar_banner') != null)
<div class="position-relative top-banner removable-session z-1035 d-none" data-key="top-banner" data-value="removed">
    <a href="{{ get_setting('topbar_banner_link') }}" class="d-block text-reset">
        <img src="{{ uploaded_asset(get_setting('topbar_banner')) }}" class="w-100 mw-100 h-50px h-lg-auto img-fit">
    </a>
    <button class="btn text-white absolute-top-right set-session" data-key="top-banner" data-value="removed" data-toggle="remove-parent" data-parent=".top-banner">
        <i class="la la-close la-2x"></i>
    </button>
</div>
@endif
<!-- Top Bar -->
<div class="top-navbar bg-white border-soft-secondary">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col">
                <ul class="list-inline d-flex justify-content-between justify-content-lg-start mb-0">
                    @if(get_setting('show_language_switcher') == 'on')
                    <li class="list-inline-item dropdown mr-3" id="lang-change">
                        @php
                            if(Session::has('locale')){
                                $locale = Session::get('locale', Config::get('app.locale'));
                            }
                            else{
                                $locale = 'en';
                            }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2" data-toggle="dropdown" data-display="static">
                            <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$locale.'.png') }}" class="mr-2 lazyload" alt="{{ \App\Models\Language::where('code', $locale)->first()->name }}" height="11">
                            <span class="opacity-60">{{ \App\Models\Language::where('code', $locale)->first()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            @foreach (\App\Models\Language::where('status', 1)->get() as $key => $language)
                                <li>
                                    <a href="javascript:void(0)" data-flag="{{ $language->code }}" class="dropdown-item @if($locale == $language) active @endif">
                                        <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" class="mr-1 lazyload" alt="{{ $language->name }}" height="11">
                                        <span class="language">{{ $language->name }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif

                    @if(get_setting('show_currency_switcher') == 'on')
                    <li class="list-inline-item dropdown ml-auto ml-lg-0 mr-0" id="currency-change">
                        @php
                            if(Session::has('currency_code')){
                                $currency_code = Session::get('currency_code');
                            }
                            else{
                                $currency_code = \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code;
                            }
                        @endphp
                        <a href="javascript:void(0)" class="dropdown-toggle text-reset py-2 opacity-60" data-toggle="dropdown" data-display="static">
                            {{ \App\Models\Currency::where('code', $currency_code)->first()->name }} {{ (\App\Models\Currency::where('code', $currency_code)->first()->symbol) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
                            @foreach (\App\Models\Currency::where('status', 1)->get() as $key => $currency)
                                <li>
                                    <a class="dropdown-item @if($currency_code == $currency->code) active @endif" href="javascript:void(0)" data-currency="{{ $currency->code }}">{{ $currency->name }} ({{ $currency->symbol }})</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>

            <div class="col-5 text-right d-none d-lg-block">
                <ul class="list-inline mb-0 h-100 d-flex justify-content-end align-items-center">
                    @if (get_setting('helpline_number'))
                        <li class="list-inline-item mr-3 border-right border-left-0 pr-3 pl-0">
                            <a href="tel:{{ get_setting('helpline_number') }}" class="text-reset d-inline-block opacity-60 py-2">
                                <i class="la la-phone"></i>
                                <span>{{ translate('Help line')}}</span>  
                                <span>{{ get_setting('helpline_number') }}</span>    
                            </a>
                        </li>
                    @endif
                    @auth
                        @if(isAdmin())
                            <li class="list-inline-item mr-3 border-left-0 pr-3 pl-0">
                                <a href="{{ route('admin.dashboard') }}" class="text-reset d-inline-block py-2"><i class="la la-user"></i> {{ translate('My Panel')}}</a>
                            </li>
                        @else

                            <li class="list-inline-item mr-3 border-left-0 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-reset" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <i class="las la-bell fs-18"></i>
                                            @if(count(Auth::user()->unreadNotifications) > 0)
                                                <span class="badge badge-sm badge-dot badge-circle badge-primary position-absolute absolute-top-right"></span>
                                            @endif
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0">
                                    <div class="p-3 bg-light border-bottom">
                                        <h6 class="mb-0">{{ translate('Notifications') }}</h6>
                                    </div>
                                    <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                        <ul class="list-group list-group-flush" >
                                            @forelse(Auth::user()->unreadNotifications as $notification)
                                                <li class="list-group-item">
                                                    @if($notification->type == 'App\Notifications\OrderNotification')
                                                        @if(Auth::user()->user_type == 'customer')
                                                        <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                            <span class="ml-2">
                                                                {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                            </span>
                                                        </a>
                                                        @elseif (Auth::user()->user_type == 'seller')
                                                            @if(Auth::user()->id == $notification->data['user_id'])
                                                                <a href="javascript:void(0)" onclick="show_purchase_history_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @else
                                                                <a href="javascript:void(0)" onclick="show_order_details({{ $notification->data['order_id'] }})" class="text-reset">
                                                                    <span class="ml-2">
                                                                        {{translate('Order code: ')}} {{$notification->data['order_code']}} {{ translate('has been '. ucfirst(str_replace('_', ' ', $notification->data['status'])))}}
                                                                    </span>
                                                                </a>
                                                            @endif
                                                        @endif
                                                    @endif
                                                </li>
                                            @empty
                                                <li class="list-group-item">
                                                    <div class="py-4 text-center fs-16">
                                                        {{ translate('No notification found') }}
                                                    </div>
                                                </li>
                                            @endforelse
                                        </ul>
                                    </div>
                                    <div class="text-center border-top">
                                        <a href="{{ route('all-notifications') }}" class="text-reset d-block py-2">
                                            {{translate('View All Notifications')}}
                                        </a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item mr-3 border-left-0 pr-3 pl-0">
                                @if (Auth::user()->user_type == 'seller')
                                    <a href="{{ route('seller.dashboard') }}" class="text-reset d-inline-block py-2"><i class="la la-user"></i> {{ translate('My Panel')}}</a>
                                @else
                                    <a href="{{ route('dashboard') }}" class="text-reset d-inline-block py-2"><i class="la la-user"></i> {{ translate('My Panel')}}</a>
                                @endif
                            </li>
                        @endif
                        <li class="list-inline-item">
                            <a href="{{ route('logout') }}" class="text-reset d-inline-block py-2"><i class="las la-sign-in-alt"></i>{{ translate('Logout')}}</a>
                        </li>
                    @else
                        <li class="list-inline-item mr-3 border-left-0  pt-7">
                            <a href="{{ route('user.login') }}" class="d-inline-block  h-top"><i class="la la-user"></i> {{ translate('Login')}}</a>
                        </li>
                        <li class="list-inline-item pt-7 dropdown">
                            <a href="" class="d-inline-block h-top dropdown-toggle" type="button" data-toggle="dropdown"><i class="la la-users"></i> {{ translate('Free Registration')}}</a>
                            <ul class="dropdown-menu" style="    padding: 0;">
                                <li class="clr_drp"><a href="{{ url('buyer_login') }}">Buyer Registration</a></li>
                                <li class="clr_drp"><a href="{{ url('manufacturer_login') }}">Manufacture Registration</a></li>
                            </ul>
                        </li>
                        
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END Top Bar -->
<header class="@if(get_setting('header_stikcy') == 'on') sticky-top @endif z-1020 bg-white border-bottom shadow-sm">
    <div class="position-relative logo-bar-area z-1 p-15">
        <div class="container">
            <div class="d-flex align-items-center">

                <div class="col-auto col-xl-3 pl-0 pr-3 d-flex align-items-center">
                    <a class="d-block mr-3 ml-0" href="{{ route('home') }}">
                        @php
                            $header_logo = get_setting('header_logo');
                        @endphp
                        @if($header_logo != null)
                            <img src="{{ uploaded_asset($header_logo) }}" alt="{{ env('APP_NAME') }}" class="max_wd_top ml_62 p_10">
                        @else
                            <img src="{{ static_asset('assets/img/logo.png') }}" alt="{{ env('APP_NAME') }}" class="mw-100 h-30px h-md-40px" height="40">
                        @endif
                    </a>
                    	

	<!-- Modal -->


                    <!--@if(Route::currentRouteName() != 'home')-->
                    <!--    <div class="d-none d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0">-->
                    <!--        <div class="h-100 d-flex align-items-center" id="category-menu-icon">-->
                    <!--            <div class="dropdown-toggle navbar-light bg-light h-40px w-50px pl-2 rounded border c-pointer">-->
                    <!--                <span class="navbar-toggler-icon"></span>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--@endif-->
                </div>
                <div class="d-lg-none ml-auto mr-0">
                    <a class="p_2 p-2d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle" data-target=".front-header-search">
                        <i class="las la-search la-flip-horizontal la-2x" id="search_mob"></i>
                    </a>
                </div>

                <div class="flex-grow-1 front-header-search d-flex align-items-center bg-white col-xl-8 ml_90">
                    <div class="position-relative flex-grow-1">
                        <form action="{{ route('search') }}" method="GET" class="stop-propagation box-sh">
                            <div class="d-flex position-relative align-items-center">
                                <div class="d-lg-none" data-toggle="class-toggle" data-target=".front-header-search">
                                    <button class="btn px-2" type="button"><i class="la la-2x la-long-arrow-left" id="arrow"></i></button>
                                </div>
                                <div class="input-group">
                                    <input type="text" class="border-0 border-lg form-control top-search top_s1" id="search" name="keyword" @isset($query)
                                        value="{{ $query }}"
                                    @endisset placeholder="{{translate('Search by Chemical name,Equipment name or CAS no..')}}" autocomplete="off">
                                    <div class="input-group-append d-none d-lg-block">
                                        <button class="btn btn-primary pd_17" type="submit">
                                            <i class="la la-search la-flip-horizontal fs-18"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100" style="min-height: 200px">
                            <div class="search-preloader absolute-top-center">
                                <div class="dot-loader"><div></div><div></div><div></div></div>
                            </div>
                            <div class="search-nothing d-none p-3 text-center fs-16">

                            </div>
                            <div id="search-content" class="text-left">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-none ml-3 mr-0">
                    <div class="nav-search-box">
                        <a href="#" class="nav-box-link">
                            <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                        </a>
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="" id="compare">
                        @include('frontend.partials.compare')
                    </div>
                </div>

                <div class="d-none d-lg-block ml-3 mr-0">
                    <div class="wrt" id="wishlist">
                        @include('frontend.partials.wishlist')
                    </div>
                </div>

                <div class="d-none d-lg-block  align-self-stretch ml-3 mr-0" data-hover="dropdown">
                    <div class="nav-cart-box dropdown h-100" id="cart_items">
                        @include('frontend.partials.cart')
                    </div>
                </div>

            </div>
        </div>
        
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!--  	<div class="modal left fade bg_blk" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModabel">-->
		<!--<div class="modal-dialog" role="document">-->
		<!--	<div class="modal-content">-->

		<!--		<div class="modal-header pd_0">-->
		<!--			<button type="button" class="cross brd_none" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fn_opacity">&times;</span></button>-->
		<!--			<h4 class="modal-title" id="myModalLabel">All Categories</h4>-->
		<!--		</div>-->

		<!--		<div class="modal-body">-->
		<!--			<section class="app">-->
  <!--<aside class="sidebar">-->
         
    <!--<nav class="sidebar-nav">-->
 
    <!--  <ul>-->
    <!--    <li>-->
    <!--      <a href="#"><i class="ion-bag"></i> <span>Pharmaceutical chemicals</span></a>-->
    <!--      <ul class="nav-flyout">-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-color-filter-outline"></i>API</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-clock-outline"></i>API Reference standards</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-android-star-outline"></i> API Impurities</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-heart-broken"></i> Bulk Chemicals</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-heart-broken"></i>Bulk Chemicals and API</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-heart-broken"></i>Intermediates</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-heart-broken"></i> Custom chemical synthesis</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-heart-broken"></i>California precursor chemicals</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-heart-broken"></i>forensic chemicals</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-heart-broken"></i>Kosher grade chemical ingredients</a>-->
    <!--        </li>-->
            
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <a href="#"><i class="ion-ios-settings"></i> <span class="">Speciality Chemicals</span></a>-->
    <!--      <ul class="nav-flyout">-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-alarm-outline"></i>Fungicide</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-camera-outline"></i>Herbicide</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-chatboxes-outline"></i>Insecticide</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>Additives</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>catalysts</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>dyestuff and printing</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>flavours and fragrances</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>inorganic</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i> nutraceuticals</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>petrochemicals</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>polymer</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>water treatment</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>natural products</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>organometallic compounds</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-cog-outline"></i>excipients</a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <a href="#"><i class="ion-ios-briefcase-outline"></i> <span class="">Catalogue Chemicals</span></a>-->
    <!--      <ul class="nav-flyout">-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-flame-outline"></i>Reagents</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-lightbulb-outline"></i>organic solvents</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-location-outline"></i>laboratory chemicals</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-locked-outline"></i>chiral compounds</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i>building blocks</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i>heterocyclic compounds</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i>fine chemicals</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i> NMR solvents</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i>amino acids</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i>biochemical</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i> Grignard reagents</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i> peptide and DNA Synthesis reagents</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i> boron reagents</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i> lithium reagents</a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i>analytical solvents & reagents</a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <a href="#"><i class="ion-ios-analytics-outline"></i> <span class="">Inhibitors</span></a>-->
    <!--      <ul class="nav-flyout">-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-timer-outline"></i>Newest inhibitors</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-arrow-graph-down-left"></i>small molecule libraries</a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <a href="#"><i class="ion-ios-paper-outline"></i> <span class="">Technology & Machinery</span></a>-->
    <!--      <ul class="nav-flyout">-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-filing-outline"></i>Technology & Machinery</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-information-outline"></i></a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-paperplane-outline"></i></a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-android-star-outline"></i></a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <a href="#"><i class="ion-ios-navigate-outline"></i> <span class="">Lab equipment</span></a>-->
    <!--      <ul class="nav-flyout">-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-flame-outline"></i>Lab equipment</a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-lightbulb-outline"></i></a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-location-outline"></i></a>-->
    <!--        </li>-->
    <!--        <li>-->
    <!--          <a href="#"><i class="ion-ios-locked-outline"></i></a>-->
    <!--        </li>-->
    <!--         <li>-->
    <!--          <a href="#"><i class="ion-ios-navigate-outline"></i></a>-->
    <!--        </li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--    <li>-->
    <!--      <a href="#"><i class="ion-ios-medical-outline"></i> <span class="">Oils</span></a>-->
    <!--        <ul class="nav-flyout">-->
    <!--          <li>-->
    <!--              <a href="#"><i class="ion-ios-medical-outline"></i>Essential Oils</a>-->
    <!--          </li>-->
    <!--          <li>-->
    <!--              <a href="#"><i class="ion-ios-medical-outline"></i>Carrier & Base Oils</a>-->
    <!--          </li>-->
    <!--          <li>-->
    <!--              <a href="#"><i class="ion-ios-medical-outline"></i>Organic Oils</a>-->
    <!--          </li>-->
    <!--          <li>-->
    <!--              <a href="#"><i class="ion-ios-medical-outline"></i>Spice Oils</a>-->
    <!--          </li>-->
    <!--          <li>-->
    <!--              <a href="#"><i class="ion-ios-medical-outline"></i>Floral Absolute Oils</a>-->
    <!--          </li>-->
              
    <!--        </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</nav>-->
<!--  </aside>-->
<!--</section>-->
<!--				</div>-->

<!--			</div><!-- modal-content -->
<!--		</div>  <!-- modal-dialog -->
<!--	</div>-->
    @if ( get_setting('header_menu_labels') !=  null )
        <div class="bg-white d_n py-1">
            
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="">
                    		<!--<div type="button" class="btn btn-demo all_cat" data-toggle="modal" data-target="#myModal">-->
                    	<!--	<ul>-->
                    	<!--	    <li class="dsp_in_bl">-->
                    	<!--	        <span class="bar-1"></span>-->
                					<!--<span class="bar-2"></span>-->
                					<!--<span class="bar-3"></span>-->
                    	<!--	    </li>-->
                    	<!--	    <li  class="dsp_in_bl ml_10">-->
                    	<!--	        	All Categories-->
                    	<!--	    </li>-->
                    	<!--	</ul>-->
                    	<!--<nav>-->
                    	
                    	
                        <div class=" d-xl-block align-self-stretch category-menu-icon-box ml-auto mr-0 myHoverMenu">
                            <div class="h-100 d-flex align-items-center" id="category-menu-icon">
                                <div class="dropdown-toggle navbar-light bg-light h-40px w-130px pl-2 rounded border c-pointer new_cat">
                                     <!--category<span class="navbar-toggler-icon"></span>-->
                                     <span>Category</span>
                                </div>
                            </div>
                            <!--<div class="hover-category-menu position-absolute w-100 top-100 left-0 right-0 d-none z-3" id="hover-category-menu">-->
            <div class="hover-category-menu position-absolute w-100 top-100 right-0 z-3 hvrnone">
            <div class="container new_t_r">
                <div class="row gutters-10 position-relative ">
                    <div class="position-absolute">
                        @include('frontend.partials.category_menu')
                    </div>
                </div>
            </div>
        </div>
                        </div>
                    
	<ul class="menu d-none">
		<li>Choose a Category</li>
		<li class="cat_li">
			<h3 class="cat_h3">Pharmaceutical chemicals</h3>
			<div class="cat_div">
				<h4>Pharmaceutical chemicals</h4>
				
				<ul>
					<li><a class="link_a" href="#">API</a></li>
					<li><a class="link_a" href="#">API Reference standards</a></li>
					<li><a class="link_a" href="#">API Impurities</a></li>
					<li><a class="link_a" href="#">Bulk Chemicals</a></li>
					<li><a class="link_a" href="#">Bulk Chemicals and API</a></li>
					<li><a class="link_a" href="#">Intermediates</a></li>
					<li><a class="link_a" href="#">Custom chemical synthesis</a></li>
					<li><a class="link_a" href="#">California precursor chemicals</a></li>
					<li><a class="link_a" href="#">forensic chemicals</a></li>
					<li><a class="link_a" href="#">Kosher grade chemical ingredients</a></li>
				</ul>
			</div>
		</li>
		<li>
			<h3  class="cat_h3">Speciality Chemicals</h3>
			<div class="cat_div">
				<h4>Speciality Chemicals</h4>
			    <ul>
					<li><a class="link_a" href="#">Fungicide</a></li>
					<li><a class="link_a" href="#">Herbicide</a></li>
					<li><a class="link_a" href="#">Insecticide</a></li>
					<li><a class="link_a" href="#">Additives</a></li>
					<li><a class="link_a" href="#">catalysts</a></li>
					<li><a class="link_a" href="#">dyestuff and printing</a></li>
					<li><a class="link_a" href="#">flavours and fragrances</a></li>
					<li><a class="link_a" href="#">inorganic</a></li>
					<li><a class="link_a" href="#">nutraceuticals</a></li>
					<li><a class="link_a" href="#">petrochemicals</a></li>
					<li><a class="link_a" href="#">polymer</a></li>
				</ul>
				<ul>
					<li><a class="link_a" href="#">water treatment</a></li>
					<li><a class="link_a" href="#">natural products</a></li>
					<li><a class="link_a" href="#">organometallic compounds</a></li>
					<li><a class="link_a" href="#">excipients</a></li>
				</ul>
			</div>
		</li>
		<li>
			<h3  class="cat_h3">Catalogue Chemicals</h3>
			<div class="cat_div">
				<h4>Catalogue Chemicals</h4>
		    	<ul>
					<li><a class="link_a" href="#">Reagents</a></li>
					<li><a class="link_a" href="#">organic solvents</a></li>
					<li><a class="link_a" href="#">laboratory chemicals</a></li>
					<li><a class="link_a" href="#">chiral compounds</a></li>
					<li><a class="link_a" href="#">building blocks</a></li>
					<li><a class="link_a" href="#">heterocyclic compounds</a></li>
					<li><a class="link_a" href="#">fine chemicals</a></li>
					<li><a class="link_a" href="#">NMR solvents</a></li>
					<li><a class="link_a" href="#">amino acids</a></li>
					<li><a class="link_a" href="#">biochemical</a></li>
					<li><a class="link_a" href="#">Grignard reagents</a></li>
					<li><a class="link_a" href="#"> peptide and DNA Synthesis reagents</a></li>
					<li><a class="link_a" href="#"> boron reagents</a></li>
					<li><a class="link_a" href="#">lithium reagents</a></li>
					<li><a class="link_a" href="#">analytical solvents & reagents</a></li>
				</ul>
			</div>
		</li>	
		<li>
			<h3  class="cat_h3">Inhibitors</h3>
			<div class="cat_div">
				<h4>Inhibitors</h4>
			    <ul>
					<li><a class="link_a" href="#">Newest inhibitors</a></li>
					<li><a class="link_a" href="#">small molecule libraries</a></li>
				</ul>
			</div>
		</li>
		<li>
			<h3  class="cat_h3">Technology & Machinery</h3>
			<div class="cat_div">
				<h4>Technology & Machinery</h4>
			<ul>
					<li><a class="link_a" href="{{ url('/category/technology--machinery-5uvyv')}}">Technology & Machinery</a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
				</ul>
			</div>
		</li>	
		<li>
			<h3  class="cat_h3">Lab equipment</h3>
			<div class="cat_div">
				<h4>Lab equipment</h4>
				<ul>
					<li><a class="link_a" href="#">Lab equipment</a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
					<li><a class="link_a" href="#"></a></li>
				</ul>
			</div>
		</li>
		<li>
			<h3  class="cat_h3">Oils</h3>
			<div class="cat_div">
				<h4>Oils</h4>
				<ul>
					<li><a class="link_a" href="#">Essential Oils</a></li>
					<li><a class="link_a" href="#">Carrier & Base Oils</a></li>
					<li><a class="link_a" href="#">Organic Oils</a></li>
					<li><a class="link_a" href="#">Spice Oils</a></li>
					<li><a class="link_a" href="#">Floral Absolute Oils</a></li>
				</ul>
			</div>
		</li>
			
	</ul>
<!--	<ul class="temp">-->
<!--		<li><a href="#">Magazine</a></li>-->
<!--		<li><a href="#">Trends</a></li>-->
<!--		<li><a href="#">Specials</a></li>-->
<!--		<li><a href="#">Shop</a></li>-->
<!--	</ul>-->
<!--</nav>-->
					
                    		</div>
                    	</div> 
                    
                    <div class="col-lg-10">
                    <ul class="list-inline mb-0 pl-0 mobile-hor-swipe text-left ml_70">
                        
                        @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
                        <li class="list-inline-item mr-0">
                            @if($value == 'Log In' || $value == 'Manufacture Registration' || $value == 'Buyer Registration')
                            @continue
                            @else
                                
                            <a href="{{ url(json_decode(get_setting('header_menu_links'), true)[$key]) }}" class="fs-16 fw-600 px-3 py-2 d-inline-block hov-opacity-100 text-reset">
                                {{ translate($value) }}
                            </a>
                            @endif
                        </li>
                        
                        @endforeach
                        <li class="list-inline-item mr-0">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Request For a Quote
                            </button>
                        </li>
                    </ul>
                    </div>
            </div>
            </div>
        </div>
    @endif
    
    <div class="modal fade bg_fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span style="color:#2e3192;">
                 <span style="font-family:montserrat,sans-serif;">REQUEST </span>
            </span>
            <span style="color:#282728;">
                 <span style="font-family:montserrat,sans-serif;">FOR A QUOTE</span>
            </span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="contact-form-wrapper justify-content-center">
            <form action="{{url('/req_quote')}}" class="contact-form" method="post" enctype="multipart/form-data">
                @csrf
              <div>
                <input type="text" name="cname" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Company / Institute Name" required>
              </div>
              <div>
                <input type="text" name="pname" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Person Name" required>
              </div>
              <div>
                <select class="form-control slct mb-3 rounded border-white form-input" data-live-search="true" name="dgn_name" required>
                    <option selected>Select Designation</option>
                    <option value="1">Proprietor / Partner / Director</option>
                    <option value="2">Decision Maker / HOD</option>
                    <option value="3">Purchase</option>
                    <option value="3">Procurement</option>
                    <option value="3">Supply Chain</option>
                    <option value="3">R & D</option>
                    <option value="3">Projects</option>
                    <option value="3">Production</option>
                </select>
              <div>
                <input type="email" name="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
              </div>
              <div>
                <input type="text" name="phone_no" class="form-control rounded border-white mb-3 form-input" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..?)\../g, '$1');" maxlength="10" placeholder="Phone No" required>
              </div>
              <div>
                <input type="zip" name="zip" class="form-control rounded border-white mb-3 form-input" placeholder="zip / pin code" required>
              </div>
              <div>
                <select class="form-control slct mb-3 rounded border-white form-input" data-live-search="true" name="turnover" required>
                    <option selected>Choose Turnover</option>
                    <option value="">Below 1 Cr</option>
                    <option value=""> Below 5 Cr</option>
                    <option value="">5 Cr to 20 Cr</option>
                    <option value="">20 Cr to 50 Cr</option>
                    <option value="">50 Cr to 100 Cr</option>
                    <option value="">Above 100 Cr</option>
                </select>
              <div>
              <div>
                <textarea id="message" name="msg" class="form-control rounded border-white mb-3 form-text-area" rows="2" cols="30" placeholder="Your Requirements" required></textarea>
              </div>
              <div>
                <input type="file" name="r_doc" class="form-control rounded border-white mb-3 form-input" placeholder="" required>
              </div>
              <div class="submit-button-wrapper">
                <input type="submit" value="Send Inquiry" name="submit" class=" btn btn-primary">
              </div>
            </form>
          </div>
      </div>
      
    </div>
  </div>
</div>
</div>
</div>
</div>
    
    <div id="uttam" class="mobil_on_web_off" onclick="openNav()">&#9776;</div>
</header>
    <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-close f_s"></i></a>
          
            @foreach (json_decode( get_setting('header_menu_labels'), true) as $key => $value)
              
              <li class="l_n">
                    <a href="{{ json_decode( get_setting('header_menu_links'), true)[$key] }}">{{ translate($value) }}</a>
              </li>
              
            @endforeach
    </div>

<div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div id="order-details-modal-body">

            </div>
        </div>
    </div>
</div>



<div class="whatsapp_float">
    <a href="https://wa.me/917842160136" target="_blank"><img src="{{asset('public/uploads/all/whatsapp_logo.png')}}" class="whatsapp_fl_btn" width="50px" alt="wp"></a>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#search_mob").click(function() {
            $("#uttam").hide();
            $("#arrow").show();
            
        });

        $("#arrow").click(function() {
            $("#arrow").hide();
            $("#uttam").show();
        });
    });
</script>
 <script>
        function openNav() {
          document.getElementById("mySidenav").style.width = "250px";
        }
        
        function closeNav() {
          document.getElementById("mySidenav").style.width = "0";
        }
    </script>
@section('script')
    <script type="text/javascript">
        
        function show_order_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('orders.details') }}', { _token : AIZ.data.csrf, order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
                AIZ.plugins.bootstrapSelect('refresh');
            });
        }
    </script>
@endsection
