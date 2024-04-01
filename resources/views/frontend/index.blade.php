@extends('frontend.layouts.app')

@section('content')
<style>
.text_new_style{
    font-size: 13px;
    padding-top: 8px;
    color: #000 !important;
    /*font-weight: 600;*/
}

.pd_17{
        padding: 16px 20px!important;
}
  .hiddendiv{
display:none;
height:auto;

}

.clicker:focus + .hiddendiv{
display:block;
}

.main{
	display: -webkit-flex;
	display: -moz-flex;
	display: -ms-flex;
	display: -o-flex;
	display: flex;
	justify-content: center;
	-ms-align-items: center;
	align-items: center;
	height: 100vh;
}
.card{
	    margin: 12px;
    box-shadow: 0 0 15px rgb(0 0 0 / 20%);
    width: 345px;
    height: 555px;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    color: #fff;
}
.mx_height{
        padding: 0px 25px!important;
     overflow-y: unset!important;
        max-height: 82vh!important;
}
.close{
    background: transparent!important;
}
.brd_2px{
        border: 2px solid;
}
.card h1,
.card h2{
	margin: 10px;
}
.card h2{
	font-size: 28px;
}

hr{
	opacity: 0.3;
}

.card li{
	margin: 5px;
	padding: 5px;
	text-align: left;
	font-size: 18px;
}

.card button{
	    position: absolute;
    display: block;
    background-color: transparent;
    padding: 8px 40px;
    margin-top: 43px;
    color: #fff;
    border: 1px solid;
    bottom: 21px;
    left: 95px;
	
}

.card:nth-child(1){
	background: rgb(0 144 187);
	/*background: linear-gradient(91deg, #00b007ad, #ff4343c7);*/
}
.card:nth-child(2){
	background: rgb(0 144 187);
	/*background: linear-gradient(113deg, rgba(66,187,223,1) 0%, rgba(91,229,132,1) 100%);*/
	height: 590px;
	box-shadow: 0 0 20px rgba(0,0,0,0.4);
}
.card:nth-child(3){
	background: rgb(0 144 187);
	/*background: linear-gradient(113deg, rgba(66,143,223,1) 0%, rgba(229,91,193,1) 100%);*/
}
.card:nth-child(4){
	background: rgb(0 144 187);
	/*background:linear-gradient(113deg, rgb(66 78 223) 0%, rgba(91,229,132,1) 100%);*/
	height: 590px;
	box-shadow: 0 0 20px rgba(0,0,0,0.4);
}
.modal-dialog-centered{
    max-width: 1500px!important;
        
}
.bg_fade{
    background: #00283fa3;
    padding-right: 0px!important;
}
.box{
        color: #fff;
       
        display: none;
        
    }
.txt_left{
    text-align: left!important;
}
.chk_box{
    position: relative;
    padding-left: 11px;
    font-size: 15px;
}
.chk_amt1{
    display: block;
    position: absolute;
    top: 0px;
    left: 114px;
    color: #ffec56;
}
.chk_amt2{
    display: block;
    position: absolute;
    top: 22px;
    left: 160px;
    color: #ffec56;
}
.chk_amt3{
    display: block;
    position: absolute;
    top: 44px;
    left: 124px;
    color: #ffec56;
}
.chk_amt1{
    display: none;
}
.chk_amt2{
    display: none;
}
.chk_amt3{
    display: none;
}
.clr_wht{
    color: white!important;
}
.text-primary {
    color: #62ab60 !important;
}
.footerSubCategoriesUl li a {
    color: #000000 !important;
}
</style>

    {{-- Categories , Sliders . Today's deal --}}
    <div class="home-banner-area ">
        <div class="container-fluid pd_0">
            <div class="row gutters-10 position-relative">
                <!--<div class="col-lg-4 bg-side left-cont position-static d-none d-lg-block">-->
                    <!--@include('frontend.partials.category_menu')-->
                <!--    <div class="">-->
                <!--        <h3 class="txt-h3 wow FadeInLeft " data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">Global platform for </h3>-->
                <!--        <h4 class="txt-h4 wow FadeInRight">Buying and Selling Chemicals Online</h4>-->
                        <!--<button class="glow-on-hover buy-btn" type="button" class="">Buyer</button>-->
                <!--        <a href="{{ url('buyer_login') }}" class="glow-on-hover buy-btn pd_b" type="button" class="">Buyer</a>-->
                <!--        <a href="{{ url('manufacturer_login') }}" class="glow-on-hover manu-btn txt_al" type="button" class="">Manufacturer</a>-->
                        <!--<button class="glow-on-hover manu-btn" type="button" class="">Manufacturer</button>-->
                        
                <!--    </div>-->
                <!--</div>-->

                @php
                    $num_todays_deal = count($todays_deal_products);
                @endphp

                <div class="col-lg-12">
                    @if (get_setting('home_slider_images') != null)
                        <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-arrows="true" data-dots="true" data-autoplay="true">
                            @php $slider_images = json_decode(get_setting('home_slider_images'), true);  @endphp
                            @foreach ($slider_images as $key => $value)
                                <div class="carousel-box">
                                    <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">

                                        <img
                                            class="d-block mw-100 img-fit rounded shadow-sm overflow-hidden"
                                            src="{{ uploaded_asset($slider_images[$key]) }}"
                                            alt="{{ env('APP_NAME')}} promo"
                                            @if(count($featured_categories) == 0)
                                            height="250"
                                            @else
                                            height="250"
                                            @endif
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        ></a>
   <h3 class="p_b
">India’s Largest Chemicals Bazaar for</br>
 Selling Chemicals Online</br>
Mg to Tons</h3>
   
                                    
                                </div>
                            @endforeach
                        </div>
                    @endif

                </div>
                

                <!--@if($num_todays_deal > 0)-->
                <!--<div class="col-lg-2 order-3 mt-3 mt-lg-0">-->
                    
                <!--    <div class="bg-white rounded shadow-sm">-->
                <!--        <div class="bg-soft-primary rounded-top p-3 d-flex align-items-center justify-content-center">-->
                <!--            <span class="fw-600 fs-16 mr-2 text-truncate">-->
                <!--                {{ translate('Todays Deal') }}-->
                <!--            </span>-->
                <!--            <span class="badge badge-primary badge-inline">{{ translate('Hot') }}</span>-->
                <!--        </div>-->
                <!--        <div class="c-scrollbar-light overflow-auto p-2 bg-primary rounded-bottom">-->
                <!--            <div class="gutters-5 lg-no-gutters row row-cols-2 row-cols-lg-1">-->
                <!--            @foreach ($todays_deal_products as $key => $product)-->
                <!--                @if ($product != null)-->
                <!--                <div class="col mb-2">-->
                <!--                    <a href="{{ route('product', $product->slug) }}" class="d-block p-2 text-reset bg-white h-100 rounded">-->
                <!--                        <div class="row gutters-5 align-items-center">-->
                <!--                            <div class="col-xxl">-->
                <!--                                <div class="img">-->
                <!--                                    <img-->
                <!--                                        class="lazyload img-fit h-140px h-lg-80px"-->
                <!--                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"-->
                <!--                                        data-src="{{ uploaded_asset($product->thumbnail_img) }}"-->
                <!--                                        alt="{{ $product->getTranslation('name') }}"-->
                <!--                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"-->
                <!--                                    >-->
                                                    
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                            <div class="col-xxl">-->
                <!--                                <div class="fs-16">-->
                <!--                                    <span class="d-block text-primary fw-600">{{ home_discounted_base_price($product) }}</span>-->
                <!--                                    @if(home_base_price($product) != home_discounted_base_price($product))-->
                <!--                                        <del class="d-block opacity-70">{{ home_base_price($product) }}</del>-->
                <!--                                    @endif-->
                <!--                                </div>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </a>-->
                <!--                </div>-->
                <!--                @endif-->
                <!--            @endforeach-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--@endif-->

            </div>
        </div>
    </div>
    
    <div class="home-banner-area bg1">
        <div class="container m_pd_0">
            <img src="/public/uploads/all/side.png" class="img-fluid ileft_abs up-down-new">
            <img src="/public/uploads/all/side.png" class="img-fluid irgt_abs up-down-two">
            <div class="row gutters-10 position-relative m_0">
                <div class="col-lg-12 text-center">
                    <div class="block-title">
                        <h3 class="h5 mb-0">
                            <span class="border-width-2 pb-3 d-inline-block">
                                {{ translate('What are you looking for ?') }}
                            </span>
                            <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                        </h3>
                    </div>
                </div>
                @php
                    $num_todays_deal = count($todays_deal_products);
                @endphp

                <div class="@if($num_todays_deal > 0) col-lg-10 @else col-lg-12 @endif">
                    @if (count($featured_categories) > 0)
                        <div class="row m_0">
                            @foreach ($featured_categories as $key => $category)
                                <div class="minw-0 col-12 col-md-4 mt-3 mb-3">
                                    <a href="{{ route('products.category', $category->slug) }}" class="rounded bg-white text-reset">
                                        <div class="img_d zoom-effect-container">
                                        <img
                                            src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                            data-src="{{ uploaded_asset($category->banner) }}"
                                            alt="{{ $category->getTranslation('name') }}"
                                            class="lazyload img-fit cat_hi8 pstn_rltv image-card br_5 wow FadeInLeft" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 0.1s; -moz-animation-delay: 0.1s; animation-delay: 0.1s;"
                                            id="image"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';"
                                        >
                                        
                                            <div class="text-truncate mt-2 category_name">{{ $category->getTranslation('name') }}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                @if($num_todays_deal > 0)
                <div class="col-lg-2 order-3 mt-3 mt-lg-0">
                    <div class="bg-white rounded shadow-sm">
                        <div class="bg-soft-primary rounded-top p-3 d-flex align-items-center justify-content-center">
                            <span class="fw-600 fs-16 mr-2 text-truncate">
                                {{ translate('Todays Deal') }}
                            </span>
                            <span class="badge badge-primary badge-inline">{{ translate('Hot') }}</span>
                        </div>
                        <div class="c-scrollbar-light overflow-auto bg-primary rounded-bottom">
                            <div class="gutters-5 lg-no-gutters row row-cols-2 row-cols-lg-1">
                            @foreach ($todays_deal_products as $key => $product)
                                @if ($product != null)
                                <div class="col mb-0">
                                    <a href="{{ route('product', $product->slug) }}" class="d-block p-2 text-reset bg-white m_6 rounded">
                                        <div class="row gutters-5 align-items-center">
                                            <div class="col-xxl">
                                                <div class="img">
                                                    <img
                                                        class="lazyload img-fit h-140px h-lg-80px"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($product->thumbnail_img) }}"
                                                        alt="{{ $product->getTranslation('name') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-xxl">
                                                <div class="fs-16">
                                                    <span class="d-block text-primary fw-600">{{ home_discounted_base_price($product) }}</span>
                                                    @if(home_base_price($product) != home_discounted_base_price($product))
                                                        <del class="d-block opacity-70">{{ home_base_price($product) }}</del>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>


    {{-- Flash Deal --}}
    @php
        $flash_deal = \App\Models\FlashDeal::where('status', 1)->where('featured', 1)->first();
    @endphp
    @if($flash_deal != null && strtotime(date('Y-m-d H:i:s')) >= $flash_deal->start_date && strtotime(date('Y-m-d H:i:s')) <= $flash_deal->end_date)
    <section class="mb-4">
        <div class="container">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white rounded">

                <div class="d-flex flex-wrap mb-3 align-items-baseline border-bottom">
                    <h3 class="h5 fw-700 mb-0">
                        <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Flash Sale') }}</span>
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </h3>
                    <div class="aiz-count-down ml-auto ml-lg-3 align-items-center" data-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                    <a href="{{ route('flash-deal-details', $flash_deal->slug) }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md w-100 w-md-auto">{{ translate('View More') }}</a>
                </div>

                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    @foreach ($flash_deal->flash_deal_products->take(20) as $key => $flash_deal_product)
                        @php
                            $product = \App\Models\Product::find($flash_deal_product->product_id);
                        @endphp
                        @if ($product != null && $product->published != 0)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $product])
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif


    <div id="section_newest">
        @if (count($newest_products) > 0)
            <section class="mb-4">
                <div class="container m_pdl_0">
                    <div class="px-2 py-4 px-md-4 py-md-3 bg-white rounded">
                        <div class="block-title mb_17">
                            <h3 class="h5 mb-0">
                                <span class="border-width-2 pb-3 d-inline-block">
                                    {{ translate('New Products') }}
                                </span>
                                <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                            </h3>
                        </div>
                        <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                            @foreach ($newest_products as $key => $new_product)
                            <div class="carousel-box">
                                @include('frontend.partials.product_box_1',['product' => $new_product])
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>   
        @endif
    </div>
        {{-- Banner section 1 --}}
    @if (get_setting('home_banner1_images') != null)
    <div class="mb-4">
        <div class="container">
            <img src="">
            <div class="row gutters-10">
                @php $banner_1_imags = json_decode(get_setting('home_banner1_images')); @endphp
                @foreach ($banner_1_imags as $key => $value)
                    <div class="col-xl col-md-6">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ json_decode(get_setting('home_banner1_links'), true)[$key] }}" class="d-block text-reset brd_rad5 zoom-effect-container">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_1_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 image-card">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    
    {{-- Featured Section --}}
    <div id="section_featured">

    </div>

    {{-- Best Selling  --}}
    <div id="section_best_selling">

    </div>

    <!-- Auction Product -->
    @if(addon_is_activated('auction'))
        <div id="auction_products">

        </div>
    @endif



    {{-- Banner Section 2 --}}
    @if (get_setting('home_banner2_images') != null)
    <div class="mb-4">
        <div class="container-fluid">
            <div class="row gutters-10">
                @php $banner_2_imags = json_decode(get_setting('home_banner2_images')); @endphp
                @foreach ($banner_2_imags as $key => $value)
                    <div class="col-xl col-md-6 pd_0">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ json_decode(get_setting('home_banner2_links'), true)[$key] }}" class="d-block text-reset zoom-effect-container brd_rad5">
                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}" data-src="{{ uploaded_asset($banner_2_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 hl_img image-card">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    {{-- Category wise Products --}}
    <div id="section_home_categories">

    </div>

   {{-- Best Seller --}}
   <div id="section_best_sellers">
       <section class="mb-4 pos_rel">
        <div class="container m_pdl_0">
            <img class="up-down-three abs-dot" src="public/uploads/all/circle-shape.png">
            <!--<img class="img-fluid abs-dot2 up-down-new" src="public/uploads/all/circle-shape.png">-->
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white rounded">
                <div class="block-title">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">
                            feature Components
                        </span>
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </h3>
                </div>
                <div class="col-xl-12">
                    <div class="row">
                         <div class="col-md-4 border-inset">
                            <a href="/buyer_paymet_protection">
                            <div class="wow FadeInDown featr_box" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInDown;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/s-money.png" class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                   <p class="mb-2"><span class="fc_h">Buyer payment protection</span></p>
                                    <p class="m-0 fs-15 wht_clr clr_hb"><span class="">100% Your purchase will be </span></p>
                                    <p class="m-0 fs-15 wht_clr clr_hb"><span class="">protected by marketsaltz</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4 border-inset">
                            <div class="wow FadeInLeft featr_box" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/t-money.png" class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                    <p class="mb-2"><span class="fc_h">Trade in multiple currency</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">Sell in customers local currency</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">Get paid in your local currency</span></p>
                                </div>
                            </div>
                        </div>
                          
                        <div class="col-md-4 border-inset">
                            <div class="wow FadeInRight featr_box" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/se-money.png" class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                    <p class="mb-2"><span class="fc_h">Search &amp; Compare</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">Ease of Search for chemicals, pharma API’s, equipment &amp; machinery.</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">Compare the products and select to buy conveniently as per your requirement.</span></p>
                                   
                                </div>
                            </div>
                        </div>
                            
                        
                    </div>
                </div>
                 <div class="col-xl-12 mt_20">
                    <div class="row">
                        <div class="col-md-2 border-inset">
                            <div class="">
                                <div class="">
                                    <img src="">
                                </div>
                                <div class="txt_style3 up-down-three">
                                    <span class="ml_10"></span>
                                </div>
                                <div class="txt_style4 up-down-three">
                                    <span class="ml_10"></span>
                                </div>
                                <div class="txt_style5 up-down-three">
                                    <span class="ml_10"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 border-inset">
                            <div class="wow FadeInUp featr_box" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/v-money.png" class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                    <p class="mb-2"><span class="fc_h">Live Competitive Prices</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">No wait for Price Quotes</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">No negotiations as the prices</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">are live on display</span></p>
                                   
                                </div>
                            </div>
                        </div>
                           <div class="col-md-4 border-inset">
                            <div class="wow FadeInDown featr_box" style="visibility: visible; animation-name: fadeInDown;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/d-p.png" class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                    <p class="mb-2"><span class="fc_h">Door to Door Logistics</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">You order and relax</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">Marketsaltz ensures your order</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class="">delivered at your door</span></p>
                                   
                                </div>
                            </div>
                        </div>
                            <div class="col-md-2 border-inset">
                            <div class="">
                                <div class="">
                                    <img src="">
                                </div>
                                <div class="txt_style up-down-three">
                                    <span class="ml_10"></span>
                                </div>
                                <div class="txt_style1 up-down-three">
                                    <span class="ml_10"></span>
                                </div>
                                <div class="txt_style2 up-down-three">
                                    <span class="ml_10"></span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
      <!--          <ul class="f_we">-->
                    
      <!--    <li>Trade in multiple currency</li>-->
      <!--     <li> suppliers payment protection</li>-->
      <!--</ul>-->
                <div class="aiz-carousel gutters-10 half-outside-arrow slick-initialized slick-slider" data-items="3" data-lg-items="3" data-md-items="2" data-sm-items="2" data-xs-items="1" data-rows="2"><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 0px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
            </div>
        </div>
    </section>
</div>

    
    {{-- Best Seller --}}
    <div id="section_best_sellers">

    </div>
     {{-- Classified Product --}}
    @if(get_setting('classified_product') == 1)
        @php
            $classified_products = \App\Models\CustomerProduct::where('status', '1')->where('published', '1')->take(10)->get();
        @endphp
           @if (count($classified_products) > 0)
               <section class="mb-4">
                   <div class="container">
                       <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                            <div class="d-flex mb-3 align-items-baseline border-bottom">
                                <h3 class="h5 fw-700 mb-0">
                                    <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Classified Ads') }}</span>
                                    <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                                </h3>
                                <a href="{{ route('customer.products') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View More') }}</a>
                            </div>
                           <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                               @foreach ($classified_products as $key => $classified_product)
                                   <div class="carousel-box">
                                        <div class="aiz-card-box border border-light rounded hov-shadow-md my-2 has-transition">
                                            <div class="position-relative">
                                                <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block">
                                                    <img
                                                        class="img-fit lazyload mx-auto h-140px h-md-210px"
                                                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                        data-src="{{ uploaded_asset($classified_product->thumbnail_img) }}"
                                                        alt="{{ $classified_product->getTranslation('name') }}"
                                                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                                                    >
                                                </a>
                                                <div class="absolute-top-left pt-2 pl-2">
                                                    @if($classified_product->conditon == 'new')
                                                       <span class="badge badge-inline badge-success">{{translate('new')}}</span>
                                                    @elseif($classified_product->conditon == 'used')
                                                       <span class="badge badge-inline badge-danger">{{translate('Used')}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="p-md-3 p-2 text-left">
                                                <div class="fs-15 mb-1">
                                                    <span class="fw-700 text-primary">{{ single_price($classified_product->unit_price) }}</span>
                                                </div>
                                                <h3 class="fw-600 fs-13 text-truncate-2 lh-1-4 mb-0 h-35px">
                                                    <a href="{{ route('customer.product', $classified_product->slug) }}" class="d-block text-reset">{{ $classified_product->getTranslation('name') }}</a>
                                                </h3>
                                            </div>
                                       </div>
                                   </div>
                               @endforeach
                           </div>
                       </div>
                   </div>
               </section>
           @endif
       @endif
       {{-- Banner Section 2 --}}
    @if (get_setting('home_banner3_images') != null)
    <div class="mb-4">
        <div class="container">
            <div class="row gutters-10">
                @php $banner_3_imags = json_decode(get_setting('home_banner3_images')); @endphp
                @foreach ($banner_3_imags as $key => $value)
                    <div class="col-xl col-md-6">
                        <div class="mb-3 mb-lg-0">
                            <a href="{{ json_decode(get_setting('home_banner3_links'), true)[$key] }}" class="d-block text-reset">
                                <img src="{{ static_asset('assets/img/placeholder.jpg') }}" data-src="{{ uploaded_asset($banner_3_imags[$key]) }}" alt="{{ env('APP_NAME') }} promo" class="img-fluid lazyload w-100 img_shbl">
                            </a>
                            
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!--<div class=" t_c bg_clr">-->
    <!--    <h2 class="mb_50 fw-600">Why Choose Us</h2>-->
    <!--    <div class="row mt_20 m_lr">-->
    <!--        <div class="col-md-4">-->
    <!--            <div><img class="wd_11" src="public/assets/img/recycle.png"></div>-->
    <!--            <p class="f_style fw-500 mt_20">Secure and Recyclable Packaging</p>-->
    <!--        </div>-->
    <!--        <div class="col-md-4">-->
    <!--            <div><img class="wd_11" src="public/assets/img/replace.png"></div>-->
    <!--            <p class="f_style fw-500 mt_20">Free Replacements if Damaged</p>-->
    <!--        </div>-->
    <!--        <div class="col-md-4">-->
    <!--            <div><img class="wd_11" src="public/assets/img/watering.png"></div>-->
    <!--            <p class="f_style fw-500 mt_20">24/7 Customer Supports</p>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    
<!--  <div class="container">-->

<!--  <div class="">-->

<!--    <div class="form ">-->
      
<!--      <h2 class="form-headline">Request for a Quote :</h2>-->
      
<!--      <form id="submit-form" class="frm mt_20" action="">-->
<!--        <p>-->
<!--          <input id="name" class="form-input" type="text" placeholder="Your Name*">-->
<!--          <small class="name-error"></small>-->
<!--        </p>-->
<!--        <p>-->
<!--          <input id="email" class="form-input" type="email" placeholder="Your Email*">-->
<!--          <small class="name-error"></small>-->
<!--        </p>-->
<!--         <p>-->
<!--          <input id="contactno" class="form-input" type="text" placeholder="Contact no*">-->
<!--          <small class="name-error"></small>-->
<!--        </p>-->
<!--        <p>-->
<!--          <input id="cas" class="form-input" type="email" placeholder="CAS NO*">-->
<!--          <small class="name-error"></small>-->
<!--        </p>-->
<!--        <p class="full-width">-->
<!--          <input id="product-name" class="form-input" type="text" placeholder="product Name*" required>-->
<!--          <small></small>-->
<!--        </p>-->
<!--        <p class="full-width">-->
<!--          <textarea  minlength="20" id="message" cols="30" rows="7" placeholder="Description*" required></textarea>-->
<!--          <small></small>-->
<!--        </p>-->
        <!--<p class="full-width">-->
        <!--  <input type="checkbox" id="checkbox" name="checkbox" checked> Yes, I would like to receive communications by call / email about Company's services.-->
        <!--</p>-->
<!--        <p class="full-width">-->
<!--          <input type="submit" class="submit-btn res_btn" value="Submit" onclick="checkValidations()">-->
          <!--<button class="reset-btn" onclick="reset()">Reset</button>-->
<!--        </p>-->
<!--      </form>-->
<!--    </div>-->

<!--    <div class="contacts contact-wrapper">-->

     
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--start sell on marketsaltz-->
    <div class="container" id="bonty">
        <div class="row">  
            <div class="col-sm-12 col-sm-12 col-12 mb4">
            <p class="text-center mb-0"><a href="{{ url('manufacturer_login') }}" class="btn btn-primary   blk button" target="_blank">Are you a Manufacturer – Sell on marketsaltz</a></p>
            <!--<div class="">-->
            <!--     <button type="button" class="btn btn-warning ads_btn " data-toggle="modal" data-target="#form">-->
            <!--       <a href="/packages" class="clr_wht"> ADVERTISE WITH US</a>-->
            <!--     </button>  -->
            <!--</div>-->

<!--<div class="modal fade bg_fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--    <div class="modal-content brd_2px">-->
<!--      <div class="modal-header border-bottom-0">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Advertise With Us</h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <form>-->
<!--        <div class="modal-body mx_height res_mx">-->
<!--          <div id="" class="">-->
<!--			<div class="row">-->
<!--        	<div class="card mb_res">-->
<!--        		<h1 class="fs-23">Basic</h1><hr>-->
        		

<!--        		<ul>-->
<!--        			<li>Featured Banner</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="hp_30" value="red"> </p><div class="red  chk_amt1" id="hp_amt30"><strong>Rs.3000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="cp_30" value="green"> </p><div class="green chk_amt2" id="cp_amt30"><strong>Rs.3000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="pp_30" value="blue"> </p><div class="blue  chk_amt3" id="pp_amt30"><strong>Rs.3000 + 18% GST</strong></div>-->
<!--                </div>-->
<!--        			<li>Featured Product (30 Days x 1 Product)</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="fhp_30" value="red"> </p><div class="red  chk_amt1" id="fhp_amt30"><strong>Rs.3000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="fcp_30" value="green"> </p><div class="green chk_amt2" id="fcp_amt30"><strong>Rs.3000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="fpp_30" value="blue"> </p><div class="blue  chk_amt3" id="fpp_amt30"><strong>Rs.3000 + 18% GST</strong></div>-->
<!--                </div>-->
<!--        			<li>1month =30 Days x 1 Banner</li>-->
<!--        			<li>2 Promotional emails to registerd members of relevant category</li>-->
        		
<!--        		</ul>-->

<!--        		<button class="ads_buy">Buy Now</button>-->
<!--        	</div>-->
<!--        	<div class="card mb_res">-->
<!--        		<h1 class="fs-23">Silver</h1><hr>-->
        		<!--<h2 class="fs-20">Rs.5000 + 18% GST</h2>-->

<!--        		<ul>-->
<!--        			<li>Featured Banner</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="hp_90" value="red"> </p><div class="red  chk_amt1" id="hp_amt90"><strong>Rs.5000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="cp_90" value="green"> </p><div class="green chk_amt2" id="cp_amt90"><strong>Rs.5000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="pp_90" value="blue"> </p><div class="blue  chk_amt3" id="pp_amt90"><strong>Rs.5000 + 18% GST</strong></div>-->
<!--                </div>-->
<!--        			<li>Featured Product (90 Days x 1 Product)</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="fhp_90" value="red"> </p><div class="red  chk_amt1" id="fhp_amt90"><strong>Rs.5000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="fcp_90" value="green"> </p><div class="green chk_amt2" id="fcp_amt90"><strong>Rs.5000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="fpp_90" value="blue"> </p><div class="blue  chk_amt3" id="fpp_amt90"><strong>Rs.5000 + 18% GST</strong></div>-->
<!--                </div>-->
<!--        			<li>3 months =90 Days x 1 Banner</li>-->
<!--        			<li>6 Promotional emails to registerd members of relevant category</li>-->
        			
        			
<!--        		</ul>-->

<!--        		<button class="ads_buy">Buy Now</button>-->
<!--        	</div>-->
<!--        	<div class="card mb_res">-->
<!--        		<h1 class="fs-23">Gold</h1><hr>-->
        		<!--<h2 class="fs-20"><b></b>Rs.8000 + 18% GST</b></h2>-->

<!--        		<ul>-->
<!--        			<li>Featured Banner</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="hp_180" value="red"> </p><div class="red  chk_amt1" id="hp_amt180"><strong>Rs.8000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="cp_180" value="green"> </p><div class="green chk_amt2" id="cp_amt180"><strong>Rs.8000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="pp_180" value="blue"> </p><div class="blue  chk_amt3" id="pp_amt180"><strong>Rs.8000 + 18% GST</strong></div>-->
<!--                </div>-->
<!--        			<li>Featured Product (180 Days x 1 Product)</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="fhp_180" value="red"> </p><div class="red  chk_amt1" id="fhp_amt180">You have selected <strong>red checkbox</strong> so i am here</div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="fcp_180" value="green"> </p><div class="green chk_amt2" id="fcp_amt180">You have selected <strong>green checkbox</strong> so i am here</div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="fpp_180" value="blue"> </p><div class="blue  chk_amt3" id="fpp_amt180">You have selected <strong>blue checkbox</strong> so i am here</div>-->
<!--                </div>-->
<!--        			<li>6 months =180 Days x 1 Banner</li>-->
<!--        			<li>12 Promotional emails to registerd members of relevant category</li>-->
        			
        			
<!--        		</ul>-->

<!--        		<button class="ads_buy">Buy Now</button>-->
<!--        	</div>-->
<!--        	<div class="card mb_res">-->
<!--        		<h1 class="fs-23">Platinum</h1><hr>-->
<!--        		<h2 class="fs-20">Rs.5000 + 18% GST</h2>-->

<!--        		<ul>-->
<!--        			<li>Featured Banner</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="hp_1" value="red"> </p><div class="red  chk_amt1" id="hp_amt"> <strong>Rs.10000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="cp_1" value="green"> </p><div class="green chk_amt2" id="cp_amt"> <strong>Rs.10000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="pp_1" value="blue"> </p><div class="blue  chk_amt3" id="pp_amt"> <strong>Rs.10000 + 18% GST</strong></div>-->
<!--                </div>-->
             
<!--        			<li>Featured Product (90 Days x 1 Product)</li>-->
<!--        			<div class="chk_box">-->
<!--                    <p class="txt_left">Home Page <input type="checkbox" name="" id="fhp_1" value="red"> </p><div class="red  chk_amt1" id="fhp_amt"> <strong>Rs.10000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Comparision Page <input type="checkbox" name="" id="fcp_1" value="green"> </p><div class="green chk_amt2" id="fcp_amt"> <strong>Rs.10000 + 18% GST</strong></div>-->
<!--                    <p class="txt_left">Product Page <input type="checkbox" name="" id="fpp_1" value="blue"> </p><div class="blue  chk_amt3" id="fpp_amt"> <strong>Rs.10000 + 18% GST</strong></div>-->
<!--                </div>-->
<!--        			<li>3 months =90 Days x 1 Banner</li>-->
<!--        			<li>6 Promotional emails to registerd members of relevant category</li>-->
<!--        		</ul>-->
        		

<!--        		<button class="ads_buy">Buy Now</button>-->
<!--        	</div>-->
<!--        </div>-->

<!--		</div>-->
<!--        </div>-->
        
<!--      </form>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
            </div>
        </div>
    </div>
    
    
    

<!--end sell on marketsaltz-->

<!--PARTNER SLIDER & RECOGNITION >>>>>-->

<div class="sliderr">
    <div class="block-title mb_17">
        <h3 class="h5 mb-0">
            <span class="border-width-2 pb-3 d-inline-block">Recognitions & Trusted Partners</span>
            <span class="sp_rnd"></span>
            <span class="sp_rnd2"></span>
            <span class="sp_rnd_wht"></span>
    </div>
    
  <div class="slide-trackk1">
    <div class="slide">
      <img src="public/assets/img/ev1.png" alt=""  class="imgg">
    </div>
    <div class="slide">
      <img src="public/assets/img/ev2.png" alt=""  class="imgg">
    </div>
    <div class="slide">
      <img src="public/assets/img/ev3.png" alt=""  class="imgg">
    </div>
    <div class="slide">
      <img src="public/assets/img/ev1.png" alt=""  class="imgg">
    </div>
    <div class="slide">
     <img src="public/assets/img/ev3.png" alt=""  class="imgg">
    </div>
  <div class="slide">
      <img src="public/assets/img/ev2.png" alt=""  class="imgg">
    </div>
    <div class="slide">
      <img src="public/assets/img/ev3.png" alt=""  class="imgg">
    </div>
    <div class="slide">
      <img src="public/assets/img/ev1.png" alt=""  class="imgg">
    </div>
    <div class="slide">
      <img src="public/assets/img/ev2.png" alt=""  class="imgg">
    </div>
    
   <div class="slide">
      <img src="public/assets/img/ev3.png" alt=""  class="imgg">
    </div>
    
  </div>
</div>

<!--PARTNER SLIDER & RECOGNITION >>>>>-->

<!--<<<Contact Us PAge Start>>>>-->
<section class="c_us_bg">
    <div class="container">
        <div class="block-title pd_t">
                                <h3 class="h5 mb-0">
                                    <span class="border-width-2 pb-3 d-inline-block">
                                       Service at your front: Third Party Manufacturing & Custom Synthesis
                                    </span>
                                    <span class="sp_rnd"></span>
                                        <span class="sp_rnd2"></span>
                                        <span class="sp_rnd_bl"></span>
                                </h3>
                            </div>
        <div class="row">
            <div class="col-xl-7 col-sm-7 col-12">
            <div class="p_70">
            
            <!--<h3 class="abt">About Us</h3>-->
            <p class="fs_20">Pharma API and Intermediates</p>
            <p class="fs_16">Marketsaltz provides custom synthesis and contract manufacturing for Pharma intermediates, API’s
through their associate Contract Research Organisations (CROs) and Contract Manufacturing
Organisations (CMOs).</p>

            </div>
            </div>
            <div class="col-xl-5 col-sm-5 col-12">
                <div>
                  <div class="contact-form-wrapper d-flex justify-content-center mt-5">
                    <form action="{{url('/contact_mail')}}" class="contact-form" method="post">
                        @csrf
                      <h5 class="title">Contact us</h5>
                      <p class="description" style="color: #313030;">Feel free to contact us if you need any assistance, any help or another question.
                      </p>
                      <div class="mb_10">
                        <input type="text" name="fullname" class="form-control rounded border-white mb-3 form-input" id="name" placeholder="Name" required>
                      </div>
                      <div class="mb_10">
                        <input type="email" name="email" class="form-control rounded border-white mb-3 form-input" placeholder="Email" required>
                      </div>
                      <div>
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
        </div>
    </div>
</section>

<!--<<<Contact Us PAge END>>>>-->

<!--TESTIMONIAL PAGE START >>>>-->
    <section class="testimonial text-center mt-4 mb-4">
        <div class="container">

           <div class="block-title pd_t">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">
                         testimonial
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </h3>
                </div>
            
            
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="public/assets/img/test.jpg" class="img-circle img-responsive" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                         
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="public/assets/img/test1.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                           
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                <i class="fa fa-arrow-left f_ic" aria-hidden="true"></i>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
               <i class="fa fa-arrow-right f_ic" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>
    
    <!--TESTIMONIAL PAGE END >>>>-->
    
    

    <div class="container-fluid max-width-1240 mb_30">
        <div class="row simple-steps">
            <div class="col-lg-4 text-center border-right-dash">
                <div style="height: 152px;" class="wow FadeInLeft"><img src="../public/assets/img/stock.png" width="30%" height="152px"></div>
                <div class="card-description  wow FadeInRight" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"><span class="text_sp">AVAILABLE STOCKS</span>
                  </div>
            </div>
            <div class="col-lg-4 text-center border-right-dash buying-steps">
                <div style="height: 152px;" class="wow FadeInDown"><img src="../public/assets/img/secure-p.png" width="30%"  height="152px" ></div>
                <div class="card-description wow FadeInUp" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"><span class="text_sp ">SECURE PAYMENT</span>
                    </div>
            </div>
            <!--<div class="col-lg-3 text-center border-right-dash buying-steps">-->
            <!--    <div style="height: 152px;"><img src="../public/assets/img/delivery.png"></div>-->
            <!--    <div class="card-description"><span class="text-uppercase text_sp">Order Online</span><br>-->
            <!--        Convenience to Order</div>-->
            <!--</div>-->
            <div class="col-lg-4 text-center buying-steps">
                <div style="height: 152px;" class=" wow FadeInRight"><img src="../public/assets/img/delivery.png" height="152px"
    width= "30%;"></div>
                <div class="card-description  wow FadeInLeft" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;"><span class="text_sp">DELIVERY</span>
                    </div>
            </div>
        </div>
    </div>

    {{-- Top 10 categories and Brands --}}
    @if (get_setting('top10_categories') != null && get_setting('top10_brands') != null)
    <!--<section class="mb-4">-->
    <!--    <div class="container">-->
    <!--        <div class="row gutters-10">-->
    <!--            @if (get_setting('top10_categories') != null)-->
    <!--                <div class="col-lg-6">-->
    <!--                    <div class="d-flex mb-3 align-items-baseline border-bottom">-->
    <!--                        <h3 class="h5 fw-700 mb-0">-->
    <!--                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Categories') }}</span>-->
    <!--                        </h3>-->
    <!--                        <a href="{{ route('categories.all') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Categories') }}</a>-->
    <!--                    </div>-->
    <!--                    <div class="row gutters-5">-->
    <!--                        @php $top10_categories = json_decode(get_setting('top10_categories')); @endphp-->
    <!--                        @foreach ($top10_categories as $key => $value)-->
    <!--                            @php $category = \App\Models\Category::find($value); @endphp-->
    <!--                            @if ($category != null)-->
    <!--                                <div class="col-sm-6">-->
    <!--                                    <a href="{{ route('products.category', $category->slug) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">-->
    <!--                                        <div class="row align-items-center no-gutters">-->
    <!--                                            <div class="col-3 text-center">-->
    <!--                                                <img-->
    <!--                                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"-->
    <!--                                                    data-src="{{ uploaded_asset($category->banner) }}"-->
    <!--                                                    alt="{{ $category->getTranslation('name') }}"-->
    <!--                                                    class="img-fluid img lazyload h-60px"-->
    <!--                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"-->
    <!--                                                >-->
    <!--                                            </div>-->
    <!--                                            <div class="col-7">-->
    <!--                                                <div class="text-truncat-2 pl-3 fs-14 fw-600 text-left">{{ $category->getTranslation('name') }}</div>-->
    <!--                                            </div>-->
    <!--                                            <div class="col-2 text-center">-->
    <!--                                                <i class="la la-angle-right text-primary"></i>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            @endif-->
    <!--                        @endforeach-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endif-->
    <!--            @if (get_setting('top10_brands') != null)-->
    <!--                <div class="col-lg-6">-->
    <!--                    <div class="d-flex mb-3 align-items-baseline border-bottom">-->
    <!--                        <h3 class="h5 fw-700 mb-0">-->
    <!--                            <span class="border-bottom border-primary border-width-2 pb-3 d-inline-block">{{ translate('Top 10 Brands') }}</span>-->
    <!--                        </h3>-->
    <!--                        <a href="{{ route('brands.all') }}" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('View All Brands') }}</a>-->
    <!--                    </div>-->
    <!--                    <div class="row gutters-5">-->
    <!--                        @php $top10_brands = json_decode(get_setting('top10_brands')); @endphp-->
    <!--                        @foreach ($top10_brands as $key => $value)-->
    <!--                            @php $brand = \App\Models\Brand::find($value); @endphp-->
    <!--                            @if ($brand != null)-->
    <!--                                <div class="col-sm-6">-->
    <!--                                    <a href="{{ route('products.brand', $brand->slug) }}" class="bg-white border d-block text-reset rounded p-2 hov-shadow-md mb-2">-->
    <!--                                        <div class="row align-items-center no-gutters">-->
    <!--                                            <div class="col-4 text-center">-->
    <!--                                                <img-->
    <!--                                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"-->
    <!--                                                    data-src="{{ uploaded_asset($brand->logo) }}"-->
    <!--                                                    alt="{{ $brand->getTranslation('name') }}"-->
    <!--                                                    class="img-fluid img lazyload h-60px"-->
    <!--                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"-->
    <!--                                                >-->
    <!--                                            </div>-->
    <!--                                            <div class="col-6">-->
    <!--                                                <div class="text-truncate-2 pl-3 fs-14 fw-600 text-left">{{ $brand->getTranslation('name') }}</div>-->
    <!--                                            </div>-->
    <!--                                            <div class="col-2 text-center">-->
    <!--                                                <i class="la la-angle-right text-primary"></i>-->
    <!--                                            </div>-->
    <!--                                        </div>-->
    <!--                                    </a>-->
    <!--                                </div>-->
    <!--                            @endif-->
    <!--                        @endforeach-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            @endif-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    @endif

@endsection

@section('script')


// <script>
// $(document).ready(function(){
//     $('input[type="checkbox"]').click(function(){
//         var inputValue = $(this).attr("value");
//         $("." + inputValue).toggle();
//     });
// });
// </script>



    <script>
        $(document).ready(function(){
            $.post('{{ route('home.section.featured') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_featured').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.best_selling') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_best_selling').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.auction_products') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#auction_products').html(data);
                AIZ.plugins.slickCarousel();
            });
            $.post('{{ route('home.section.home_categories') }}', {_token:'{{ csrf_token() }}'}, function(data){
                $('#section_home_categories').html(data);
                AIZ.plugins.slickCarousel();
            });
            // $.post('{{ route('home.section.best_sellers') }}', {_token:'{{ csrf_token() }}'}, function(data){
            //     $('#section_best_sellers').html(data);
            //     AIZ.plugins.slickCarousel();
            // });
        });
    </script>
@endsection

<script>
                            var wow = new WOW(
                  {
                    boxClass:     'wow',      // animated element css class (default is wow)
                    animateClass: 'animated', // animation css class (default is animated)
                    offset:       0,          // distance to the element when triggering the animation (default is 0)
                    mobile:       true,       // trigger animations on mobile devices (default is true)
                    live:         true,       // act on asynchronously loaded content (default is true)
                    callback:     function(box) {
                      // the callback is fired every time an animation is started
                      // the argument that is passed in is the DOM node being animated
                    },
                    scrollContainer: null // optional scroll container selector, otherwise use window
                  }
                );
                wow.init();
             </script>
			 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
			 <script>
                            new WOW().init();
                            </script>
@section('script')
               <script>
               const nameEl = document.querySelector("#name");
const emailEl = document.querySelector("#email");
const companyNameEl = document.querySelector("#company-name");
const messageEl = document.querySelector("#message");

const form = document.querySelector("#submit-form");

function checkValidations() {
  let letters = /^[a-zA-Z\s]*$/;
  const name = nameEl.value.trim();
  const email = emailEl.value.trim();
  const companyName = companyNameEl.value.trim();
  const message = messageEl.value.trim();
  if (name === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
  if (email === "") {
     document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please fill out this field!";
  } else {
    if (!letters.test(name)) {
      document.querySelector(".name-error").classList.add("error");
      document.querySelector(".name-error").innerText =
        "Please enter only characters!";
    } else {
      
    }
  }
}

function reset() {
  nameEl = "";
  emailEl = "";
  companyNameEl = "";
  messageEl = "";
  document.querySelector(".name-error").innerText = "";
}

               </script>
               
               
               
               
             

@endsection
