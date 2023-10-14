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
                    <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm" style="float: right;">buat
                        banner</a>
                    {{-- <p class="page-desc">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds many advanced features to any HTML table.</p> --}}
                </div>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Profile</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-item nav-link" id="nav-portofolio-tab" data-toggle="tab" href="#nav-portofolio"
                                    role="tab" aria-controls="nav-portofolio" aria-selected="false">Portofolio</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                @include('admin.pages.company_profile.form.profile')
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"aria-labelledby="nav-profile-tab">
                                {{-- <a href="{{ route('banner.create') }}" class="btn btn-primary btn-sm" style="float: right; margin-bottom:10px;">buat banner</a> --}}
                                {{-- <br>
                                <br> --}}
                                <table id="zero-conf" class="display">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Link</th>
                                            <th>Gambar</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($banner as $item)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->link}}</td>
                                                <td><img src="{{$item->banner_image}}" alt="" width="100" height="100"></td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        Aktif
                                                    @else
                                                        Tidak Aktif
                                                    @endif</td>
                                                <td>
                                                    <a href="{{route('banner.edit',$item->id)}}" class="btn btn-secondary">Edit</a>
                                                    <form action="{{ route('banner.destroy',$item->id) }}" method="POST" style="display: inline-block;">
                                                        @method('delete')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger" value="Delete"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data {{ $item->name }} ?')">
                                                             Hapus
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach --}}

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
@push('after-scripts')
    <script>
        function previewImageCompany() {
            const image = document.querySelector('#imagecompany');
            const imgprev = document.querySelector('.img-preview-company');
            imgprev.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgprev.src = oFREvent.target.result;
            }
        }

        function previewImageLogo() {
            const image = document.querySelector('#logocompany');
            const imgprev = document.querySelector('.img-preview-logo');
            imgprev.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgprev.src = oFREvent.target.result;
            }
        }
    </script>
@endpush
