@extends('home.layouts.layout-pages')
@section('content')
<!-- SHOP DETAILS AREA START -->
<div class="ltn__shop-details-area pb-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="ltn__shop-details-inner mb-60">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ltn__shop-details-img-gallery">
                                <div class="ltn__shop-details-large-img">
                                    @foreach ($detail->productImages as $item)
                                        <div class="single-large-img">
                                            <a href="{{$item->image}}" data-rel="lightcase:myCollection">
                                                <img src="{{$item->image}}" alt="Image">
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="ltn__shop-details-small-img slick-arrow-2">
                                    @foreach ($detail->productImages as $item)
                                        <div class="single-small-img">
                                            <img src="{{$item->image}}" alt="Image">
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-product-info shop-details-info pl-0">
                                {{-- <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                    </ul>
                                </div> --}}
                                <h3>{{$detail->title}}</h3>
                                <div class="product-price">
                                    <span>Rp {{$detail->price}}</span>
                                    <del>Rp {{$detail->price}}</del>
                                </div>
                                <div class="modal-product-meta ltn__product-details-menu-1">
                                    <ul>
                                        <li>
                                            <strong>Categories:</strong>
                                            <span>
                                                <a href="#">{{$detail->category->name}}</a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__product-details-menu-2">
                                    <form action="{{route('add.to.cart')}}" id="form-add-cart" method="POST">
                                        <ul>
                                            <li>
                                                <div class="cart-plus-minus">
                                                    <input type="text" id="qty" value="1" name="qty" class="cart-plus-minus-box">
                                                </div>
                                            </li>
                                            <li>
                                                @csrf
                                                <input type="hidden" id="idproduct" name="id" value="{{ $detail->id }}" class="form-control">
                                                <input type="hidden" id="weight" name="weight" value="{{ $detail->weight }}" class="form-control">
                                                <button class="theme-btn-1 btn btn-effect-1" type="submit">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART YA</span>
                                                </button>
                                                {{-- <a href="#" id="add-to-cart" class="theme-btn-1 btn btn-effect-1" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                    <i class="fas fa-shopping-cart"></i>
                                                    <span>ADD TO CART YA</span>
                                                </a> --}}
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                                <div class="ltn__product-details-menu-3">
                                    <ul>
                                        <li>
                                            @if ($detail->link)
                                                <a href="{{$detail->link}}" target="_blank" class="">
                                                    <i class="far fa-eye"></i>
                                                    <span>Preview Link</span>
                                                </a>
                                            @endif
                                        </li>
                                        {{-- <li>
                                            <a href="#" class="" title="Compare" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                <i class="fas fa-exchange-alt"></i>
                                                <span>Compare</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>
                                <hr>
                                <div class="ltn__social-media">
                                    <ul>
                                        <li>Share:</li>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>

                                    </ul>
                                </div>
                                <hr>
                                <div class="ltn__safe-checkout">
                                    <h5>Guaranteed Safe Checkout</h5>
                                    <img src="{{url('themes-frontend/img/icons/payment-2.png')}}" alt="Payment Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab Start -->
                <div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
                    <div class="ltn__shop-details-tab-menu">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_1_1">Description</a>
                            <a data-bs-toggle="tab" href="#liton_tab_details_1_2" class="">Reviews</a>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_tab_details_1_1">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">{{$detail->title}}</h4>
                                {{-- <p>{{$detail->description}}</p> --}}
                                <p>{!!$detail->description!!}</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="liton_tab_details_1_2">
                            <div class="ltn__shop-details-tab-content-inner">
                                <h4 class="title-2">Customer Reviews</h4>
                                <div class="product-rating">
                                    <h4>Belum ada review</h4>
                                </div>
                                {{-- <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                        <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                    </ul>
                                </div> --}}
                                {{-- <hr>
                                <!-- comment-area -->
                                <div class="ltn__comment-area mb-30">
                                    <div class="ltn__comment-inner">
                                        <ul>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="img/testimonial/1.jpg" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <span class="ltn__comment-reply-btn">September 3, 2020</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="img/testimonial/3.jpg" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <span class="ltn__comment-reply-btn">September 2, 2020</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="ltn__comment-item clearfix">
                                                    <div class="ltn__commenter-img">
                                                        <img src="img/testimonial/2.jpg" alt="Image">
                                                    </div>
                                                    <div class="ltn__commenter-comment">
                                                        <h6><a href="#">Adam Smit</a></h6>
                                                        <div class="product-ratting">
                                                            <ul>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, omnis fugit corporis iste magnam ratione.</p>
                                                        <span class="ltn__comment-reply-btn">September 2, 2020</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- comment-reply -->
                                <div class="ltn__comment-reply-area ltn__form-box mb-30">
                                    <form action="#">
                                        <h4 class="title-2">Add a Review</h4>
                                        <div class="mb-30">
                                            <div class="add-a-review">
                                                <h6>Your Ratings:</h6>
                                                <div class="product-ratting">
                                                    <ul>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-item input-item-textarea ltn__custom-icon">
                                            <textarea placeholder="Type your comments...."></textarea>
                                        </div>
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" placeholder="Type your name....">
                                        </div>
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" placeholder="Type your email....">
                                        </div>
                                        <div class="input-item input-item-website ltn__custom-icon">
                                            <input type="text" name="website" placeholder="Type your website....">
                                        </div>
                                        <label class="mb-0"><input type="checkbox" name="agree"> Save my name, email, and website in this browser for the next time I comment.</label>
                                        <div class="btn-wrapper">
                                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Submit</button>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Shop Tab End -->
            </div>
            {{-- <div class="col-lg-4">
                <aside class="sidebar ltn__shop-sidebar ltn__right-sidebar">
                    <!-- Top Rated Product Widget -->
                    <div class="widget ltn__top-rated-product-widget">
                        <h4 class="ltn__widget-title ltn__widget-title-border">Top Rated Product</h4>
                        <ul>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.html">Mixel Solid Seat Cover</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.html">Brake Conversion Kit</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="top-rated-product-item clearfix">
                                    <div class="top-rated-product-img">
                                        <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                    </div>
                                    <div class="top-rated-product-info">
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                            </ul>
                                        </div>
                                        <h6><a href="product-details.html">Coil Spring Conversion</a></h6>
                                        <div class="product-price">
                                            <span>$49.00</span>
                                            <del>$65.00</del>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="img/banner/2.jpg" alt="#"></a>
                    </div>
                </aside>
            </div> --}}
        </div>
    </div>
</div>
<!-- SHOP DETAILS AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h6 class="section-subtitle ltn__secondary-color">// {{$detail->category->name}} </h6>
                    <h1 class="section-title">Related Products<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach ($relateProduct as $item)
                <div class="col-lg-12">
                    <div class="ltn__product-item ltn__product-item-3 text-center">
                        <div class="product-img">
                            <a href="{{route('product.detail',$item->slug)}}"><img src="{{$item->productImages->first()->image}}" alt="#"></a>
                            <div class="product-badge">
                                <ul>
                                    <li class="sale-badge">New</li>
                                </ul>
                            </div>
                            <div class="product-hover-action">
                                <ul>
                                    <li>
                                        <a href="#" title="Quick View" id="btn_quick_view" data-slug="{{$item->slug}}" data-bs-toggle="modal" data-bs-target="#quick_view_modal_1">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                            <i class="fas fa-shopping-cart"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="Wishlist" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                            <i class="far fa-heart"></i></a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                        <div class="product-info">
                            {{-- <div class="product-ratting">
                                <ul>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                </ul>
                            </div> --}}
                            <h2 class="product-title"><a href="{{route('product.detail',$item->slug)}}">{{$item->title}}</a></h2>
                            <div class="product-price">
                                <span>Rp {{$item->price}}</span>
                                <del>Rp {{$item->price}}</del>
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
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
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

<meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
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
                    method : "POST",
                    url: "{{route('add.to.cart')}}",
                    data: {
                        _token: CSRF_TOKEN,
                        qty : qty,
                        id : id,
                        weight : weight,
                    },
                    success: function (response) {
                        // console.log(response);
                        $("#content-add-cart").html(response);
                    }
                });
            });
        });

        $(document).on('click', '#btn_quick_view', function() {
            var slug = $(this).data('slug');
            $.ajax({
                type: "GET",
                url:('/product/modal-detail/'+slug),

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
    </script>
@endpush
