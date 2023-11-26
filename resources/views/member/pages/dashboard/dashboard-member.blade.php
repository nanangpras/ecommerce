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
</div>
<div class="main-wrapper">
    <div class="row stats-row">
        <div class="col-lg-4 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{$cencel ?? '0'}}</h5>
                        <p class="stats-text"><span class="badge badge-danger">Gagal</span></p>
                    </div>
                    <div class="stats-icon change-danger">
                        <i class="material-icons">paid</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card-transparent stats-card">
                <div class="card-body">
                    <div class="stats-info">
                        <h5 class="card-title">{{$success ?? '0'}}</h5>
                        <p class="stats-text"><span class="badge badge-success">Selesai</span></p>
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
                        <h5 class="card-title">{{$pending ?? '0'}}</h5>
                        <p class="stats-text"><span class="badge badge-warning">Pending </span></p>
                    </div>
                    <div class="stats-icon change-success">
                        <i class="material-icons">inventory_2</i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- List View --}}
    @if (session('success'))
    <div class="alert alert-primary outline-alert" role="alert">
        {{ session('success') }}
        {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button> --}}
    </div>
    @endif
    <div class="main-wrapper">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Invoice
                        </h5>
                        <br>
                        <table id="zero-conf" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Jatuh Tempo </th>
                                    <th>No Invoice </th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $item) --}}
                                <tr>
                                    <td> Haloooo</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Bayar</a>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Berita 
                        </h5>
                        <br>
                        <table id="zero-conf" class="display" style="width:100%">
                           
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {{-- @endsection
    @push('after-scripts') --}}
    {{-- List View --}}
    <div class="col-lg-12">
        <div class="card card-transparent file-list recent-files">
            <div class="card-body">
                <h5 class="card-title">Semua Produk dan Service</h5>
                <div class="row">
                    @foreach($popularProduct as $item)
                    <div class="col-lg-6 col-xl-3 col-6 mt-4">
                        <div class="card file photo">
                            <div class="file-options dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">View Details</a>
                                    <a class="dropdown-item" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class=""> <img
                                    src="{{$item->productImages->count() ? $item->productImages->first()->image : ''}}"
                                    alt="" style=" object-fit: cover; padding-top: 10px;" alt="" width="100%"
                                    height="200px">
                            </div>
                            <div class="card-body file-info">
                                <p style="display: block;
                                white-space: nowrap;
                                overflow: hidden;
                                text-overflow: ellipsis;">{{$item->title}}</p>
                                <span class="file-size">{{$item->price}}</span><br>
                                <span class="file-date mt-3 " style="text-align: -webkit-center;">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        belum dibayar
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                {{-- Coba Modal --}}


                <!-- Button trigger modal -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Keterangan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary">Selesaikan Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Coba Modal --}}
            </div>
        </div>
    </div>

</div>




@endsection