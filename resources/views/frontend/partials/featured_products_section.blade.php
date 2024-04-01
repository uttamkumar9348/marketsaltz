@php
    $featured_products = Cache::remember('featured_products', 3600, function () {
        return filter_products(\App\Models\Product::where('published', 1)->where('featured', '1'))->limit(12)->get();
    });
@endphp

@if (count($featured_products) > 0)
    <section class="mb-4">
        <div class="container m_pdl_0">
            <div class="px-2 py-4 px-md-4 py-md-3 bg-white shadow-sm rounded">
                <div class="block-title mb_17">
                    <h3 class="h5 mb-0">
                        <span class="border-width-2 pb-3 d-inline-block">{{ translate('Featured Products') }}</span>
                        <span class="sp_rnd"></span>
                            <span class="sp_rnd2"></span>
                            <span class="sp_rnd_wht"></span>
                    </h3>
                </div>
                <div class="aiz-carousel gutters-10 half-outside-arrow" data-items="6" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true'>
                    @foreach ($featured_products as $key => $product)
                    <div class="carousel-box">
                        @include('frontend.partials.product_box_1',['product' => $product])
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>   
@endif