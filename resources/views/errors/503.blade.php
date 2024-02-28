{{-- @extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('Service Unavailable')) --}}

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Oops Error!</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('home.includes.style')
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">


    <div class="ltn__404-area ltn__404-area-1 d-flex align-items-center" style="height: 100vh">
        <div class="container align-middle">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-404-inner text-center">
                        <div class="error-img mb-30">
                            <img src="{{url('themes-frontend/img/others/error-2.png')}}" alt="Image Error">
                        </div>
                        <h1 class="error-404-title d-none">419</h1>
                        <h2>Page Not Found!</h2>
                        <!-- <h3>Oops! Looks like something going rong</h3> -->
                        <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <div class="btn-wrapper">
                            <a href="{{ url()->previous() }}" class="theme-btn-2 btn btn-effect-2"><i class="fas fa-long-arrow-alt-left"></i> Kembali ke Sebelumnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</div>
<!-- Body main wrapper end -->

   @include('home.includes.scripts')
   @stack('after-scripts')
</body>
</html>

