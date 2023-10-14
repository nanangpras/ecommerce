@extends('home.layouts.layout-pages')
@section('content')
<!-- SHOPING CART AREA START -->
<div class="liton__shoping-cart-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <th class="cart-product-remove">Remove</th>
                                <th class="cart-product-image">Image</th>
                                <th class="cart-product-info">Product</th>
                                <th class="cart-product-price">Price</th>
                                <th class="cart-product-quantity">Quantity</th>
                                <th class="cart-product-subtotal">Subtotal</th>
                            </thead>
                            <tbody>
                                @forelse ($cart as $item)
                                    <tr>
                                        <td class="cart-product-remove">x</td>
                                        <td class="cart-product-image">
                                            <a href="product-details.html"><img src="{{$item['image']}}" alt="#"></a>
                                        </td>
                                        <td class="cart-product-info">
                                            <h4><a href="product-details.html">{{$item['title']}}</a></h4>
                                        </td>
                                        <td class="cart-product-price">{{$item['price']}}</td>
                                        <td class="cart-product-quantity">
                                            <div class="cart-plus-minus">
                                                <input type="text" value="{{ $item['qty'] }}" id="qty" name="qtybutton" class="cart-plus-minus-box">
                                                {{-- <input type="hidden" name="product_id[]" value="{{ $item['id'] }}" class="form-control"> --}}
                                            </div>
                                        </td>
                                        <td class="cart-product-subtotal">{{$item['price'] * $item['qty']}}</td>
                                    </tr>
                                    <tr>
                                        <td><input type="file"></td>
                                    </tr>
                                @empty
                                <tr>
                                    <td colspan="6"> Tidak ada keranjang belanja</td>
                                </tr>
                                @endforelse

                                <tr class="cart-coupon-row">
                                    <td colspan="6">
                                        <div class="cart-coupon">
                                            <input type="text" name="cart-coupon" placeholder="Coupon code">
                                            <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="submit" class="btn theme-btn-2 btn-effect-2-- disabled">Update Cart</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shoping-cart-total mt-50">
                        <h4>Cart Totals</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td>{{$subtotal}}</td>
                                </tr>
                                <tr>
                                    <td>Shipping and Handing</td>
                                    <td>$15.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong>{{$subtotal}}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-wrapper text-right text-end">
                            <a href="{{route('checkout.index')}}" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->
@endsection
