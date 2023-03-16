@extends('template')

@section('body')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">Admin</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Admin</li>
            </ol>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">
                {{-- <button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
                    <i class="fe fe-download mr-2"></i> Import
                </button>
                <button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
                    <i class="fe fe-filter mr-2"></i> Filter
                </button> --}}
                <button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#modal-tambah"
                    data-toggle="modal">
                    <i class="fe fe-upload mr-2"></i> Tambah
                </button>
            </div>
        </div>
    </div>
    <!-- End Page Header -->

    <!--Row-->
    <div class="row row-sm">


        <div class="col-sm-12 col-lg-12 col-xl-12">
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card mg-b-20">
                        <div class="card-body">
                            <div class="card-header border-bottom-0 pt-0 pl-0 pr-0 d-flex">


                            </div>
                            <div class="table-responsive">
                                <table class="table" id="tablePengcab">
                                    <thead>
                                        <tr>
                                            <th class="wd-20p">Nama</th>
                                            <th class="wd-20p">Username</th>
                                            <th class="wd-20p">Email</th>
                                            <th class="wd-20p">Dojo</th>
                                            <th class="wd-10p"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>

                                                <td class="">{{ $item->user->name }}</td>
                                                <td>{{ $item->user->username }}<i class=""></i></td>
                                                <td>{{ $item->user->email }}</td>
                                                <td>{{ $item->dojo->nama_dojo }}</td>


                                                <td class="text-center">
                                                    <div class="btn btn-list">

                                                        <button class="btn ripple btn-primary" data-toggle="dropdown">Action
                                                            <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                                        <div class="dropdown-menu">
                                                        
                                                            <form action="{{ route('admin.destroy', $item->id) }}"
                                                                method="post" class="form-delete">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="dropdown-item"
                                                                    data-toggle="tooltip" id="delete-button">Delete</button>
                                                            </form>
                                                            <button class="dropdown-item"
                                                                data-target="#modal-update-{{ $item->id }}"
                                                                data-toggle="modal">Edit</button>


                                                        </div>

                                                    </div>
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
        </div>

    </div><!-- Row end -->


    {{-- Modal --}}
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body pd-20 pd-sm-40">
                    <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title mb-4 text-center">Tambah Admin</h5>
                    <div class="">
                        <form action="{{ route('admin.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="">Nama Admin</label>
                                <input class="form-control @error('name') is-invalid @enderror" required type="text"
                                    name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">Email</label>
                                <input class="form-control @error('email') is-invalid @enderror" required type="email"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">Username</label>
                                <input class="form-control @error('username') is-invalid @enderror" required type="text"
                                    name="username" value="{{ old('username') }}">
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" required type="password"
                                    name="password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">Dojo</label>
                                <select class="form-control select2 @error('id_dojo') is-invalid @enderror" name="id_dojo">
                                    <option label="Choose one">
                                    </option>
                                    @foreach ($dojo as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->nama_dojo }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_dojo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">No. Hp</label>
                                    <input type="tel" name="no_hp" class="form-control">
                                @error('no_hp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                    </div>

                    <button class="btn ripple btn-main-primary btn-block" id="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    @foreach ($data as $item)
        <div class="modal fade" id="modal-update-{{ $item->id }}">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body pd-20 pd-sm-40">
                        <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                        <h5 class="modal-title mb-4 text-center">Update Admin</h5>
                        <div class="">
                            <form action="{{ route('admin.update', $item->id) }}" method="post">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="form-group">
                                    <label class="">Nama Admin</label>
                                    <input class="form-control @error('name') is-invalid @enderror" required
                                        type="text" name="name" value="{{ old('name', $item->user->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Email</label>
                                    <input class="form-control @error('email') is-invalid @enderror" required
                                        type="email" name="email" value="{{ old('email', $item->user->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Username</label>
                                    <input class="form-control @error('username') is-invalid @enderror" required
                                        type="text" name="username" value="{{ old('username', $item->user->username) }}">
                                    @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Password</label>
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" value="{{ old('password') }}">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Dojo</label>
                                    <select class="form-control select2 @error('id_dojo') is-invalid @enderror"
                                        name="id_dojo">
                                        <option label="Choose one">
                                        </option>
                                        @foreach ($dojo as $doji)
                                            @if ($doji->id == $item->id_dojo)
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
                                <div class="form-group">
                                    <label class="">No. Hp</label>
                                        <input type="tel" name="no_hp" class="form-control" value="{{ old('no_hp', $item->no_hp) }}">
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>



                        </div>

                        <button class="btn ripple btn-main-primary btn-block" id="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endforeach
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
