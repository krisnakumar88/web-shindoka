@extends('template')

@section('body')
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">Dojo</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dojo</li>
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
                                <table class="table" id="tableDojo">
                                    <thead>
                                        <tr>
                                            <th class="wd-20p">Nama Dojo</th>
                                            <th class="wd-20p">Person In Charge</th>
                                            <th class="wd-20p text-center">Alamat</th>
                                            <th class="wd-20p">Pengurus Cabang</th>
                                            <th class="wd-10p"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td class="">{{ $item->nama_dojo }}</td>
                                                <td>{{ $item->pic }}<i class=""></i></td>
                                                <td class="text-center">
                                                    <textarea class="form-control" readonly cols="30" rows="2">{{ $item->lokasi }}</textarea>
                                                </td>
                                                <td>
                                                    {{ $item->pengcap->nama_pengcap }}
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn btn-list">
                                                        <button class="btn ripple btn-primary" data-toggle="dropdown">Action
                                                            <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                                        <div class="dropdown-menu">
                                                            <form action="{{ route('dojo.destroy', $item->id) }}"
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
                    <h5 class="modal-title mb-4 text-center">Tambah Dojo</h5>
                    <div class="">
                        <form action="{{ route('dojo.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="">Nama Dojo</label>
                                <input class="form-control @error('nama_dojo') is-invalid @enderror" required
                                    type="text" name="nama_dojo" value="{{ old('nama_dojo') }}">
                                @error('nama_dojo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">Pengurus Cabang</label>
                                <select class="form-control select2 @error('id_pengcap') is-invalid @enderror"
                                    name="id_pengcap">
                                    <option label="Choose one">
                                    </option>
                                    @foreach ($pengcab as $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->nama_pengcap }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_pengcap')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">Person In Charge</label>
                                <input class="form-control @error('pic') is-invalid @enderror" required type="text"
                                    name="pic" value="{{ old('pic') }}">
                                @error('pic')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="">Alamat</label>
                                <textarea class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" cols="5" rows="5">{{ old('lokasi') }}</textarea>
                                @error('lokasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
                        <h5 class="modal-title mb-4 text-center">Update Dojo</h5>
                        <div class="">
                            <form action="{{ route('dojo.update', $item->id) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label class="">Nama Dojo</label>
                                    <input class="form-control @error('nama_dojo') is-invalid @enderror" required
                                        type="text" name="nama_dojo"
                                        value="{{ old('nama_dojo', $item->nama_dojo) }}">
                                    @error('nama_dojo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Pengurus Cabang</label>
                                    <select class="form-control select2 @error('id_pengcap') is-invalid @enderror"
                                        name="id_pengda">
                                        <option label="Choose one">
                                        </option>
                                        @foreach ($pengcap as $cabang)
                                            @if ($item->pengcap->id == $cabang->id)
                                                <option  selected value="{{ $cabang->id }}">
                                                    {{ $cabang->nama_pengda }}
                                                </option>
                                            @else
                                                <option value="{{ $cabang->id }}">
                                                    {{ $cabang->nama_pengda }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('id_pengcap')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Person In Charge</label>
                                    <input class="form-control @error('pic') is-invalid @enderror" required type="text"
                                        name="pic" value="{{ old('pic', $item->pic) }}">
                                    @error('pic')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="">Alamat</label>
                                    <textarea class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" cols="5" rows="5">{{ old('lokasi', $item->lokasi) }}</textarea>
                                    @error('lokasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                    swal("Failed", 'Mohon Form Terisi Dengan Benar', "danger");
                }, 1000);

            });
        </script>
    @endif

    @if (session()->has('failed'))
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Gagal", "{{ session('failed') }}", "danger");
                }, 1000);

            });
        </script>
    @endif

    <script>
        $(document).ready(function() {
            $('#tableDojo').DataTable({
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
