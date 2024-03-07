@extends('home.layouts.layout-pages')
@section('content')
<!-- PRODUCT DETAILS AREA START -->

@include("home.includes.shop-product-category-mobile")


<div class="ltn__product-area ltn__product-gutter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 order-lg-2 mb-100">
                <div class="ltn__shop-options" style="border-radius: 15px">
                    <div class="showing-product-number text-center text-lg-end">
                        <span>Showing {{$product->currentPage()}} of {{$product->total()}} results</span>
                    </div>
                </div>
                <div class="col-lg-12 mb-4" style="text-align: center">
                    @foreach ($product as $item)
                    @if (count($item->children) > 0)
                    @foreach ($item->children as $subcategory)
                    @endforeach
                    @endif
                    @endforeach
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @foreach ($product as $item)
                                @if (count($item->product) > 0)
                                @foreach ($item->product as $product)
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center pb-5">
                                        <div class="product-img">
                                            <a href="{{route('product.detail',$product->slug)}}"><img
                                                    style="width: 100%; height:200px; object-fit:cover; "
                                                    src="{{$product->productImages->count() ? $product->productImages->first()->image : ''}}"
                                                    alt="#"></a>
                                        </div>
                                        <div class="product-info pt-2">
                                            <div class="product-ratting">
                                            </div>
                                            <div>
                                                <div class="d-block justify-content-sm-between justify-content-center">
                                                    <div class="px-2">
                                                        <h2 class="product-title product-title-bold text-start" style="display: block;
                                                                white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis; ">
                                                            <a
                                                                href="{{route('product.detail',$product->slug)}}">{{$product->title}}</a>
                                                        </h2>
                                                        <p class="text-start m-0">
                                                            {{$product->category->name ?? ''}}
                                                        </p>
                                                    </div>
                                                    <!-- Button Preview & Info -->
                                                    <div class="d-flex float-end align-items-center">
                                                        <a href="{{route('product.detail',$product->slug)}}"
                                                            class="group flex relative">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="url(#customGradient)"
                                                                class="w-8 h-8 svg-icon-product">
                                                                <path fill-rule="evenodd"
                                                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                                                    clip-rule="evenodd" />
                                                                <defs>
                                                                    <linearGradient id="customGradient" x1="0%" y1="0%"
                                                                        x2="100%" y2="0%">
                                                                        <stop offset="0%" style="stop-color: #1488c9" />
                                                                        <stop offset="48%"
                                                                            style="stop-color: #5fa7d0" />
                                                                        <stop offset="100%"
                                                                            style="stop-color: #669bda" />
                                                                    </linearGradient>

                                                                    <linearGradient id="hoverGradient" x1="0%" y1="0%"
                                                                        x2="100%" y2="0%">
                                                                        <stop offset="0%" style="stop-color: #4797b0" />
                                                                        <stop offset="48%"
                                                                            style="stop-color: #4da9bd" />
                                                                        <stop offset="100%"
                                                                            style="stop-color: #4dbd92" />
                                                                    </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <span
                                                                class="group-hover:opacity-100 transition-opacity bg-gray-800 p-2 text-sm text-gray-100 rounded-md absolute left-1/2 
                                                                -translate-x-1/2 translate-y-full opacity-0 mx-auto">Detail</span>
                                                        </a>

                                                        @if ($product->link)
                                                        <div class="ms-2">
                                                            <a href="{{$product->link}}" target="_blank"
                                                                class="group flex relative">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" fill="url(#customGradient)"
                                                                    class="w-8 h-8 svg-icon-product">
                                                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                                        clip-rule="evenodd" />
                                                                    <defs>
                                                                        <linearGradient id="customGradient" x1="0%"
                                                                            y1="0%" x2="100%" y2="0%">
                                                                            <stop offset="0%"
                                                                                style="stop-color: #1488c9" />
                                                                            <stop offset="48%"
                                                                                style="stop-color: #5fa7d0" />
                                                                            <stop offset="100%"
                                                                                style="stop-color: #669bda" />
                                                                        </linearGradient>

                                                                        <linearGradient id="hoverGradient" x1="0%"
                                                                            y1="0%" x2="100%" y2="0%">
                                                                            <stop offset="0%"
                                                                                style="stop-color: #4797b0" />
                                                                            <stop offset="48%"
                                                                                style="stop-color: #4da9bd" />
                                                                            <stop offset="100%"
                                                                                style="stop-color: #4dbd92" />
                                                                        </linearGradient>
                                                                    </defs>
                                                                </svg>
                                                                <span
                                                                    class="group-hover:opacity-100 transition-opacity bg-gray-800 p-2 text-sm text-gray-100 rounded-md absolute left-1/2 
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
                                </div>
                                @endforeach
                                @endif
                                @if (count($item->productsub) > 0)
                                @foreach ($item->productsub as $subproduct)
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center pb-5">
                                        <div class="product-img">
                                            <a href="{{route('product.detail',$subproduct->slug)}}"><img
                                                    style="width: 100%; height:200px; object-fit:cover; "
                                                    src="{{$subproduct->productImages->count() ? $subproduct->productImages->first()->image : ''}}"
                                                    alt="#"></a>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-ratting">
                                            </div>
                                            <div>
                                                <div class="d-block justify-content-sm-between justify-content-center">
                                                    <div class="px-2">
                                                        <h2 class="product-title product-title-bold text-start" style="display: block;
                                                                white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis; "><a
                                                                href="{{route('product.detail',$subproduct->slug)}}">{{$subproduct->title}}</a>
                                                        </h2>
                                                        <p class="text-start m-0">
                                                            {{$subproduct->category->name ?? ''}}
                                                        </p>
                                                    </div>
                                                    <!-- Button Preview & Info -->
                                                    <div class="d-flex float-end align-items-center">
                                                        <a href="{{route('product.detail',$subproduct->slug)}}"
                                                            class="group flex relative">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="url(#customGradient)"
                                                                class="w-8 h-8 svg-icon-product">
                                                                <path fill-rule="evenodd"
                                                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm8.706-1.442c1.146-.573 2.437.463 2.126 1.706l-.709 2.836.042-.02a.75.75 0 0 1 .67 1.34l-.04.022c-1.147.573-2.438-.463-2.127-1.706l.71-2.836-.042.02a.75.75 0 1 1-.671-1.34l.041-.022ZM12 9a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z"
                                                                    clip-rule="evenodd" />
                                                                <defs>
                                                                    <linearGradient id="customGradient" x1="0%" y1="0%"
                                                                        x2="100%" y2="0%">
                                                                        <stop offset="0%" style="stop-color: #1488c9" />
                                                                        <stop offset="48%"
                                                                            style="stop-color: #5fa7d0" />
                                                                        <stop offset="100%"
                                                                            style="stop-color: #669bda" />
                                                                    </linearGradient>

                                                                    <linearGradient id="hoverGradient" x1="0%" y1="0%"
                                                                        x2="100%" y2="0%">
                                                                        <stop offset="0%" style="stop-color: #4797b0" />
                                                                        <stop offset="48%"
                                                                            style="stop-color: #4da9bd" />
                                                                        <stop offset="100%"
                                                                            style="stop-color: #4dbd92" />
                                                                    </linearGradient>
                                                                </defs>
                                                            </svg>
                                                            <span
                                                                class="group-hover:opacity-100 transition-opacity bg-gray-800 p-2 text-sm text-gray-100 rounded-md absolute left-1/2 
                                                                -translate-x-1/2 translate-y-full opacity-0 mx-auto">Detail</span>
                                                        </a>

                                                        @if ($subproduct->link)
                                                        <div class="ms-2">
                                                            <a href="{{$subproduct->link}}" target="_blank"
                                                                class="group flex relative">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" fill="url(#customGradient)"
                                                                    class="w-8 h-8 svg-icon-product">
                                                                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z"
                                                                        clip-rule="evenodd" />
                                                                    <defs>
                                                                        <linearGradient id="customGradient" x1="0%"
                                                                            y1="0%" x2="100%" y2="0%">
                                                                            <stop offset="0%"
                                                                                style="stop-color: #1488c9" />
                                                                            <stop offset="48%"
                                                                                style="stop-color: #5fa7d0" />
                                                                            <stop offset="100%"
                                                                                style="stop-color: #669bda" />
                                                                        </linearGradient>

                                                                        <linearGradient id="hoverGradient" x1="0%"
                                                                            y1="0%" x2="100%" y2="0%">
                                                                            <stop offset="0%"
                                                                                style="stop-color: #4797b0" />
                                                                            <stop offset="48%"
                                                                                style="stop-color: #4da9bd" />
                                                                            <stop offset="100%"
                                                                                style="stop-color: #4dbd92" />
                                                                        </linearGradient>
                                                                    </defs>
                                                                </svg>
                                                                <span
                                                                    class="group-hover:opacity-100 transition-opacity bg-gray-800 p-2 text-sm text-gray-100 rounded-md absolute left-1/2 
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
                                </div>
                                @endforeach
                                @endif
                                <!-- ltn__product-item -->
                                <!-- ltn__product-item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('home.includes.shop-product-category')

        </div>
    </div>
</div>
<!-- PRODUCT DETAILS AREA END -->
@endsection
