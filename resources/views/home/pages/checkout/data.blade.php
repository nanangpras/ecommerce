@extends('home.layouts.layout-pages')
@section('content')
<!-- WISHLIST AREA START -->
<div class="ltn__checkout-area mb-105">
    <div class="container">
        @guest
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__checkout-inner">
                    <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                        <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login"
                                data-bs-toggle="collapse">Click here to login</a></h5>
                        <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                            <div class="ltn_coupon-code-form ltn__form-box">
                                <p>Please login your accont.</p>
                                <form action="#">
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
                                    <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember
                                        me</label>
                                    <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endguest
        @auth
        <form action="{{route('checkout.process')}}" method="POST">
            @csrf
            <div class="row mb-130">
                <div class="col-lg-12 col-md-6">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            {{-- Informasi Anda --}}

                            <div class="ltn__checkout-inner">
                                <div class="ltn__checkout-single-content">
                                    <div class="ltn__checkout-single-content-info">
                                        <form action="#">
                                            <h6>Kode Kupon</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-item input-item-name">
                                                        <div class="row">
                                                            <div class="col-md-8 col-12">
                                                                <input type="text" name="code" id="code_coupon"
                                                                    placeholder="Coupon code"
                                                                    style="border-radius: 15px">
                                                            </div>
                                                            <div class="col-md-4 col-12">
                                                                <button type="button" id="btn_coupon"
                                                                    class="btn btn-white btn-effect-2 text-uppercase">
                                                                    Kupon</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <br>
                                    <div class="ltn__checkout-single-content-info">
                                        <form action="#">
                                            <h6>Informasi Pribadi</h6>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-item input-item-name ltn__custom-icon">
                                                        <input type="text" name="name" value="{{Auth::user()->name}}"
                                                            placeholder="First name" style="border-radius: 15px">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-item input-item-email ltn__custom-icon">
                                                        <input type="email" name="ltn__email"
                                                            value="{{Auth::user()->email}}" placeholder="email address "
                                                            style="border-radius: 15px">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="input-item input-item-phone ltn__custom-icon">
                                                        <input type="text" name="ltn__phone"
                                                            value="{{Auth::user()->phone}}" placeholder="phone number"
                                                            style="border-radius: 15px">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <h6>Alamat Lengkap</h6>
                                                    <div class="input-item input-item-subject ltn__custom-icon">
                                                        <input type="text" placeholder="House number and street name"
                                                            value="{{Auth::user()->address}}"
                                                            style="border-radius: 15px">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            {{-- Ringkasan Pemesanan --}}

                            <div class="ltn__checkout-single-content-info">

                                <div>
                                    <h4 class="title-2">Ringkasan Pemesanan</h4>

                                    <table class="table">
                                        <tbody>
                                            @forelse ($cart as $item)
                                            <tr>
                                                <td>{{$item['title']}} <strong>× {{$item['qty']}}</strong></td>
                                                <td>@currency($item['qty'] * $item['price'])</td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="2">Tidak ada keranjang</td>
                                            </tr>
                                            @endforelse
                                            <tr>
                                                <td><strong>Kupon</strong> <br>
                                                    <div id="description_coupon">kupon deskripsi untuk anda</div>
                                                </td>
                                                <td id="rate_coupon"><strong>0</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Order Total</strong></td>
                                                <td id="order_total"><strong>@currency($subtotal)</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div>
                                <p>Saya menyatakan telah menyetujui SLA, AUP, Perjanjian Layanan Web Hosting, dan
                                    Kebijakan
                                    Privasi.</p>
                            </div>
                            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
                            <input type="hidden" id="trx_total" value="{{$subtotal}}" name="transaction_total">
                            <input type="hidden" id="idcoupon" name="idcoupon">
                            <button class="btn theme-btn-7 btn-effect-7 text-uppercase" type="submit">Lanjutkan</button>


                        </div>
                    </div>
                </div>

        </form>
        @endauth
    </div>
</div>
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- WISHLIST AREA START -->
@endsection
@push('after-scripts')
<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function () {
            $("#btn_coupon").click(function (e) {
                let code_coupon = $("#code_coupon").val();
                e.preventDefault();
                alert('sukses input: ' + code_coupon);
                $.ajax({
                    method: 'POST',
                    url: "{{route('apply.coupon')}}",
                    data: {
                        _token: CSRF_TOKEN,
                        'code' : code_coupon
                    },
                    // dataType: "dataType",
                    success: function (response) {
                        // console.log(response);

                        $.each(response, function (key, value) {
                            const element       = $("#order_total");
                            const element_total = $("#trx_total");
                            const idcoupon      = $("#idcoupon");
                            const description   = $("#description_coupon");
                            if (value.type == 'numeric') {
                                $("#rate_coupon").text(value.rate);
                                element.text(value.result_total);
                                description.text(value.description);
                                element_total.val(value.result_total);
                                idcoupon.val(value.idcoupon);
                            }
                            if (value.type == 'percentage') {
                                $("#rate_coupon").text(value.rate);
                                element.text(value.result_total);
                                description.text(value.description);
                                element_total.val(value.result_total);
                                idcoupon.val(value.idcoupon);
                            }
                            if (value.type == 'expired') {
                                $("#rate_coupon").text(value.rate);
                                idcoupon.val(value.idcoupon);
                                alert( code_coupon + ': Sudah tidak berlaku');
                            }

                        });
                    }
                });
            });
        });
</script>
@endpush