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
    <h6>Detail Transaksi</h6>

    <div class="profile-content">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-transactions">
                    <div class="card-body">
                        <h5 class="card-title">Status<a href="#" class="card-title-helper blockui-transactions"><i class="material-icons">refresh</i></a></h5>
                        <hr>
                        <p>Status : {{$data->progress_status}}</p>
                        <p>Produk : {{$data->title}}</p>
                        <p>Price : {{$data->price}}</p>
                        <p>Invoice : {{$data->code}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-transactions">
                    <div class="card-body">
                        <h1 class="card-title">{{$data->title}}<a href="#" class="card-title-helper blockui-transactions"><i class="material-icons">refresh</i></a></h1>
                        <hr>
                        <p>Username : </p><br>
                        <p>Password : </p><br>
                        <a href="#" class="btn btn-secondary btn-sm">Login Website</a>
                        <a href="#" class="btn btn-secondary btn-sm">Login Cpanel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('after-scripts')
@endpush

