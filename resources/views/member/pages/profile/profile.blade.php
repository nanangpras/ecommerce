@extends('admin.layouts.layout-dashboard')
@section('content')


<!-- Page-header end -->
@if (session('success'))
<div class="alert alert-primary outline-alert" role="alert">
    {{ session('success') }}
    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button> --}}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger outline-alert" role="alert">
    {{ session('error') }}
    {{-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button> --}}
</div>
@endif
<div class="main-wrapper">
    <div class="profile-header">
        <div class="row">
            <div class="col">
                <div class="profile-img">
                    <img src="{{url('themes/assets/images/avatars/profile-image-1.png')}}">
                </div>
                <div class="profile-name">
                    <h3 style="color: black">{{$user->name}}</h3>
                    <span>Member Of Webiin</span>
                </div>
            </div>
        </div>
    </div>
    <div class="profile-content">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="post">
                        <div class="post-body">
                            <table class="table table-striped ">
                                <tbody class="body-table">
                                    <tr class="d-flex">
                                        <th class="col-3">Nama</th>
                                        <td class="col-5">
                                            {{$user->name}}
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr class="d-flex">
                                        <th class="col-3">Email</th>
                                        <td class="col-5">
                                            {{$user->email}}
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr  class="d-flex">
                                        <th class="col-3">No Handphone</th>
                                        <td  class="col-5">
                                            {{$user->phone}}
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr  class="d-flex">
                                        <th class="col-3">Provinsi</th>
                                        <td  class="col-5">
                                            <div name="province_id" id="province_id">
                                                @foreach ($provinsi as $row)
                                                    @if($user->province_id == $row['province_id'])
                                                        <div value="{{ $row['province_id'] }}">
                                                            {{ $row['province'] }}
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr  class="d-flex">
                                        <th class="col-3">Kabupaten</th>
                                        <td  class="col-5">
                                            
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr  class="d-flex">
                                        <th class="col-3">Kecamatan</th>
                                        <td  class="col-5">
                                            
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr  class="d-flex">
                                        <th class="col-3">Alamat</th>
                                        <td  class="col-5">
                                            {{$user->address}}
                                        </td>
                                        <td> </td>
                                    </tr>
                                    <tr  class="d-flex">
                                        <th class="col-3">Kode Pos</th>
                                        <td  class="col-5">
                                            {{$user->postcode}}
                                        </td>
                                        <td> </td>
                                    </tr>
                                </tbody>
                            </table>    
                        </div>
                        <div class="post-body ml-auto text-right">
                            <button type="button" data-toggle="modal" data-target="#modalProfil"
                                class="btn btn-primary">Ubah Profil</button>
                        </div>
                </div>
            </div>
        </div>
            <div class="card">
                <div class="card-body">
                    <div class="post">
                        <div class="post-body d-flex align-items-center justify-content-between">
                            <label>Password</label>
                            <button type="button" data-toggle="modal" data-target="#exampleModalCenter"
                                class="btn btn-primary">Ubah Password</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5 pt-3 pb-5">
                    <form action="{{route('password.update')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Password sekarang</label>
                            <input type="password" name="current_password" id="current_password" class="form-control"">
                        </div>
                        <div class=" form-group">
                            <label>Password baru</label>
                            <input type="password" name="password" id="password" class="form-control"">
                        </div>
                        <div class=" form-group">
                            <label>Password baru</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control"">
                        </div>
                        <button type=" submit" class="btn btn-primary">Update Password</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modalProfil" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Ubah Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body px-5 pt-3 pb-5">
                    <form action="{{route('profile.update')}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" id="name"
                                value="{{$user->name}}" aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" id="name"
                                value="{{$user->email}}" aria-describedby="name">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="phone" class="form-control" id="name"
                                value="{{$user->phone}}" aria-describedby="name">
                        </div>
                        <div class="">
                            <div class="text-center loader_show" id="loader_show"
                                style="position: absolute; left: 0; right: 0; display:none">
                                <img src="{{ url('themes/assets/icons/loader.gif') }}">
                            </div>
                                <div class="form-group">
                                    <label>Provinsi</label>
                                    <select name="province_id" id="province_id" class="form-control">
                                        <option selected="true" disabled="disabled"> Pilih Provinsi</option>
                                        @foreach ($provinsi as $row)
                                        <option value="{{ $row['province_id'] }}"
                                            {{$user->province_id == $row['province_id'] ? 'selected' : '' }}>
                                            {{ $row['province'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('province_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kota/Kabupaten</label>
                                    <select name="city_id" id="city_id" class="form-control">
                                        @foreach ($kabupaten as $row)
                                        <option value="{{ $row['city_id'] }}"
                                            {{$user->city_id == $row['city_id'] ? 'selected' : '' }}>
                                            {{ $row['type'] }} {{$row['city_name']}}</option>
                                        @endforeach
                                    </select>
                                    @error('city_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <select name="subdistrict_id" id="subdistrict_id" class="form-control">
                                        @foreach ($kecamatan as $row)
                                        <option value="{{ $row['subdistrict_id'] }}"
                                            {{$user->subdistrict_id == $row['subdistrict_id'] ? 'selected' : '' }}>
                                            {{ $row['city'] }} {{$row['subdistrict_name']}}</option>
                                        @endforeach
                                    </select>
                                    @error('subdistrict_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    </select>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="address" class="form-control" id="name"
                                        value="{{$user->address}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Kodepos</label>
                                    <input type="text" name="postcode" class="form-control" id="name"
                                        value="{{$user->postcode}}">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profil</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>




@endsection
@push('after-scripts')
<script>
    $(document).ready(function () {
        $('select[name="province_id"]').on('change',function () {
            let provinceid = $(this).val();
            if (provinceid) {
                $(".loader_show").show();
                jQuery.ajax({
                    url:"/city/"+provinceid,
                    type:'GET',
                    dataType:'json',
                    success:function(data){
                        $('select[name="city_id"]').empty();
                        $('select[name="city_id"]').append('<option selected="true" disabled="disabled"> Pilih Kota</option>');
                        $.each(data,function (key,value) {
                            $('select[name="city_id"]').append('<option value="'+ value.city_id +'" namakota="'+ value.type +' ' +value.city_name+ '">' + value.type + ' ' + value.city_name + '</option>');
                        })
                        $(".loader_show").hide();
                    }
                })
            }else{
                $('select[name="city_id"]').empty();
            }
        });

        $('select[name="city_id"]').on('change',function () {
            let kecamatanid = $(this).val();
            if (kecamatanid) {
                $(".loader_show").show();
                jQuery.ajax({
                    url:"/subdistrict/"+kecamatanid,
                    type:'GET',
                    dataType:'json',
                    success:function(data){
                        $('select[name="subdistrict_id"]').empty();
                        $('select[name="subdistrict_id"]').append('<option selected="true" disabled="disabled"> Pilih Kecamatan</option>');
                        $.each(data,function (key,value) {
                            $('select[name="subdistrict_id"]').append('<option value="'+ value.subdistrict_id +'" namakota="'+ value.city +' ' +value.subdistrict_name+ '">' + value.city + ' ' + value.subdistrict_name + '</option>');
                        })
                        $(".loader_show").hide();
                    }
                })
            }else{
                $('select[name="subdistrict_id"]').empty();
            }
        });
    });
</script>
@endpush
