@extends('home.layouts.layout-pages')
@section('content')
<!-- PRODUCT DETAILS AREA START -->

<div class="ltn__product-area ltn__product-gutter">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 order-lg-2 mb-100">
                <div class="ltn__shop-options">
                    <ul>
                        <li>
                            {{-- <div class="ltn__grid-list-tab-menu ">
                                <div class="nav">
                                    <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i
                                            class="fas fa-th-large"></i></a>
                                    <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                </div>
                            </div> --}}
                        </li>
                        {{-- <li>
                            <div class="short-by text-center">
                                <select class="nice-select">
                                    <option>Default sorting</option>
                                    <option>Sort by popularity</option>
                                    <option>Sort by new arrivals</option>
                                    <option>Sort by price: low to high</option>
                                    <option>Sort by price: high to low</option>
                                </select>
                            </div>
                        </li> --}}
                        <li>
                            <div class="showing-product-number text-right">
                                <span>Showing {{$product->currentPage()}} of {{$product->total()}} results</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="liton_product_grid">
                        <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                            <div class="row">
                                @foreach ($product as $item)
                                <!-- ltn__product-item -->
                                <div class="col-xl-4 col-sm-6 col-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center pb-5" >
                                        <div class="product-img">
                                            <a href="{{route('product.detail',$item->slug)}}"><img
                                                    style="width: 100%; height:200px; object-fit:cover; "
                                                    src="{{$item->productImages->count() ? $item->productImages->first()->image : ''}}"
                                                    alt="#"></a>
                                        </div>
                                        <div class="product-info p-0 m-2">
                                            <div class="product-ratting">
                                            </div>
                                            <div>
                                                <div class="d-block justify-content-sm-between ">
                                                    <div class="px-2">
                                                        <h2 class="product-title product-title-bold text-start" 
                                                        style="display: block;
                                                        white-space: nowrap;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis; ">
                                                        <a
                                                                href="{{route('product.detail',$item->slug)}}">{{$item->title}}</a>
                                                        </h2>
                                                        <p class="text-start m-0">
                                                            {{$item->category->name ?? ''}}
                                                        </p>
                                                    </div>
                                                    @if ($item->link)
                                                    <div class="float-end pt-1" >                                                        
                                                        <a href="{{$item->link}}" target="_blank" class="btn-product">
                                                            Demo
                                                        </a>
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ltn__product-item -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="liton_product_list">
                        <div class="ltn__product-tab-content-inner ltn__product-list-view">
                            <div class="row">
                                <!-- ltn__product-item -->
                                @foreach ($product as $item)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3">
                                        <div class="product-img" style="border-radius: 10px 0 0 10px !important">
                                            <a href="{{route('product.detail',$item->slug)}}">
                                                <img src="{{$item->productImages->count() ? $item->productImages->first()->image : ''}}"
                                                    alt="#">
                                                {{-- <div class="product-badge">
                                                    <ul>
                                                        <li class="sale-badge">New</li>
                                                    </ul>
                                                </div> --}}
                                            </a>
                                        </div>
                                        <div class="d-block d-md-flex d-xl-flex d-xxl-flex align-items-center">
                                            <div class="product-info px-3 pt-2">
                                                <h2 class="product-title product-title-bold"><a
                                                        href="{route('product.detail',$item->slug)}}">{{$item->title}}</a>
                                                </h2>
                                                {{-- <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div> --}}
                                                {{-- <div class="product-price">
                                                    <span>Rp {{$item->price}}</span>
                                                    <del>Rp {{$item->price}}</del>
                                                </div> --}}
                                                <div class="product-brief">
                                                    <p>{{$item->category->name ?? ''}}</p>
                                                </div>
                                            </div>
                                            @if ($item->link)
                                            <div class="ms-auto pe-5 ps-3 ps-md-0 pb-2 pb-md-0">
                                                <a href="{{$item->link}}" target="_blank" class=" btn-product">
                                                    Demo
                                                </a>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{ $product->links('vendor.pagination.default') }}

            </div>
            @include('home.includes.shop-product-category')
            {{-- <div class="col-lg-4  mb-100">
                <aside class="sidebar ltn__shop-sidebar">
                    <!-- Category Widget -->
                    <div class="widget ltn__menu-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Product categories</h4>
                        <ul>
                            @foreach ($category as $item)
                            <li><a href="#">{{$item->name}} <span><i
                    class="fas fa-long-arrow-alt-right"></i></span></a>
            </li>
            @endforeach
            </ul>
        </div>
        <!-- Search Widget -->
        <div class="widget ltn__search-widget">
            <h4 class="ltn__widget-title ltn__widget-title-border">Search Objects</h4>
            <form action="#">
                <input type="text" name="search" placeholder="Search your keyword...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>

        </aside>
    </div> --}}
</div>
</div>
</div>
<!-- PRODUCT DETAILS AREA END -->
@endsection
