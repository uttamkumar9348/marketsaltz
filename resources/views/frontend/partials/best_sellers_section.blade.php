@php
    $best_selers = Cache::remember('best_selers', 86400, function () {
        return \App\Models\Shop::where('verification_status', 1)->orderBy('num_of_sale', 'desc')->take(20)->get();
    });
@endphp

@if (get_setting('vendor_system_activation') == 1)
    <section class="mb-4 pos_rel">
        <div class="container m_pdl_0">
            <img class="up-down-three abs-dot" src="public/uploads/all/circle-shape.png">
            <!--<img class="img-fluid abs-dot2 up-down-new" src="public/uploads/all/circle-shape.png">-->
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white rounded">
                <div class="block-title">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">
                            {{ translate('feature Components') }}
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
                            <div class=" wow FadeInDown featr_box" data-wow-delay="0.3s" style="visibility: visible; -webkit-animation-delay: 0.3s; -moz-animation-delay: 0.3s; animation-delay: 0.3s;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/s-money.png"  class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                   <p class="mb-2"><span class="fc_h">Buyer payment protection</span></p>
                                    <p class="m-0 fs-15 wht_clr clr_hb"><span class=>100% Your purchase will be </span></p>
                                    <p class="m-0 fs-15 wht_clr clr_hb"><span class=>protected by marketsaltz</span></p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-4 border-inset">
                            <div class=" wow FadeInLeft featr_box" data-wow-delay="0.2s" style="visibility: visible; -webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/t-money.png" class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                    <p class="mb-2"><span class="fc_h">Trade in multiple currency</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class=>Sell in customers local currency</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class=>Get paid in your local currency</span></p>
                                </div>
                            </div>
                        </div>
                          
                        <div class="col-md-4 border-inset">
                            <div class=" wow FadeInRight featr_box" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/se-money.png"  class="wd_175 round_icon">
                                </div>
                                
                                <div class="div_style z1">
                                    <p class="mb-2"><span class="fc_h">Search & Compare</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class=>Ease of Search for chemicals, pharma API’s, equipment & machinery.</span></p>
                                    <p class="m-0 fs-15 wht_clr"><span class=>Compare the products and select to buy conveniently as per your requirement.</span></p>
                                   
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
                            <div class=" wow FadeInUp featr_box" data-wow-delay="0.6s" style="visibility: visible; -webkit-animation-delay: 0.6s; -moz-animation-delay: 0.6s; animation-delay: 0.6s;">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/v-money.png"  class="wd_175 round_icon">
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
                            <div class=" wow FadeInDown featr_box">
                                <div class="wd_40 text-center po_zin">
                                    <img src="public/uploads/all/d-p.png"  class="wd_175 round_icon">
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
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="3" data-lg-items="3"  data-md-items="2" data-sm-items="2" data-xs-items="1" data-rows="2">
                    @foreach ($best_selers as $key => $seller)
                        @if ($seller->user != null)
                            <div class="carousel-box">
                                <div class="row no-gutters box-3 align-items-center border border-light rounded hov-shadow-md my-2 has-transition">
                                    <div class="col-4">
                                        <a href="{{ route('shop.visit', $seller->slug) }}" class="d-block p-3">
                                            <img
                                                src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                                data-src="@if ($seller->logo !== null) {{ uploaded_asset($seller->logo) }} @else {{ static_asset('assets/img/placeholder.jpg') }} @endif"
                                                alt="{{ $seller->name }}"
                                                class="img-fluid lazyload"
                                            >
                                        </a>
                                    </div>
                                    <div class="col-8 border-left border-light">
                                        <div class="p-3 text-left">
                                            <h2 class="h6 fw-600 text-truncate">
                                                <a href="{{ route('shop.visit', $seller->slug) }}" class="text-reset">{{ $seller->name }}</a>
                                            </h2>
                                            <div class="rating rating-sm mb-2">
                                                {{ renderStarRating($seller->rating) }}
                                            </div>
                                            <a href="{{ route('shop.visit', $seller->slug) }}" class="btn btn-soft-primary btn-sm">
                                                {{ translate('Visit Store') }} <i class="las la-angle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
