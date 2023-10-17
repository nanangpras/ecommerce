@extends('home.layouts.layout-pages')
@section('content')
<!-- WISHLIST AREA START -->
<div class="ltn__checkout-area mb-105">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__checkout-inner">
                    <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                        <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle="collapse">Click here to login</a></h5>
                        <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                            <div class="ltn_coupon-code-form ltn__form-box">
                                <p>Please login your accont.</p>
                                <form action="#" >
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__name" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="ltn__email" placeholder="Enter email address">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                    <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                    <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                        <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-bs-toggle="collapse">Click here to enter your code</a></h5>
                        <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                            <div class="ltn__coupon-code-form">
                                <p>If you have a coupon code, please apply it below.</p>
                                <form action="#" >
                                    <input type="text" name="coupon-code" placeholder="Coupon code">
                                    <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__checkout-single-content mt-50">
                        <h4 class="title-2">Billing Details</h4>
                        <div class="ltn__checkout-single-content-info">
                            <form action="#" >
                                <h6>Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="ltn__name" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="ltn__lastname" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="ltn__email" placeholder="email address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="ltn__phone" placeholder="phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-website ltn__custom-icon">
                                            <input type="text" name="ltn__company" placeholder="Company name (optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-website ltn__custom-icon">
                                            <input type="text" name="ltn__phone" placeholder="Company address (optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <h6>Country</h6>
                                        <div class="input-item">
                                            <select class="nice-select">
                                                <option>Select Country</option>
                                                <option>Australia</option>
                                                <option>Canada</option>
                                                <option>China</option>
                                                <option>Morocco</option>
                                                <option>Saudi Arabia</option>
                                                <option>United Kingdom (UK)</option>
                                                <option>United States (US)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <h6>Address</h6>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-item">
                                                    <input type="text" placeholder="House number and street name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-item">
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6>Provinsi</h6>
                                        <div class="input-item provinsi_id">

                                            <select name="province_id" id="province_id" class="nice-select">
                                                @foreach ($provinsi as $row)
                                                    <option value="{{ $row['province_id'] }}" name="{{ $row['province'] }}">{{ $row['province'] }}</option>
                                                @endforeach
                                            </select>
                                            @error('province_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6>Kota/Kabupaten</h6>
                                        <div class="input-item city_id">
                                            <select class="nice-select" name="city_ids" id="city_ids">
                                                <option>Select Kota</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <h6>Kecamatan</h6>
                                        <div class="input-item">
                                            <select class="nice-select" name="kecamatan_id" id="kecamatan_id">
                                                <option>Select Kecamatan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p>
                                <h6>Order Notes (optional)</h6>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__checkout-payment-method mt-50">
                    <h4 class="title-2">Payment Method</h4>
                    <div id="checkout_accordion_1">
                        <!-- card -->
                        <div class="card">
                            <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Check payments
                            </h5>
                            <div id="faq-item-2-1" class="collapse" data-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h5 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true">
                                Cash on delivery
                            </h5>
                            <div id="faq-item-2-2" class="collapse show" data-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false" >
                                PayPal <img src="img/icons/payment-3.png" alt="#">
                            </h5>
                            <div id="faq-item-2-3" class="collapse" data-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__payment-note mt-30 mb-30">
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                    </div>
                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping-cart-total mt-50">
                    <h4 class="title-2">Cart Totals</h4>
                    <table class="table">
                        <tbody>
                            @forelse ($cart as $item)
                                <tr>
                                    <td>{{$item['title']}} <strong>× {{$item['qty']}}</strong></td>
                                    <td>{{$item['qty'] * $item['price']}}</td>
                                </tr>
                            @empty

                            @endforelse
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
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->
@endsection
@push('after-scripts')
    <script>
        $(document).ready(function () {
            $('#province_id').on('change',function () {
                let provinceid = $(this).val();
                if (provinceid) {
                    jQuery.ajax({
                        url:"/city/"+provinceid,
                        type:'GET',
                        dataType:'json',
                        success:function(data){
                            console.log(data);
                            alert('ok');
                            $('#city_ids').empty();
                            $.each(data,function (key,value) {
                                $('#city_ids').append('<option value="'+ value.city_id +'" namakota="'+ value.type +' ' +value.city_name+ '">' + value.type + ' ' + value.city_name + '</option>');
                            })
                        }
                    })
                }else{
                    $('#city_ids').empty();
                }
            });

            $('#city_ids').on('change',function () {
                let kecamatanid = $(this).val();
                if (kecamatanid) {
                    jQuery.ajax({
                        url:"/subdistrict/"+kecamatanid,
                        type:'GET',
                        dataType:'json',
                        success:function(data){
                            console.log(data);

                            $('select[name="kecamatan_id"]').empty();
                            $.each(data,function (key,value) {
                                $('select[name="kecamatan_id"]').append('<option value="'+ value.subdistrict_id +'" namakota="'+ value.city +' ' +value.subdistrict_name+ '">' + value.city + ' ' + value.subdistrict_name + '</option>');
                            })
                        }
                    })
                }else{
                    $('select[name="kecamatan_id"]').empty();
                }
            });
        });
    </script>
@endpush
