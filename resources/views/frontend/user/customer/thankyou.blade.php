@if(auth()->user() != null)


@extends('frontend.layouts.app')

@section('content')

    <div class="container mt-5" style="margin-bottom: 3rem;">
        <div class="col-12" style="text-align: -webkit-center;margin: 20px 0px;">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_snmbndsh.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;box-shadow: 6px 6px 15px 0px lightgrey;"  loop  autoplay></lottie-player>
        </div>
    </div>

@endsection
@else
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
   
</body>
</html>
@endif