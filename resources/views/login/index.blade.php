<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha - Codeigniter Admin & Dashboard Template">
    <meta name="csrf" content="{{ csrf_token() }}">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, codeigniter 4 admin panel, template codeigniter bootstrap, php, codeigniter, php framework, web template, html5 template, php code, php html, codeigniter 4, codeigniter mvc">

    <!-- Favicon -->
    <link rel="icon"
        href="https://codeigniter.spruko.com/spruha/spruha-ltr{{ asset('/assets/img/brand/favicon.ico') }}"
        type="image/x-icon" />

    <!-- Title -->
    <title>Sistem Pengelolaan Keanggotaan Shindoka</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/skins.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/css/colors/default.css') }}" rel="stylesheet" />

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('/assets/css/colors/color.css') }}" />

    <!-- Select2 css-->
    <link href="{{ asset('/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="{{ asset('/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">



    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/multipleselect/multiple-select.css') }}">

    {{-- Datatable --}}

    <link href="{{ asset('/assets/plugins/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/datatable/responsivebootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css') }}" rel="stylesheet" />

    {{-- SweetAlert --}}

    <link href="{{ asset('/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet">

    <!-- Internal Daterangepicker css-->
    <link href="{{ asset('/assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- InternalFileupload css-->
    <link href="{{ asset('/assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

    <!-- InternalFancy uploader css-->
    <link href="{{ asset('/assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

    <!-- Internal TelephoneInput css-->
    <link rel="stylesheet" href="{{ asset('/assets/plugins/telephoneinput/telephoneinput.css') }}">

</head>


<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <!-- Page -->
    <div class="page main-signin-wrapper">

        <!-- Row -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-4 p-2 pos-absolute">
                                <br>
                                <div class="clearfix"></div>
                                <img src="{{ asset('/file/shindoka-logo.png') }}" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">Sistem Pengelolaan Keanggotaan Shindoka</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">


                                        <img src="{{ asset('/assets/img/brand/logo.png') }}"
                                            class=" d-lg-none header-brand-img text-left float-left mb-4"
                                            alt="logo">
                                        <div class="clearfix"></div>

                                        <form action="/login" method="POST">
                                            <h5 class="text-left mb-2">Login</h5>
                                            @csrf
                                            <p class="mb-4 text-muted tx-13 ml-0 text-left">Sistem Informasi Shindoka
                                            </p>

                                            <div class="form-group text-left">
                                                <label>Username</label>
                                                <input class="form-control @error('username') is-invalid @enderror"
                                                    name="username" placeholder="Username" type="text"
                                                    value="{{ old('username') }}">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="Password" type="password" name="password">
                                                @error('username')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <button class="btn ripple btn-main-primary btn-block"
                                                type="submit">Masuk</button>

                                            <div class="text-start mt-5 ms-0">
                                                <div>Belum Menjadi Anggota? <a href="{{ route('register') }}">Daftar Disini</a></div>
                                            </div>

                                        </form>
                                        <div class="text-left mt-5 ml-0">
                                            @if (session()->has('failed'))
                                                <div class="alert alert-warning alert-dismissible fade show"
                                                    role="alert">
                                                    <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                                                    <span class="alert-inner--text"><strong>Gagal Login!
                                                        </strong>{{ session('failed') }}</span>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                            @endif
                                            {{-- <div class="mb-1"><a href="{{ asset('pages/forgot') }}">Forgot password?</a></div>
												<div>Don't have an account? <a href="{{ asset('pages/signup') }}">Register Here</a></div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->

    </div>
    <!-- End Page -->




    @include('layouts.script')

    @if (session()->has('failed'))
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Gagal", "{{ session('failed') }}", "warning");
                }, 1000);

            });
        </script>
    @endif

</body>

</html>
