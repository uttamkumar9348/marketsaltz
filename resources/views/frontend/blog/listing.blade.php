@extends('frontend.layouts.app')

@section('content')
<style>
    .pd_17 {
    padding: 14.5px 20px!important;
    }
    
   .container{
           /*padding: 40px;*/
   }
   .card-title{
    font-weight: 600;
    font-size: 27px;
}

.card-text{
    font-size: 17px;
}
.category_style{
    padding: 3px 6px;
    background-color: #d7d7d7;
    border-radius: 10px;
    color: #000;
}
.card .card-footer {
   
    padding: 0px 25px !important;
}
.g-0{
    overflow: hidden;
    height: 300px;
}
    
.card-text_style{
    color: #535353;
}
.card-text_style:hover{
    color: #002bc8;
}
.card-title_style{
    color: #000;
}
.card-title_style:hover{
    color: #002bc8;
}

/*.mb-3, .my-3 {*/
/*    margin-bottom: 3px;*/
/*    margin: 0px 21%;*/
/*}*/
    
</style>
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12 text-center text-lg-left" style="padding: 0px 21%;">
                <h1 class="fw-600 h4">{{ translate('Blog')}}</h1>
                <hr>
            </div>
           
            <!--<div class="col-lg-4">-->
            <!--    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">-->
            <!--        <li class="breadcrumb-item opacity-50">-->
            <!--            <a class="text-reset" href="{{ route('home') }}">-->
            <!--                {{ translate('Home')}}-->
            <!--            </a>-->
            <!--        </li>-->
            <!--        <li class="text-dark fw-600 breadcrumb-item">-->
            <!--            <a class="text-reset" href="{{ route('blog') }}">-->
            <!--                "{{ translate('Blog') }}"-->
            <!--            </a>-->
            <!--        </li>-->
                    
            <!--    </ul>-->
            <!--</div>-->
            
        </div>
    </div>
</section>






<!--<section class="pb-4">-->
<!--    <div class="container">-->
<!--        <div class="card-columns">-->
<!--            @foreach($blogs as $blog)-->
<!--                <div class="card mb-3 overflow-hidden shadow-sm">-->
<!--                    <a href="{{ url("blog").'/'. $blog->slug }}" class="text-reset d-block">-->
<!--                        <img-->
<!--                            src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"-->
<!--                            data-src="{{ uploaded_asset($blog->banner) }}"-->
<!--                            alt="{{ $blog->title }}"-->
<!--                            class="img-fluid lazyload "-->
<!--                        >-->
<!--                    </a>-->
<!--                    <div class="p-4">-->
<!--                        <h2 class="fs-18 fw-600 mb-1">-->
<!--                            <a href="{{ url("blog").'/'. $blog->slug }}" class="text-reset">-->
<!--                                {{ $blog->title }}-->
<!--                            </a>-->
<!--                        </h2>-->
<!--                        @if($blog->category != null)-->
<!--                        <div class="mb-2 opacity-50">-->
<!--                            <i>{{ $blog->category->category_name }}</i>-->
<!--                        </div>-->
<!--                        @endif-->
<!--                        <p class="opacity-70 mb-4">-->
<!--                            {{ $blog->short_description }}-->
<!--                        </p>-->
<!--                        <a href="{{ url("blog").'/'. $blog->slug }}" class="btn btn-soft-primary">-->
<!--                            {{ translate('View More') }}-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--            @endforeach-->
            
<!--        </div>-->
<!--        <div class="aiz-pagination aiz-pagination-center mt-4">-->
<!--            {{ $blogs->links() }}-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



<section class="container">
    
    
    
    @foreach($blogs as $blog)
    
    <div class="card mb-3" style="margin: 0px 21%;">
  <div class="row g-0">
    <div class="col-md-6">
        <a href="{{ url("blog").'/'. $blog->slug }}" class="text-reset d-block">
            <img
                src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                data-src="{{ uploaded_asset($blog->banner) }}"
                alt="{{ $blog->title }}"
                class="img-fluid lazyload "
            >
        </a>
      
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h2 class="card-title"> <a href="{{ url("blog").'/'. $blog->slug }}" class="card-title_style" > @if(strlen($blog->title) > 50 )
                                                                                                        {{ substr($blog->title, 0, 50) }}...
                                                                                                    @else
                                                                                                        {{ $blog->title }}
                                                                                                    @endif</a></h2>
        @if($blog->category != null)
            <div class="mb-2 opacity-50">
                <i  class="category_style">{{ $blog->category->category_name }}</i>
            </div>
        @endif
        <p class="card-text"> <a href="{{ url("blog").'/'. $blog->slug }}" class="card-text_style">
            @if(strlen($blog->short_description) > 100 )
                {!! substr($blog->short_description, 0, 100) !!}...
            @else
                {{ $blog->short_description }}
            @endif
          
        </a></p>
       
        <p class="card-footer">
         <div class="text-right">
            <a href="{{ url("blog").'/'. $blog->slug }}" class="btn btn-soft-primary">View More</a>
         </div>
        </p>
        
      </div>
      
    </div>
  </div>
</div>

 @endforeach
 </section>

<!--<section class="container">-->
<!--   <div class="card mb-3" style="max-width: 900px;">-->
<!--  <div class="row g-0">-->
<!--    <div class="col-md-6">-->
<!--        <a href="" class="text-reset d-block">-->
<!--      <img-->
<!--        src="https://chemical.mobbsr.in/public/uploads/all/LoZXU6resAKk0mziRhl7ZgTjMTifYkSnParXkCpn.jpg"-->
<!--        alt="Trendy Pants and Shoes"-->
<!--        class="img-fluid rounded-start"-->
<!--      />-->
<!--      </a>-->
<!--    </div>-->
<!--    <div class="col-md-6">-->
<!--      <div class="card-body">-->
<!--        <h2 class="card-title">Card title</h2>-->
<!--        <p class="card-text">-->
<!--          This is a wider card with supporting text below as a natural lead-in to-->
<!--          additional content. This content is a little bit longer.-->
<!--        </p>-->
<!--        <p class="card-text">-->
<!--         <a href="#"  class="btn btn-soft-primary">View More</a>-->
<!--        </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->


<!--  <div class="card mb-3" style="max-width: 900px;">-->
<!--  <div class="row g-0">-->
<!--    <div class="col-md-6">-->
<!--        <a href="" class="text-reset d-block">-->
<!--      <img-->
<!--        src="https://chemical.mobbsr.in/public/uploads/all/LoZXU6resAKk0mziRhl7ZgTjMTifYkSnParXkCpn.jpg"-->
<!--        alt="Trendy Pants and Shoes"-->
<!--        class="img-fluid rounded-start"-->
<!--      />-->
<!--      </a>-->
<!--    </div>-->
<!--    <div class="col-md-6">-->
<!--      <div class="card-body">-->
<!--        <h2 class="card-title">Card title</h2>-->
<!--        <p class="card-text">-->
<!--          This is a wider card with supporting text below as a natural lead-in to-->
<!--          additional content. This content is a little bit longer.-->
<!--        </p>-->
<!--        <p class="card-text">-->
<!--         <a href="#"  class="btn btn-soft-primary">View More</a>-->
<!--        </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->





<!--  <div class="card mb-3" style="max-width: 900px;">-->
<!--  <div class="row g-0">-->
<!--    <div class="col-md-6">-->
<!--        <a href="" class="text-reset d-block">-->
<!--      <img-->
<!--        src="https://chemical.mobbsr.in/public/uploads/all/LoZXU6resAKk0mziRhl7ZgTjMTifYkSnParXkCpn.jpg"-->
<!--        alt="Trendy Pants and Shoes"-->
<!--        class="img-fluid rounded-start"-->
<!--      />-->
<!--      </a>-->
<!--    </div>-->
<!--    <div class="col-md-6">-->
<!--      <div class="card-body">-->
<!--        <h2 class="card-title">Card title</h2>-->
<!--        <p class="card-text">-->
<!--          This is a wider card with supporting text below as a natural lead-in to-->
<!--          additional content. This content is a little bit longer.-->
<!--        </p>-->
<!--        <p class="card-text">-->
<!--         <a href="#"  class="btn btn-soft-primary">View More</a>-->
<!--        </p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
    <!--</section>-->







@endsection
