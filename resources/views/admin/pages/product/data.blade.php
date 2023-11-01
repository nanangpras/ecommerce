@extends('admin.layouts.layout-dashboard')
@section('content')


<!-- Page-header end -->

<div class="page-info">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Extended</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
        </ol>
    </nav>
</div>
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
        <div class="col-md-12">
            <div class="page-title">
                <a href="{{route('product.create')}}" class="btn btn-primary btn-sm"  style="float: right;">Input Produk</a>
                {{-- <p class="page-desc">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds many advanced features to any HTML table.</p> --}}
            </div>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data Produk</h5>
                    <br>
                    <table id="zero-conf" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Gambar</th>
                                <th>Harga</th>
                                <th>QTY</th>
                                <th>Berat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->category->name}}</td>
                                    <td>
                                        @foreach ($item->productImages as $img)
                                            <img src="{{$img->image}}" alt="" width="100" height="100">
                                        @endforeach
                                    </td>
                                    <td>@currency($item->price)</td>
                                    <td>{{$item->available_qty}}</td>
                                    <td>{{$item->weight}}</td>
                                    <td>
                                        <a href="{{route('product.edit',$item->id)}}" class="btn btn-secondary">Edit</a>
                                        <form action="{{ route('product.destroy',$item->id) }}" method="POST" style="display: inline-block;">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" value="Delete"
                                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data {{ $item->name }} ?')">
                                                 Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection
@push('after-scripts')

@endpush

