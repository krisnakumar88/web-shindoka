<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha - Codeigniter Admin & Dashboard Template">
    <meta name="csrf" content="<?php echo e(csrf_token()); ?>">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, codeigniter 4 admin panel, template codeigniter bootstrap, php, codeigniter, php framework, web template, html5 template, php code, php html, codeigniter 4, codeigniter mvc">

    <!-- Favicon -->
    <link rel="icon"
        href="https://codeigniter.spruko.com/spruha/spruha-ltr<?php echo e(asset('/assets/img/brand/favicon.ico')); ?>"
        type="image/x-icon" />

    <!-- Title -->
    <title>Sistem Pengelolaan Keanggotaan Shindoka</title>

    <!-- Bootstrap css-->
    <link href="<?php echo e(asset('/assets/plugins/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?php echo e(asset('/assets/plugins/web-fonts/icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/assets/plugins/web-fonts/font-awesome/font-awesome.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/assets/plugins/web-fonts/plugin.css')); ?>" rel="stylesheet" />

    <!-- Style css-->
    <link href="<?php echo e(asset('/assets/css/style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/assets/css/skins.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/assets/css/dark-style.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/assets/css/colors/default.css')); ?>" rel="stylesheet" />

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="<?php echo e(asset('/assets/css/colors/color.css')); ?>" />

    <!-- Select2 css-->
    <link href="<?php echo e(asset('/assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="<?php echo e(asset('/assets/css/sidemenu/sidemenu.css')); ?>" rel="stylesheet">



    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="<?php echo e(asset('/assets/plugins/multipleselect/multiple-select.css')); ?>">

    

    <link href="<?php echo e(asset('/assets/plugins/datatable/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/assets/plugins/datatable/responsivebootstrap4.min.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')); ?>" rel="stylesheet" />

    

    <link href="<?php echo e(asset('/assets/plugins/select2/css/select2.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('/assets/plugins/sweet-alert/sweetalert.css')); ?>" rel="stylesheet">

    <!-- Internal Daterangepicker css-->
    <link href="<?php echo e(asset('/assets/plugins/bootstrap-daterangepicker/daterangepicker.css')); ?>" rel="stylesheet">

    <!-- InternalFileupload css-->
    <link href="<?php echo e(asset('/assets/plugins/fileuploads/css/fileupload.css')); ?>" rel="stylesheet" type="text/css" />

    <!-- InternalFancy uploader css-->
    <link href="<?php echo e(asset('/assets/plugins/fancyuploder/fancy_fileupload.css')); ?>" rel="stylesheet" />

    <!-- Internal TelephoneInput css-->
    <link rel="stylesheet" href="<?php echo e(asset('/assets/plugins/telephoneinput/telephoneinput.css')); ?>">

</head>


<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?php echo e(asset('/assets/img/loader.svg')); ?>" class="loader-img" alt="Loader">
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
                                <img src="<?php echo e(asset('/file/shindoka-logo.png')); ?>" class="ht-100 mb-0" alt="user">
                                <h5 class="mt-4 text-white">Sistem Pengelolaan Keanggotaan Shindoka</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0"></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">

                                        
                                        <img src="<?php echo e(asset('/assets/img/brand/logo.png')); ?>"
                                            class=" d-lg-none header-brand-img text-left float-left mb-4"
                                            alt="logo">
                                        <div class="clearfix"></div>
                                        
                                        <form action="/login" method="POST">
                                            <h5 class="text-left mb-2">Login</h5>
                                            <?php echo csrf_field(); ?>
                                            <p class="mb-4 text-muted tx-13 ml-0 text-left">Sistem Informasi Shindoka
                                            </p>
                                            
                                            <div class="form-group text-left">
                                                <label>Username</label>
                                                <input class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    name="username" placeholder="Username" type="text"
                                                    value="<?php echo e(old('username')); ?>">
                                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Password</label>
                                                <input class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                    placeholder="Password" type="password" name="password">
                                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="invalid-feedback">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <button class="btn ripple btn-main-primary btn-block" type="submit">Masuk</button>
                                                
                                        </form>
                                        <div class="text-left mt-5 ml-0">
                                            <?php if(session()->has('failed')): ?>
                                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                <span class="alert-inner--icon"><i class="fe fe-info"></i></span>
                                                <span class="alert-inner--text"><strong>Gagal Login! </strong><?php echo e(session('failed')); ?></span>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                        
                                        <?php endif; ?>
                                            
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




    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(session()->has('failed')): ?>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Gagal", "<?php echo e(session('failed')); ?>", "warning");
                }, 1000);

            });
        </script>
    <?php endif; ?>

</body>

</html>
<?php /**PATH D:\BKAD MEDAN\laravel-shindoka\resources\views/login/index.blade.php ENDPATH**/ ?>