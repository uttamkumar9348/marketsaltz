@extends('frontend.layouts.app')

@section('meta_title'){{ $blog->meta_title }}@stop

@section('meta_description'){{ $blog->meta_description }}@stop

@section('meta_keywords'){{ $blog->meta_keywords }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $blog->meta_title }}">
    <meta itemprop="description" content="{{ $blog->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($blog->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $blog->meta_title }}">
    <meta name="twitter:description" content="{{ $blog->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($blog->meta_img) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $blog->meta_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('blog.details', $blog->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($blog->meta_img) }}" />
    <meta property="og:description" content="{{ $blog->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
@endsection

@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
.pd-20{
    padding: 20px;
}
.blog_header {
    font-size: 3rem;
    padding: 20px;
    font-weight: bolder;
}
.boxx{
     margin-left: 376px;
     margin-top: 60px;
     width: max-content;
}
.li_gap {
    padding-left: 10px;
}
li i:hover{
    /*background-color: #4464a3;*/
    color: #4464a3;
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
</style>








<section>
<!--    <div class="boxx">-->
<!--    <div class="card">-->
        
<!--         <h1 class="card-title">Card title</h1>-->
<!--  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">-->
<!--    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>-->
<!--    <a href="#!">-->
<!--      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>-->
<!--    </a>-->
<!--  </div>-->
<!--  <div class="card-body">-->
   
<!--    <p class="card-text" style=" text-align: justify; text-align: start;">Your mental health is just as important as your physical health. Here are 10 tips to help improve your mental health:1. Get regular exercise. Exercise releases endorphins, which have mood-boosting effects.</p>-->
    
<!--  </div>-->
<!--</div>-->
<!--</div>-->










<div class="boxx">
    
    <!--<h3><b>Post</b></h3>-->
<div class="card" style="width: 49rem;">
    
    <div class="blog_title">
        <h2 class="blog_header">{{ $blog->title }}</h2> 
    </div>
        @if($blog->category != null)
        <div class="mb-2 opacity-50" style="margin-left: 20px;">
            <i>{{ $blog->category->category_name }}</i>
        </div>
        @endif
  <div class="card-body">
     <img 
        src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
        data-src="{{ uploaded_asset($blog->banner) }}"
        class="img-fluid lazyload w-100"  
        alt="{{ $blog->title }}"/>
     <br><br>
     <div class="card-text">
        <p>{!! $blog->description !!}</p>
     </div>
  </div>
  
  
  
  
  
  
  <!--<div class="card-body">-->
  <!--    <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="Sunset Over the Sea"/>-->
  <!--    <br><br>-->
  <!--  <p class="card-text" style="font-size: large;">Your mental health is just as important as your physical health. Here are 10 tips to help improve your mental health:1. Get regular exercise. Exercise releases endorphins, which have mood-boosting effects.</p>-->
  <!--</div>-->
  <div class="pd-20">
       <hr>
        <ul style="display:flex;">
            <li><i class="fa fa-facebook-f li_gap"  style="font-size:20px;"></i></li>
            <li><i class="fa fa-twitter li_gap" style="font-size:20px;"></i></li>
            <li><i class="fa fa-linkedin-square li_gap" style="font-size:20px;"></i></li>
        </ul> 
    <hr>
  </div>
   
    
  </div>
 
</div>

</section>

<section  style="margin-left:400px">
    <div class="row row-cols-1 col-md-8 ">
        <h4>Recent Post</h4>
           @foreach($all_blogs as $key=>$blogs)
            <div class="col-4">
                <div class="card">
                    <a href="{{ url("blog").'/'. $blogs->slug }}" >
                      <img 
                        src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                        data-src="{{ uploaded_asset($blogs->banner) }}"
                        class="img-fluid lazyload w-100" style="height:207px"
                        alt="{{ $blogs->title }}"/>
                    </a>
                    <div class="card-body">
                        <h4 class="card-title"> <a href="{{ url("blog").'/'. $blogs->slug }}" class="card-title_style" >
                            @if(strlen($blogs->title) > 50 )
                                {{ substr($blogs->title, 0, 50) }}...
                            @else
                               {{ $blogs->title }}
                            @endif
                            </a></h4>
                    </div>
              
                    @if($blog->category != null)
                    <div class="mb-2 opacity-50" style="margin-left: 20px;">
                        <i>{{ $blogs->category->category_name }}</i>
                    </div>
                    @endif
                </div>
            </div>
          
            @endforeach
                <!--  <div class="col-4">-->
                <!--    <div class="card">-->
                <!--      <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/042.webp" class="card-img-top" alt="Palm Springs Road"/>-->
                <!--      <div class="card-body">-->
                <!--        <h4 class="card-title">Title</h4>-->
                       
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->
                <!--  <div class="col-4">-->
                <!--    <div class="card">-->
                <!--      <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/043.webp" class="card-img-top" alt="Los Angeles Skyscrapers"/>-->
                <!--      <div class="card-body">-->
                <!--        <h4 class="card-title"> Title</h4>-->
                        
                <!--      </div>-->
                <!--    </div>-->
                <!--  </div>-->

    </div>
</section>



@endsection


@section('script')
    @if (get_setting('facebook_comment') == 1)
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v9.0&appId={{ env('FACEBOOK_APP_ID') }}&autoLogAppEvents=1" nonce="ji6tXwgZ"></script>
    @endif
@endsection