@extends('template')

@section('body')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">Pengelolaan Pengguna</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">

            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!-- Row -->
    <div class="row row-sm">
        <div class="col-xl-3 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-header">
                    <h3 class="main-content-label">Pengelolaan Profil</h3>
                </div>
                <div class="card-body text-center item-user">
                    <div class="profile-pic">
                        <div class="profile-pic-img">
                            <span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
                            <img src="{{ asset('file/shindoka-logo.png') }}" class="rounded-circle" width="200"
                                alt="user-admin">
                        </div>
                        <a href="#" class="text-dark">
                            <h5 class="mt-3 mb-0 font-weight-semibold">{{ Auth::user()->name }}</h5>
                        </a>
                    </div>
                </div>
                <ul class="item1-links nav nav-tabs  mb-0">
                    <li class="nav-item">
                        <a data-target="#profil" class="nav-link active" data-toggle="tab" role="tablist"><i
                                class="ti-user icon1"></i> Profil Saya</a>
                    </li>

                    <li class="nav-item">
                        <a data-target="#edit" class="nav-link" data-toggle="tab" role="tablist"><i
                                class="ti-credit-card icon1"></i> Edit Profil</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-12 col-md-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        @can('isAdmin')
                            <div class="tab-pane fade show active" id="profil" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">Profil</label>
                                </div>
                                <div class="py-2">
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="nama_dojo">Nama Admin</label> <input type="text"
                                                class="bg-white form-control" placeholder="" value="{{ $user->name }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="{{ $user->username }}" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                class="bg-white form-control" placeholder="" value="{{ $user->email }}"
                                                readonly> </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                                type="password" class="bg-white form-control" placeholder=""
                                                value="*************" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            <label for="country">No. Hp</label>
                                            <input type="tel" class="bg-white form-control" placeholder=""
                                                value="{{ $admin->no_hp }}" readonly>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3">
                                            <label for="country">Nama Dojo</label>
                                            <input type="text" class="bg-white form-control" placeholder=""
                                                value="{{ $admin->dojo->nama_dojo }}" readonly>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="edit" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">Profil</label>
                                </div>
                                <div class="py-2">
                                    <form action="{{ route('admin.update', $admin->id) }}" method="post">
                                        <input type="hidden" name="_method" value="PUT">
                                        @csrf

                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="nama_dojo">Nama Admin</label> <input
                                                    type="text" class="form-control" name="name" placeholder=""
                                                    value="{{ $user->name }}">
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                    type="text" class="form-control" name="username" placeholder=""
                                                    value="{{ $user->username }}"> </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                    class="form-control" name="email" placeholder=""
                                                    value="{{ $user->email }}"> </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                                    type="password" name="password" class="form-control" placeholder=""
                                                    value=""> </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6">
                                                <label for="country">No. Hp</label>
                                                <input type="tel" class="form-control" placeholder="" name="no_hp"
                                                    value="{{ $admin->no_hp }}">
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"><button type="submit"
                                                    class="btn btn-primary mt-4 btn-lg btn-block">Kirim</button> </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        @elsecan('isAnggota')
                            <div class="tab-pane fade show active" id="profil" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">Profil</label>
                                </div>
                                <div class="py-2">
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="nama_dojo">Nama</label> <input type="text"
                                                class="bg-white form-control" placeholder="" value="{{ $user->name }}"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="{{ $user->username }}" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                class="bg-white form-control" placeholder="" value="{{ $user->email }}"
                                                readonly> </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                                type="password" class="bg-white form-control" placeholder=""
                                                value="*************" readonly> </div>
                                    </div>
                                    <hr>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="nama_dojo">Alamat</label>
                                            <textarea cols="30" rows="10" id="nama_dojo" class="bg-white form-control" readonly>
                                                {{ $detail->alamat }}
                                            </textarea>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Foto</label>
                                            <input type="file" class="dropify"
                                                data-default-file="/file/{{ $detail->file->name ?? '' }}" data-height="200"
                                                disabled />
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">Dojo</label>
                                            <select class="form-control select2 @error('id_dojo') is-invalid @enderror"
                                                name="id_dojo" disabled>
                                                
                                                @foreach ($dojo as $doji)
                                                    @if ($detail->id_dojo == $doji->id)
                                                        <option selected value="{{ $doji->id }}">
                                                            {{ $doji->nama_dojo }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Sabut Terakhir</label>
                                            <select class="form-control select2 @error('sabut') is-invalid @enderror"
                                                name="sabut_terakhir" disabled>
                                                
                                                </option>

                                                <option value="none" @if ($detail->sabut_terakhir === 'Sabut Putih') selected @endif>
                                                    {{ $detail->sabut_terakhir }}
                                                </option>
                                                


                                            </select>
                                        </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">No_hp</label> <input type="email"
                                                class="bg-white form-control" placeholder="" value="{{ $detail->no_hp }}"
                                                readonly> </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Prestasi</label>
                                            <textarea cols="30" rows="10" class="bg-white form-control" readonly>{{ $detail->prestasi }}</textarea>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="edit" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">Profil</label>
                                </div>
                                <div class="py-2">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form action="{{ route('anggota.update', $detail->id) }}" method="post" enctype='multipart/form-data'>
                                        <input type="hidden" name="_method" value="PUT" >
                                        @csrf
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="nama">Nama</label> <input type="text"
                                                    class="form-control" name="name" placeholder=""
                                                    value="{{ $user->name }}">
                                                @error('name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                    type="text" class="form-control" name="username" placeholder=""
                                                    value="{{ $user->username }}">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                    class="form-control" name="email" placeholder=""
                                                    value="{{ $user->email }}">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                                    type="password" name="password" class="form-control" placeholder=""
                                                    value=""> </div>
                                        </div>
                                        <hr>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="nama_dojo">Alamat</label>
                                                <textarea cols="30" rows="10" name="lokasi" class="bg-white form-control">
                                                {{ $detail->alamat }}
                                            </textarea>
                                                @error('alamat')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Foto</label>
                                                <input type="file" class="dropify" name="foto"
                                                    data-default-file="/file/{{ $detail->file->name ?? '' }}"
                                                    data-height="200" />
                                                @error('foto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="pic">Dojo</label>
                                                <select class="form-control select2 @error('id_dojo') is-invalid @enderror"
                                                    name="id_dojo">
                                                    <option label="Choose one">
                                                    </option>
                                                    @foreach ($dojo as $doji)
                                                        @if ($detail->id_dojo == $doji->id)
                                                            <option selected value="{{ $doji->id }}">
                                                                {{ $doji->nama_dojo }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $doji->id }}">
                                                                {{ $doji->nama_dojo }}
                                                            </option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('id_dojo')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Sabut Terakhir</label>
                                                <select class="form-control select2 @error('sabut') is-invalid @enderror"
                                                    name="sabut_terakhir">
                                                    <option label="-">
                                                    </option>

                                                    <option value="none" @if ($detail->sabut_terakhir === 'Sabut Putih') selected @endif>
                                                        Sabut Putih
                                                    </option>
                                                    <option value="Sabuk Kuning"
                                                        @if ($detail->sabut_terakhir === 'Sabut Kuning') selected @endif>
                                                        Sabuk Kuning
                                                    </option>
                                                    <option value="Sabuk Biru"
                                                        @if ($detail->sabut_terakhir === 'Sabuk Biru') selected @endif>
                                                        Sabuk Biru
                                                    </option>
                                                    <option value="Sabuk Coklat"
                                                        @if ($detail->sabut_terakhir === 'Sabuk Coklat') selected @endif>
                                                        Sabuk Coklat
                                                    </option>
                                                    <option value="Sabuk Hitam"
                                                        @if ($detail->sabut_terakhir === 'Sabuk Hitam') selected @endif>
                                                        Sabuk Hitam
                                                    </option>


                                                </select>
                                                @error('sabut_terakhir')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="pic">No_hp</label> <input type="tel"
                                                    name="no_hp" class="form-control" id="mobile-number"
                                                    value="{{ old('no_hp', $detail->no_hp) }}"
                                                    placeholder="e.g. +1 702 123 4567">
                                                @error('no_hp')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                                <br>
                                                <label id="pengcab">Tahun Masuk</label> <input type="text"
                                                    class="form-control" name="tahun_masuk" placeholder=""
                                                    value="{{ $detail->tahun_masuk }}">
                                                @error('tahun_masuk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Prestasi</label>
                                                <textarea name="prestasi" cols="30" rows="10" class="bg-white form-control">{{ $detail->prestasi }}</textarea>
                                                @error('prestasi')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                </div>
                                <div class="row py-2">

                                    <div class="col-md-12 pt-md-0 pt-3"><button type="submit"
                                            class="btn btn-primary mt-4 btn-lg btn-block">Kirim</button> </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="tab-pane fade show active" id="profil" role="tabpanel">
                            <div class="d-flex align-items-start pb-3 border-bottom">
                                <label class="main-content-label my-auto">Profil</label>
                            </div>
                            <div class="py-2">
                                <div class="row py-2">
                                    <div class="col-md-6"> <label id="nama_dojo">Nama Superadmin</label> <input
                                            type="text" class="bg-white form-control" placeholder=""
                                            value="{{ $superadmin->name }}" readonly>
                                    </div>
                                    <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                            type="text" class="bg-white form-control" placeholder=""
                                            value="{{ $superadmin->username }}" readonly> </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                            class="bg-white form-control" placeholder="" value="{{ $superadmin->email }}"
                                            readonly> </div>
                                    <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                            type="password" class="bg-white form-control" placeholder=""
                                            value="*************" readonly> </div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="edit" role="tabpanel">
                            <div class="d-flex align-items-start pb-3 border-bottom">
                                <label class="main-content-label my-auto">Profil</label>
                            </div>
                            <div class="py-2">
                                <form action="{{ route('superadmin.update', $superadmin->id) }}" method="post">
                                    <input type="hidden" name="_method" value="PUT">
                                    @csrf
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="nama_superadmin">Nama Superadmin</label> <input
                                                type="text" class="form-control" name="name" placeholder=""
                                                value="{{ $superadmin->name }}">
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                type="text" class="form-control" name="username" placeholder=""
                                                value="{{ $superadmin->username }}"> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                class="form-control" name="email" placeholder=""
                                                value="{{ $superadmin->email }}"> </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                                type="password" name="password" class="form-control" placeholder=""
                                                value=""> </div>
                                    </div>
                                    <div class="row py-2">

                                        <div class="col-md-12 pt-md-0 pt-3"><button type="submit"
                                                class="btn btn-primary mt-4 btn-lg btn-block">Kirim</button> </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    @endcan

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    @if (session()->has('success'))
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Sukses", "{{ session('success') }}", "success");
                }, 1000);
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Failed", 'Mohon Form Terisi Dengan Benar', "warning");
                }, 1000);

            });
        </script>
    @endif

    @if (session()->has('failed'))
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Gagal", "{{ session('failed') }}", "warning");
                }, 1000);

            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#tablePengcab').DataTable({
                responsive: false,
                language: {
                    searchPlaceholder: 'Search...',
                    sSearch: '',
                    lengthMenu: '_MENU_ items/page',
                }
            });


            $('.form-delete').on('submit', function(e) {
                e.preventDefault();
                var form = this;
                swal({
                        title: "Hapus Data?",
                        text: "Klik hapus untuk menghapus data",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn btn-danger",
                        confirmButtonText: "Hapus",
                        closeOnConfirm: false
                    },
                    function() {
                        swal("Loading..", "Sedang Diproses", "warning");
                        setTimeout(() => {
                            form.submit();
                        }, 1000);
                    });
            });
        });
    </script>
@endsection
