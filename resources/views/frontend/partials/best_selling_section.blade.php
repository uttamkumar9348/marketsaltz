@php
    $best_selling_products = Cache::remember('best_selling_products', 86400, function () {
        return filter_products(\App\Models\Product::where('published', 1)->orderBy('num_of_sale', 'desc'))->limit(20)->get();
    });   
@endphp

@if (get_setting('best_selling') == 1)
    <section class="mb-4">
        <div class="container m_pdl_0">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="block-title mb_17">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">{{ translate('Best Selling') }}</span>
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </h3>
                    <!--<a href="javascript:void(0)" class="ml-auto mr-0 btn btn-primary btn-sm shadow-md">{{ translate('Top 20') }}</a>-->
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='true'>
                    @foreach ($best_selling_products as $key => $product)
                        <div class="carousel-box">
                            @include('frontend.partials.product_box_1',['product' => $product])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
