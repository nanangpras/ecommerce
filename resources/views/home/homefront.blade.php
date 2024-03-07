@extends('home.layouts.layout-home')
@section('content')
<!-- SLIDER AREA START (slider-3) -->
{{-- <div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        @foreach ($banner as $item)
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3-normal ltn__slide-item-3 bg-image"
            data-bg="{{ $item->banner_image }}">
<div class="ltn__slide-item-inner text-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 align-self-center">
                <div class="slide-item-info">
                    <div class="slide-item-info-inner ltn__slide-animation">
                        <div class="slide-video mb-50 d-none">
                            <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                href="https://www.youtube.com/embed/tlThdr3O5Qo" data-rel="lightcase:myCollection">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                        <h6 class="slide-sub-title ltn__secondary-color animated text-uppercase">
                            <span><i class="fas fa-square-full"></i></span> Layanan Kami
                        </h6>
                        <h1 class="slide-title animated text-light">{{ $item->name }}</h1>
                        <div class="slide-brief animated">
                            <p class="text-light">{{ $item->description }}</p>
                        </div>
                        <div class="btn-wrapper animated">
                            <a href="#" class="theme-btn-2 btn btn-effect-2" style="border-radius :30px">Buat
                                Sekarang</a>
                            <a class="ltn__video-play-btn bg-white"
                                href="https://www.youtube.com/embed/HnbMYzdjuBs?autoplay=1&amp;showinfo=0"
                                data-rel="lightcase">
                                <i class="icon-play  ltn__secondary-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="slide-item-img">
                    <img src="{{url('themes-frontend/img/slider/21.png')}}" alt="#">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
<!--  -->
</div>
</div> --}}

{{-- <section class="store-carousel animate-fade-down animate-once animate-ease-linear">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div id="storeCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel"
                    data-bs-touch="true">
                    <ol class="carousel-indicators">
                        @foreach ($banner as $key => $item)
                        <li data-bs-target="#storeCarousel" data-bs-slide-to="{{ $key }}"
class="{{ $key == 0 ? 'active' : ' ' }}"></li>
@endforeach
</ol>
<a href="{{ $item->link }}" target="_blank">
    <div class="carousel-inner">
        @foreach ($banner as $key => $item)
        <div class="carousel-item {{ $key == 0 ? 'active' : ' ' }}">
            <img src="{{ $item->banner_image }}" alt="Carousel Image" class="d-block w-100"
                style="max-height: 400px; object-fit: cover" />
        </div>
        @endforeach
    </div>
</a>
<div class="d-none btn-carousel">
    <button class="carousel-control-prev" type="button" data-bs-target="#storeCarousel" data-bs-slide="prev">
        <i class="fas fa-arrow-left hover-webiin "></i>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#storeCarousel" data-bs-slide="next">
        <i class="fas fa-arrow-right hover-webiin"></i>
        <span class="sr-only">Next</span>
    </button>
</div>
</div>
</div>
</div>
</div>
</section> --}}
<!-- SLIDER AREA END -->

<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 relative md:mt-10 lg:mt-0">
    <div
        class="d-flex flex-column-reverse flex-md-row d-md-grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center text-center text-md-start">
        <div>
            <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight ">
                Bikin Website <span class="text-webiin">Cepat dan Murah</span></h1>
            <p class="mt-3 text-lg text-gray-800 text-center text-md-start">Solusi terbaik untuk dukung pertumbuhan dan
                <br> perluas jangkauan bisnis Anda
            </p>
            <div class="mt-7 grid gap-3 w-full d-flex d-md-inline-flex justify-content-center justify-content-md-start">
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold shadow-md rounded-lg border border-transparent bg-webiin text-white hover-webiin "
                    href="{{route("shop.index")}}">
                    Bikin Website Sekarang
                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6" /></svg>
                </a>
                <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-md hover:bg-gray-50 "
                    href="https://wa.me/{{ $company->phone ?? '' }}?text=Hi%20Webiin.com" target="_blank">
                    Konsultasi
                </a>
            </div>

            <!-- Pilihan Domain -->
            <div class="mt-6 lg:mt-10 pb-5 pb-lg-0 ">
                <h1 class="fs-5">Dengan pilihan domain</h1>
                <div class="flex justify-content-center justify-content-md-start">
                    <div class="mr-10">
                        <div class="mt-3">
                            <img src="{{url('/themes-frontend/img/others/id.svg')}}" class="h-[25px]" alt="COM Domain">
                        </div>
                    </div>
                    <div class="">
                        <div class="mt-3">
                            <img src="{{url('/themes-frontend/img/others/com.svg')}}" class="h-[25px]" alt="COM Domain">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative ms-4 ">
            <img class="w-full rounded-md" src="{{url ('/themes-frontend/img/bussiness.svg')}}" alt="Image Description">
            <div
                class="d-none absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6">
            </div>
            <div class="absolute bottom-0 start-0">
                <svg class="w-2/3 ms-auto h-auto text-white " width="630" height="451" viewBox="0 0 630 451" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                    <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                    <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                    <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                    <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                    <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                    <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                    <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                    <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                    <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                    <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                    <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                    <rect x="581" width="49" height="49" fill="currentColor" />
                    <rect x="581" width="49" height="64" fill="currentColor" />
                    <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                    <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                    <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                </svg>
            </div>
        </div>
    </div>
</div>
<!-- END HERO -->

<!-- FEATURE -->
<div class="py-2">
    <div class="xl:container-fluid m-auto px-6 text-gray-500 md:px-12 relative text-center text-md-start">
        <div
            class="grid divide-x divide-y divide-gray-200 overflow-hidden rounded-3xl border border-gray-100 sm:grid-cols-2 lg:grid-cols-4 lg:divide-y-0 xl:grid-cols-4 shadow-2xl">
            <div class="group relative bg-white transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10 ">
                <div class="relative space-y-8 py-12 p-8">
                    <img src="   https://cdn-icons-png.flaticon.com/512/7069/7069751.png " width="60" height="60" alt=""
                        title="" class="img-small m-auto m-md-0">

                    <div class="space-y-2">
                        <h5 class="text-xl font-medium text-gray-700  transition group-hover:text-primary">
                            Performa Stabil
                        </h5>
                        <p class="text-sm text-gray-600 ">
                            Website yang stabil dapat membantu meningkatkan efisiensi operasional dengan memberikan
                            akses informasi yang cepat.
                        </p>
                    </div>
                </div>
            </div>
            <div class="group relative bg-white transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                <div class="relative space-y-8 py-12 p-8">
                    <img src="   https://cdn-icons-png.flaticon.com/512/4961/4961639.png " width="60" height="60" alt=""
                        title="" class="img-small m-auto m-md-0">
                    <div class="space-y-2">
                        <h5 class="text-xl font-medium text-gray-700  transition group-hover:text-primary">
                            Mudah
                        </h5>
                        <p class="text-sm text-gray-600 ">
                            Memungkinkan Anda menyediakan informasi produk atau layanan dengan mudah diakses oleh
                            pengguna.
                        </p>
                    </div>
                </div>
            </div>
            <div class="group relative bg-white transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                <div class="relative space-y-8 py-12 p-8">
                    <img src="   https://cdn-icons-png.flaticon.com/512/6863/6863985.png " width="60" height="60" alt=""
                        title="" class="img-small m-auto m-md-0">
                    <div class="space-y-2">
                        <h5 class="text-xl font-medium text-gray-700  transition group-hover:text-primary">
                            UI Menarik
                        </h5>
                        <p class="text-sm text-gray-600 ">
                            Pengalaman yang menyenangkan dan mendorong interaksi pengunjung dengan tampilan menarik.
                        </p>
                    </div>
                </div>
            </div>
            <div class="group relative bg-white transition hover:z-[1] hover:shadow-2xl hover:shadow-gray-600/10">
                <div class="relative space-y-8 py-12 p-8 transition duration-300 group-hover:bg-white">
                    <img src="   https://cdn-icons-png.flaticon.com/512/1143/1143921.png " width="60" height="60" alt=""
                        title="" class="img-small m-auto m-md-0">
                    <div class="space-y-2">
                        <h5 class="text-xl font-medium text-gray-700  transition group-hover:text-primary">
                            Responsive
                        </h5>
                        <p class="text-sm text-gray-600 ">
                            Tampilan yang sudah mendukung di berbagai device desktop, tablet, dan mobile.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FEATURE -->


<!-- TEMPLATE START -->
<div class="ltn__team-area pt-20 pb-90--- bg-blue-50 lg:mt-[-135px] md:mt-[-260px] pb-5 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center lg:pt-[175px] md:pt-[300px]">
                    <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
                        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight ">Template Paling Populer</h2>
                    </div>
                    <div class="btn-wrapper">
                        <a href="{{ route('shop.index') }}" class="theme-btn-2 btn btn-effect-2">Semua Template</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($popular_product as $item)
            <div class="col-lg-3 col-md-6 col-sm-6 mb-lg-0 mb-2 ">
                <div class="ltn__team-item pb-5" style="border-radius: 10px">
                    <div class="team-img">
                        <a href="{{route('product.detail',$item->slug)}}">
                            <img src="{{$item->productImages->count() ? $item->productImages->first()->image : ''}}"
                                alt="#"
                                style="border-radius: 10px 10px 0 0; width: 100%;height: 225px; object-fit: cover ">
                        </a>
                    </div>
                    <div class="team-info m-0 p-0">
                        <div class="px-3">
                            <a href="{{route('product.detail',$item->slug)}}">
                                <h4 class="m-0 pt-2 text-start product-title-bold" style="display: block;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;">{{$item->title}}</h4>
                            </a>
                            <p class="text-start m-0">{{$item->category->name ?? ''}}</p>

                            <!-- Button Preview & Info -->
                            <div class="d-flex float-end align-items-center">
                                <a href="{{route('product.detail',$item->slug)}}" class="group flex relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="url(#customGradient)" class="w-8 h-8 svg-icon-product">
                                        <path fill-rule="evenodd"
                                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                            clip-rule="evenodd" />
                                        <defs>
                                            <linearGradient id="customGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" style="stop-color: #1488c9" />
                                                <stop offset="48%" style="stop-color: #5fa7d0" />
                                                <stop offset="100%" style="stop-color: #669bda" />
                                            </linearGradient>

                                            <linearGradient id="hoverGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                                <stop offset="0%" style="stop-color: #4797b0" />
                                                <stop offset="48%" style="stop-color: #4da9bd" />
                                                <stop offset="100%" style="stop-color: #4dbd92" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <span class="group-hover:opacity-100 transition-opacity bg-gray-800 p-2 text-sm text-gray-100 rounded-md absolute left-1/2 
                                     -translate-x-1/2 translate-y-full opacity-0 mx-auto">Detail</span>
                                </a>

                                @if ($item->link)
                                <div class="ms-2">
                                    <a href="{{$item->link}}" target="_blank" class="group flex relative">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="url(#customGradient)" class="w-8 h-8 svg-icon-product">
                                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            <path fill-rule="evenodd"
                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                clip-rule="evenodd" />
                                            <defs>
                                                <linearGradient id="customGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                                    <stop offset="0%" style="stop-color: #1488c9" />
                                                    <stop offset="48%" style="stop-color: #5fa7d0" />
                                                    <stop offset="100%" style="stop-color: #669bda" />
                                                </linearGradient>

                                                <linearGradient id="hoverGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                                    <stop offset="0%" style="stop-color: #4797b0" />
                                                    <stop offset="48%" style="stop-color: #4da9bd" />
                                                    <stop offset="100%" style="stop-color: #4dbd92" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                        <span class="group-hover:opacity-100 transition-opacity bg-gray-800 p-2 text-sm text-gray-100 rounded-md absolute left-1/2 
                                         -translate-x-1/2 translate-y-full opacity-0 mx-auto">Preview</span>
                                    </a>
                                </div>
                                @endif
                            </div>
                            <!-- END Button Preview & Info -->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- TEMPLATE END -->

<!-- PROMOTION -->
<section>
    <div class="relative items-center w-full py-24 mx-auto overflow-hidden container-fluid h-[500px]">
        <div class="grid items-start grid-cols-1 gap-12 md:grid-cols-2">
            <div>
                <div class="max-w-xl md:mt-[180px]">
                    <div>
                        <h1
                            class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight text-center text-sm-start pt-10 pt-sm-0">
                            <span class="text-webiin">100+</span> <br>Template Website</h1>
                    </div>
                </div>
                <div class="flex flex-col gap-3 mt-10 lg:flex-row lg:gap-6">
                    <a class="inline-flex items-center justify-center w-full px-4 py-2 text-sm font-semibold text-white rounded-full active:bg-tangaroa-800 active:text-tangaroa-300 bg-tangaroa-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-tangaroa-900 focus:outline-none group hover:bg-tangaroa-700 hover:text-tangaroa-100 lg:w-auto"
                        href="/overview">Explora all pages
                        <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            stroke-width="1.5" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg></a>
                </div>
            </div>
            <div class="d-flex justify-between">
                <div class="row w-[30%] pl-1 slick-arrow-1 slick-slider-smooth1">
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/1.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/2.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/3.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/4.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="row w-[30%] pl-1 slick-arrow-1 slick-slider-smooth2" data-direction="rtl">
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/5.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/6.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/7.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/1.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="row w-[30%] pl-1 slick-arrow-1 slick-slider-smooth1">
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/2.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/3.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/4.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                    <div class="">
                        <div class="pb-3">
                            <img alt="Lexingtøn thumbnail" class="object-cover"
                                src="{{url('/themes-frontend/img/others/5.jpeg')}}" decoding="async" height="500"
                                loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END PROMOTION -->



<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area section-bg-6 pt-30 pb-50">
    <div class="container-fluid">
        <div class="py-16">
            <div class="m-auto space-y-8 ">
                <div class="text-center justify-center gap-6 md:flex md:text-left lg:items-center lg:gap-16">
                    <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                        <h1 class="text-4xl font-bold md:text-5xl">
                            Percayakan bisnismu dengan Webiin
                        </h1>
                        <h1 class="text-4xl font-bold md:text-5xl">
                            <span class="text-primary text-webiin">Diskon 50%</span>
                        </h1>
                        <p class="text-lg">
                            Webiin hadir untuk mengatasi permasalahan bisnismu
                        </p>
                        <div class="flex justify-center flex-wrap gap-6">
                            <a href="{{route("home.about")}}"
                                class="relative flex h-12 w-full items-center justify-center px-8 before:absolute before:inset-0 before:rounded-xl before:border before:border-gray-200 before:bg-gray-50 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                                <span class="relative text-base font-semibold text-primary">Cara Order Website</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- FAQ -->
<div class="container-fluid mt-100 mb-50">
    <div class="section-title-area ltn__section-title-2 mb-20">
        <h1 class="section-title fs-1 text-center">Tanya Webiin</h1>
    </div>
    <div class="col-lg-6 align-self-center m-auto">
        <div class="about-us-info-wrap">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#c2"
                            aria-expanded="false" aria-controls="collapseOne">
                            Apakah saya membuat website sendiri di Webiin?
                        </button>
                    </h2>
                    <div id="c2" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Produk website yang Anda terima sudah dalam bentuk website. Anda
                            tinggal
                            edit dan upload materi.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">
                            Bagaimana pembayaran di website Webiin?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">Proses pembayaran melalui penyedia layanan pembayaran pihak
                            ketiga, yaitu <strong> Midtrans</strong>. Dengan tingkat keamanan transaksi yang
                            tinggi, pelanggan dapat berbelanja
                            dengan keyakinan penuh. Midtrans mendukung berbagai metode pembayaran, transfer
                            bank, dan opsi pembayaran digital lainnya. Selain itu juga memberikan
                            fleksibilitas kepada pelanggan. Proses pembayaran yang cepat dan efisien, pembaruan
                            status otomatis, serta layanan pelanggan yang responsif adalah bagian dari komitmen
                            kami untuk memberikan pengalaman berbelanja online yang lancar dan memuaskan melalui
                            Webiin.com.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c5" aria-expanded="false" aria-controls="c5">
                            Bisakah membatalkan pembelian website di Webiin?

                        </button>
                    </h2>
                    <div id="c5" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong> Webiin.com tidak menyediakan refund dana karena setiap domain dan
                                website yang dipesan akan otomatis teregister dengan sistem domain dan server
                                kami</strong>.
                            Jadi kalian harus memastikan nama domain dan data yang dipesan benar-benar sesuai
                            yah!
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="hc6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#c6" aria-expanded="false" aria-controls="c5">
                            Semudah itu membuat Website di Webiin?

                        </button>
                    </h2>
                    <div id="c6" class="accordion-collapse collapse" aria-labelledby="hc6"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Ya, kami menyediakan template yang mempermudah anda</strong>. Hanya tinggal
                            memilih di Webbin.com kami akan
                            memberikan solusi lengkap
                            dengan menyediakan layanan template yang sudah
                            termasuk dalam paket kami. Dengan fokus pada kenyamanan dan efisiensi, kami
                            menghadirkan berbagai pilihan desain template yang siap pakai untuk memenuhi
                            kebutuhan berbagai jenis situs web. Pelanggan Webbin.com dapat dengan mudah memilih
                            template yang sesuai dengan visi dan gaya mereka, mempercepat proses pembangunan
                            situs tanpa harus memikirkan desain dari awal.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END FAQ -->



<!-- TESTIMONIAL AREA START (testimonial-8) -->
<div class="ltn__testimonial-area section-bg-1--- pt-100 pb-50 bg-blue-50">
    <div class="section-title-area ltn__section-title-2 text-center">
        <h1 class="section-title fs-1">Testimonial</h1>
    </div>
    <div class="ltn__testimonial-slider-6-active slick-arrow-1 slick-slider-smooth">
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                <div class="ltn__testimoni-info">
                    <div class="ltn__testimoni-author-ratting">
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="https://pentolkoe.com/wp-content/uploads/2024/02/Untitled-design.png"
                                    alt="Logo Testimonial">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Pentolkoe</h5>
                                <label>
                                    <a href="https://pentolkoe.com">
                                        Pentolkoe.com
                                    </a>
                                </label>
                            </div>
                        </div>
                        <div class="ltn__testimoni-rating">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-sm-start">
                        Pelayanan cepat, admin ramah, langsung diberikan kosultasi ketika akan membuat website
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                <div class="ltn__testimoni-info">
                    <div class="ltn__testimoni-author-ratting">
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="{{url('/themes-frontend/img/kelasya.svg')}}" alt="Logo Testimonial">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Kelasya</h5>
                                <a href="https://edu.webiin.com">
                                    Kelasya.com
                                </a>
                            </div>
                        </div>
                        <div class="ltn__testimoni-rating">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-sm-start">
                        Harganya murah, pelayanan bagus dan ramah, mudah, dan dapat konsultasi gratis. Pokoknya
                        tidak menyesal pesan di Webiin.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                <div class="ltn__testimoni-info">
                    <div class="ltn__testimoni-author-ratting">
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="https://desapandai.id/wp-content/uploads/2023/12/Pink-Macaroni-Fashion-Brand-Art-Design-Logo-9-e1703601457318.png"
                                    alt="Logo Testimonial">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Desa Pandai</h5>
                                <label>
                                    <a href="https://desapandai.id">
                                        Desapandai.id
                                    </a>
                                </label>
                            </div>
                        </div>
                        <div class="ltn__testimoni-rating">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>
                        Harga murah, pelayanan bagus, dan semoga berkah. Bikin website mumpung diskon 50%.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 col-12">
            <div class="ltn__testimonial-item ltn__testimonial-item-7 ltn__testimonial-item-8">
                <div class="ltn__testimoni-info">
                    <div class="ltn__testimoni-author-ratting">
                        <div class="ltn__testimoni-info-inner">
                            <div class="ltn__testimoni-img">
                                <img src="https://diengroom.com/wp-content/uploads/elementor/thumbs/Hijau-Kuning-Emas-Profesional-Kartu-Nama-Bisnis-1-e1704153026720-qhoy0yjzllkr2zu2lkqytvqgt7t0g4bebrvgg03gxm.png"
                                    alt="Logo Testimonial">
                            </div>
                            <div class="ltn__testimoni-name-designation">
                                <h5>Dieng Room</h5>
                                <label>Diengroom.com</label>
                            </div>
                        </div>
                        <div class="ltn__testimoni-rating">
                            <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>
                        Website bagus, banyak templatenya yang bisa dipilih. Harga termasuk murah karena sudah paket
                        lengkap.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TESTIMONIAL AREA END -->

<!-- BLOG AREA START -->
<div class="ltn__blog-area mt-100 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title fs-1">Blog</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            @foreach ($article as $item)
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="{{ route('blog.detail', $item->slug) }}"><img src="{{ $item->thumbnail }}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-tags">
                                    <a href="javascript:void(0);" class="text-hover-webiin"><i
                                            class="fas fa-tags text-webiin"></i>{{ $item->category->name }}</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title text-hover-webiin" style="display: block;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;"><a href="{{ route('blog.detail', $item->slug) }}">{{ $item->titles
                                }}</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date text-webiin"><i class="far fa-calendar-alt"></i>{{ $item->created_at
                                        }}</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn text-webiin">
                                <a href="{{ route('blog.detail', $item->slug) }}">Selebihnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- BLOG AREA END -->


<!-- PROMOTION -->
<div class="promotion pt-2">
    <div class="container-fluid ">
        <div class="bg-webiin m-auto px-6 text-center md:px-12 lg:px-20 py-16 rounded-xl">
            <h2 class="mb-8 text-4xl font-bold text-white md:text-4xl">
                Inilah Momen Untuk Tingkatkan Bisnismu!
            </h2>
            <a href="{{route("shop.index")}}"
                class="relative flex h-12 w-full mx-auto items-center justify-center px-8 before:absolute before:inset-0 before:rounded-xl before:bg-white before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                <span class="relative text-base font-semibold text-webiin">Buat Website Sekarang</span>
            </a>
        </div>
    </div>
</div>
<!-- END PROMOTION -->

<!-- render the button and direct it to wa.me -->
<a href="https://wa.me/{{ $company->phone ?? '' }}?text=Hi%20Webiin.com" target="_blank" class="floating-wa">
    <i class="fab fa-whatsapp fab-icon"></i>
</a>

@if (session('success'))
<!-- Modal -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="clear" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-info">
                                        <h5>Peringatan</h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i>
                                            {{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@push('after-scripts')
<script>
    $(document).ready(function () {
        @if(session('success'))
        $('#clear').modal('show');
        @endif
    });

    $('.slick-slider-smooth').slick({
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1,
        speed: 9000,
        cssEase: 'linear',
        responsive: [{
                breakpoint: 4000,
                settings: {
                    slidesToShow: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    infinite: true,

                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    infinite: true,

                }
            }
        ]
    });
    $('.slick-slider-smooth1').slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1,
        speed: 15000,
        cssEase: 'linear',
        waitForAnimate: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        vertical: true
    });
    $('.slick-slider-smooth2').slick({
        slidesToShow: 3,
        infinite: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1,
        speed: 15000,
        cssEase: 'linear',
        waitForAnimate: false,
        pauseOnFocus: false,
        pauseOnHover: false,
        vertical: true,
    });

</script>
@endpush
