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
    <div class="row stats-row">
        <div class="col-lg-4 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">1</h5>
                        <p class="stats-text"><span class="badge badge-danger">Gagal (Rp)</span></p>
                    </div>
                    <div class="stats-icon change-danger">
                        <i class="material-icons">account_balance_wallet</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">2</h5>
                        <p class="stats-text"><span class="badge badge-success">Selesai (Rp)</span></p>
                    </div>
                    <div class="stats-icon change-success">
                        <i class="material-icons">paid</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">3</h5>
                        <p class="stats-text"><span class="badge badge-warning">Pending</span></p>
                    </div>
                    <div class="stats-icon change-success">
                        <i class="material-icons">inventory_2</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">Penjualan<span class="card-title-helper">30 Days</span></h5>
                    <div class="savings-stats">
                        <h5>4</h5>
                        <span>Total savings for last month</span>
                    </div>
                    {{-- <div id="sparkline-chart-1"></div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card savings-card">
                <div class="card-body">
                    <h5 class="card-title">Pembelian<span class="card-title-helper">30 Days</span></h5>
                    <div class="savings-stats">
                        <h5>5</h5>
                        <span>Total savings for last month</span>
                    </div>
                    {{-- <div id="sparkline-chart-1"></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

