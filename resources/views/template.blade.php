<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha - Codeigniter Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, codeigniter 4 admin panel, template codeigniter bootstrap, php, codeigniter, php framework, web template, html5 template, php code, php html, codeigniter 4, codeigniter mvc">

    <!-- Favicon -->
    <link rel="icon"
        href="https://codeigniter.spruko.com/spruha/spruha-ltr{{ asset('/assets/img/brand/favicon.ico') }}"
        type="image/x-icon" />

    <!-- Title -->
    <title>Spruha - Codeigniter Admin & Dashboard Template</title>

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

</head>


<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('/assets/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <!-- Sidemenu -->
        @include('layouts.sidebar')
        <!-- End Sidemenu -->

        @include('layouts.header')

        <!-- Main Content-->
        <div class="main-content side-content pt-0">

            <div class="container-fluid">
                <div class="inner-body">

                    @yield('body')

                </div>
            </div>
        </div>


        <!-- Main Footer-->
        @include('layouts.footer')
        <!--End Footer-->





    </div>


    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    @include('layouts.script')

</body>

</html>
