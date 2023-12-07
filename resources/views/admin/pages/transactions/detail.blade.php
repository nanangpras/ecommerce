@extends('admin.layouts.layout-dashboard')
@section('content')


<!-- Page-header end -->

<div class="page-info">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Apps</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </nav>
    {{-- <div class="page-options">
        <a href="#" class="btn btn-secondary">Settings</a>
        <a href="#" class="btn btn-primary">Upgrade</a>
    </div> --}}
</div>
<div class="main-wrapper">


    <div class="profile-content">

        <div class="col-lg-8">
            <div class="mb-4">
                <h6>Detail Transaksi <strong>{{$detail->code ?? ''}}</strong></h6>
                <h6>Status <strong>{{$detail->transaction_status ?? ''}}</strong></h6>
            </div>
            <div class="card card-transactions">
                <div class="card-body">
                    <h5 class="card-title">Contact Info</h5>
                    <ul class="list-unstyled profile-about-list">
                        <li><i class="material-icons">person</i><span>{{$detail->user->name ?? ''}}</span></li>
                        <li><i class="material-icons">mail_outline</i><span>{{$detail->user->email ?? ''}}</span></li>
                        <li><i class="material-icons">home</i><span>Alamat {{$detail->user->address ?? ''}}</span></li>
                        <li><i class="material-icons">local_phone</i><span>{{$detail->user->phone ?? ''}}</span></li>
                    </ul>
                </div>
            </div>
            <div class="card card-transactions">
                <div class="card-body">
                    <h5 class="card-title">Detail Transaksi<a href="#" class="card-title-helper blockui-transactions"><i class="material-icons">refresh</i></a></h5>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>Produk</td>
                                    <td>Harga</td>
                                    <td>Qty</td>
                                    <td>Total</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $sumtotal = 0;
                                    $pajak =0;
                                    $sumcoupon=0;
                                @endphp
                                @forelse ($detail->details as $item)
                                    <tr>
                                        <td>{{$item->product->title}}
                                            <br>
                                            @if ($item->product->attachment || $item->product->attachment_link)
                                                <a href="{{$item->product->attachment_link}}" target="_blank" class="btn btn-sm btn-outline-warning" >link</a>
                                                <a href="{{asset($item->product->attachment)}}" class="btn btn-sm btn-outline-success" >berkas</a>
                                            @endif
                                        </td>
                                        <td>@currency($item->product->price)</td>
                                        <td>{{$item->qty}}</td>
                                        <td>@currency($item->transaction_subtotal)</td>
                                    </tr>
                                    @php
                                        $sumtotal += $item->transaction_subtotal;
                                    @endphp
                                @empty
                                    <tr>
                                        <td colspan="4">Tidak ada detail transaksi</td>
                                    </tr>
                                @endforelse
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3">Subtotal</td>
                                    <td colspan="3">@currency($sumtotal)</td>
                                </tr>
                                @if ($detail->coupon_id != null)
                                    @php
                                        if ($detail->coupon->type == 'numeric') {
                                            $sumcoupon = $sumtotal - $detail->coupon->discount_rate;
                                        }
                                        if ($detail->coupon->type == 'percentage') {
                                            $percent = $detail->$coupon->discount_rate / 100 * $sumtotal;
                                            $sumcoupon = $sumtotal - $percent;
                                        }
                                    @endphp
                                    <tr>
                                        <td colspan="3">Kupon <br>
                                            {{$detail->coupon->code}}
                                        </td>
                                        <td colspan="3">
                                            @if ($detail->coupon->type == 'numeric')
                                                @currency($detail->coupon->discount_rate)
                                            @endif
                                            @if ($detail->coupon->type == 'percentage')
                                                ($detail->coupon->discount_rate) %
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Total </td>
                                        <td class="text-end">@currency($sumcoupon)</td>
                                    </tr>
                                @endif
                                @php
                                    if($sumcoupon){$pajak = $sumcoupon * 0.11;}
                                    else {
                                        $pajak = $sumtotal * 0.11;
                                    }
                                @endphp
                                <tr>
                                    <td colspan="3">Tax (11%)</td>
                                    <td class="text-end">@currency($pajak)</td>
                                </tr>
                                <tr>
                                    <td colspan="3">Biaya Payment</td>
                                    <td class="text-danger text-end">-</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-800" colspan="3">Grand Total</td>
                                    <td class="text-bold-800 text-end" colspan="3"><strong>@currency($detail->transaction_total)</strong> </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <a href="{{route('transaction.list')}}" type="button" id="pay-button" class="btn btn-success">Kembali</a>
        </div>
    </div>
</div>
@endsection


