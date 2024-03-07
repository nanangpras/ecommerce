@extends('home.layouts.layout-pages')
@section('content')
<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-85">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="ltn__shop-details-inner">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                    @foreach ($detail->productImages as $item)
                                    <div class="single-large-img">
                                        <a href="{{$item->image}}" data-rel="lightcase:myCollection">
                                            <img src="{{$item->image}}" alt="Image"
                                                style="height: 400px; object-fit:cover; width:470px;">
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    @foreach ($detail->productImages as $item)
                                    <div class="single-small-img">
                                        <img src="{{$item->image}}" alt="Image"
                                            style="height: 100px; object-fit:cover; width:100px; border-radius:10px;  ">
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="modal-product-info shop-details-info pl-0">
                                <h3 style="white-space: normal; word-break: break-all;" class="product-title-bold">
                                    {{$detail->title}}</h3>
                                <div class="product-price">
                                    <span>@currency($detail->price)</span>
                                    <br>
                                    @if ($detail->price_coret)
                                    <del
                                        style="color:rgb(62, 61, 61); font-size:14px">@currency($detail->price_coret)</del>
                                    @endif
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1">
                                    <strong class="p-0 m-0">Rating</strong>
                                    <ul>
                                        <li>
                                            <div class="product-ratting">
                                                <ul class="m-0 p-0">
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <strong class="p-0 ">Deskripsi Singkat</strong>
                                    <div>
                                        <p>{!!$detail->short_description!!}</p>
                                    </div>
                                </div>
                                <div class="d-block d-md-none">
                                    <div class="d-lg-flex d-block align-items-center pt-2">
                                        <strong class="me-3">Kategori</strong>
                                        <span>
                                            {{$detail->category->name}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-none d-md-block">
                            <div class="modal-product-info shop-details-info mt-5 mt-md-0 px-3 py-2"
                                style="border: 2px solid; border-radius:10px; border-color:rgb(209, 209, 209)">
                                <div class="modal-product-meta ltn__product-details-menu-1 py-4">
                                    <div class="d-lg-flex d-block align-items-center">
                                        <strong class="me-3">Kategori</strong>
                                        <span>
                                            {{$detail->category->name}}
                                        </span>
                                    </div>
                                </div>
                                <div class="ltn__product-details-menu-2">
                                    <form action="{{route('add.to.cart')}}" id="form-add-cart" method="POST">
                                        <div
                                            class="d-inline rounded-[10px] px-2 py-2 border-2 border-solid border-[#D1D1D1]">
                                            <button type="button" onclick="updateQuantity(-1)">
                                                <p class="text-lg font-bold">-</p>
                                            </button>
                                            <input type="text" id="qty" value="1" name="qty" class="cart-plus-minus-box"
                                                onchange="updateSubtotal()">
                                            <button type="button" onclick="updateQuantity(1)">
                                                <p class="text-lg font-bold">+</p>
                                            </button>
                                        </div>

                                        <div class="d-lg-flex d-block align-items-center py-4">
                                            <strong class="me-3">Subtotal</strong>
                                            <p class="font-bold text-lg" id="subtotal">
                                                @currency($detail->price)
                                            </p>
                                        </div>

                                        @csrf
                                        <input type="hidden" id="idproduct" name="id" value="{{ $detail->id }}"
                                            class="form-control">
                                        <input type="hidden" id="weight" name="weight" value="{{ $detail->weight }}"
                                            class="form-control">
                                        <button type="submit" class="btn d-block w-100 theme-btn-7 btn-effect-2 mr-0"
                                            id="update_cart">Masukkan Keranjang</button>
                                        @if ($detail->link)
                                        <a href="{{$item->link}}" target="_blank"
                                            class="theme-btn-2 btn d-block btn-effect-2 mt-3 mb-4">
                                            Live Preview
                                        </a>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab Start -->
                <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show text-webiin" data-bs-toggle="tab"
                                href="#liton_tab_details_1_1">Description</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2 product-title-bold"
                                    style="white-space: normal; word-break: break-all;">{{$detail->title}}</h4>
                                {{-- <p>{{$detail->description}}</p> --}}
                                <p>{!!$detail->description!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab End -->
            </div>
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle ltn__secondary-color text-webiin">Kategori : {{$detail->category->name}}
                    </h6>
                    <h1 class="section-title fs-1">Template Terkait</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach ($relateProduct as $item)
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="{{route('product.detail',$item->slug)}}"><img
                                src="{{$item->productImages->first()->image ?? ''}}" alt="#"
                                style="height: 200px; width:100%;  object-fit:cover; "></a>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" id="btn_quick_view" data-slug="{{$item->slug}}"
                                        data-bs-toggle="modal" data-bs-target="#quick_view_modal_1">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title product-title-bold" style="display: block;
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;"><a
                                href="{{route('product.detail',$item->slug)}}">{{$item->title}}</a>
                        </h2>
                        <div class="product-price ">
                            <p class="text-webiin"
                                style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
                                @currency($item->price)</p>
                            @if ($item->price_coret)
                            <del style="color:rgb(62, 61, 61); font-size:14px">@currency($item->price_coret)</del>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="content-add-cart"></div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area" id="modalQuickView">
    <div class="modal fade" id="quick_view_modal_1" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="content_modal_view">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- Cart on Mobile -->
<div
    class="sticky right-0 left-0 bottom-0 bg-white mb-5 py-3 border-t-2 border-solid border-[#D1D1D1] d-block d-md-none">
    <div class="ltn__product-details-menu-2">

        <form action="{{route('add.to.cart')}}" id="form-add-cart" method="POST">
            <div class="d-flex justify-center items-center text-center mb-3">
                <div class="col px-0">
                    <div class="d-inline rounded-[10px] px-2 py-2 border-2 border-solid border-[#D1D1D1]">
                        <button type="button" onclick="updateQuantity(-1)">
                            <p class="text-lg font-bold">-</p>
                        </button>
                        <input type="text" id="qty2" value="1" name="qty" class="cart-plus-minus-box"
                            onchange="updateSubtotal()">
                        <button type="button" onclick="updateQuantity(1)">
                            <p class="text-lg font-bold">+</p>
                        </button>
                    </div>
                </div>
                <div class="col px-0">
                    <div class="d-lg-flex d-block align-items-center">
                        <strong class="me-3">Subtotal</strong>
                        <p class="font-bold text-lg" id="subtotal2">
                            @currency($detail->price)
                        </p>
                    </div>
                </div>
            </div>

            <div class="d-flex align-items-center px-2 justify-center">

                <div class="col-8 px-0 me-2">
                    @csrf
                    <input type="hidden" id="idproduct" name="id" value="{{ $detail->id }}" class="form-control">
                    <input type="hidden" id="weight" name="weight" value="{{ $detail->weight }}" class="form-control">
                    <button type="submit" class="btn d-block w-100 theme-btn-7 btn-effect-2" id="update_cart">Masukkan
                        Keranjang</button>
                </div>
                <div class="col-4 px-0">
                    @if ($detail->link)
                    <a href="{{$item->link}}" target="_blank" class="theme-btn-2 btn d-block btn-effect-2">
                        Preview
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>

<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@push('after-style')
<style>
    #scrollUp {
        display: none !important;
    }

</style>
@endpush

@push('after-scripts')
<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function () {
        var id = $("#idproduct").val();
        var weight = $("#weight").val();
        var qty = $("#qty").val();
        $("#add-to-cart").click(function (e) {
            e.preventDefault();
            $.ajax({
                method: "POST",
                url: "{{route('add.to.cart')}}",
                data: {
                    _token: CSRF_TOKEN,
                    qty: qty,
                    id: id,
                    weight: weight,
                },
                success: function (response) {
                    // console.log(response);
                    $("#content-add-cart").html(response);
                }
            });
        });
    });

    $(document).on('click', '#btn_quick_view', function () {
        var slug = $(this).data('slug');
        $.ajax({
            type: "GET",
            url: ('/product/modal-detail/' + slug),

            success: function (response) {
                $('.content_modal_view').html(response);
                $('#modalQuickView').show();
            }
        });
        // $.get('/quick-view/' + id, function(data) {
        //     $('.modal').html(data);
        //     $('.modal').show();
        // });
    });

    function updateQuantity(change) {
        var qtyInput = document.getElementById('qty');
        var currentQty = parseInt(qtyInput.value);
        var newQty = currentQty + change;

        if (newQty > 0) {
            qtyInput.value = newQty;
            updateSubtotal();
        }
    }

    function updateSubtotal() {
        var qtyInput = document.getElementById('qty');
        var subtotalElement = document.getElementById('subtotal');
        var pricePerUnit = parseFloat('{{ $detail->price }}');
        var currentQty = parseInt(qtyInput.value);
        var subtotal = pricePerUnit * currentQty;

        // Format subtotal as a currency without decimals
        subtotalElement.innerHTML = 'Rp ' + subtotal.toLocaleString('id-ID', {
            maximumFractionDigits: 0
        });
    }

    function updateQuantity(change) {
        var qtyInput = document.getElementById('qty2');
        var currentQty = parseInt(qtyInput.value);
        var newQty = currentQty + change;

        if (newQty > 0) {
            qtyInput.value = newQty;
            updateSubtotal();
        }
    }

    function updateSubtotal() {
        var qtyInput = document.getElementById('qty2');
        var subtotalElement = document.getElementById('subtotal2');
        var pricePerUnit = parseFloat('{{ $detail->price }}');
        var currentQty = parseInt(qtyInput.value);
        var subtotal = pricePerUnit * currentQty;

        // Format subtotal as a currency without decimals
        subtotalElement.innerHTML = 'Rp ' + subtotal.toLocaleString('id-ID', {
            maximumFractionDigits: 0
        });
    }

</script>
@endpush
