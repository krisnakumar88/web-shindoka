

<?php $__env->startSection('body'); ?>
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
                            <img src="<?php echo e(asset('file/shindoka-logo.png')); ?>" class="rounded-circle" width="200"
                                alt="user-admin">
                        </div>
                        <a href="#" class="text-dark">
                            <h5 class="mt-3 mb-0 font-weight-semibold"><?php echo e(Auth::user()->name); ?></h5>
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
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                            <div class="tab-pane fade show active" id="profil" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">Profil</label>
                                </div>
                                <div class="py-2">
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="nama_dojo">Nama Admin</label> <input type="text"
                                                class="bg-white form-control" placeholder="" value="<?php echo e($user->name); ?>"
                                                readonly>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="<?php echo e($user->username); ?>" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                class="bg-white form-control" placeholder="" value="<?php echo e($user->email); ?>"
                                                readonly> </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                                type="password" class="bg-white form-control" placeholder=""
                                                value="*************" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6">
                                            <label for="country">No. Hp</label>
                                            <input type="tel" class="bg-white form-control" placeholder=""
                                                value="<?php echo e($admin->no_hp); ?>" readonly>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3">
                                            <label for="country">Nama Dojo</label>
                                            <input type="text" class="bg-white form-control" placeholder=""
                                                value="<?php echo e($admin->dojo->nama_dojo); ?>" readonly>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="edit" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">Profil</label>
                                </div>
                                <div class="py-2">
                                    <form action="<?php echo e(route('admin.update', $admin->id)); ?>" method="post">
                                        <input type="hidden" name="_method" value="PUT">
                                        <?php echo csrf_field(); ?>

                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="nama_dojo">Nama Admin</label> <input
                                                    type="text" class="form-control" name="name" placeholder=""
                                                    value="<?php echo e($user->name); ?>">
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                    type="text" class="form-control" name="username" placeholder=""
                                                    value="<?php echo e($user->username); ?>"> </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                    class="form-control" name="email" placeholder=""
                                                    value="<?php echo e($user->email); ?>"> </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Password</label> <input
                                                    type="password" name="password" class="form-control" placeholder=""
                                                    value=""> </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6">
                                                <label for="country">No. Hp</label>
                                                <input type="tel" class="form-control" placeholder="" name="no_hp"
                                                    value="<?php echo e($admin->no_hp); ?>">
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"><button type="submit"
                                                    class="btn btn-primary mt-4 btn-lg btn-block">Kirim</button> </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="tab-pane fade show active" id="profil" role="tabpanel">
                                <div class="d-flex align-items-start pb-3 border-bottom">
                                    <label class="main-content-label my-auto">Profil</label>
                                </div>
                                <div class="py-2">
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="nama_dojo">Nama Superadmin</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="<?php echo e($superadmin->name); ?>" readonly>
                                        </div>
                                        <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                type="text" class="bg-white form-control" placeholder=""
                                                value="<?php echo e($superadmin->username); ?>" readonly> </div>
                                    </div>
                                    <div class="row py-2">
                                        <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                class="bg-white form-control" placeholder=""
                                                value="<?php echo e($superadmin->email); ?>" readonly> </div>
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
                                    <form action="<?php echo e(route('superadmin.update', $superadmin->id)); ?>" method="post">
                                        <input type="hidden" name="_method" value="PUT">
                                        <?php echo csrf_field(); ?>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="nama_superadmin">Nama Superadmin</label> <input
                                                    type="text" class="form-control" name="name" placeholder=""
                                                    value="<?php echo e($superadmin->name); ?>">
                                            </div>
                                            <div class="col-md-6 pt-md-0 pt-3"> <label id="pengcab">Username</label> <input
                                                    type="text" class="form-control" name="username" placeholder=""
                                                    value="<?php echo e($superadmin->username); ?>"> </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-md-6"> <label id="pic">Email</label> <input type="email"
                                                    class="form-control" name="email" placeholder=""
                                                    value="<?php echo e($superadmin->email); ?>"> </div>
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
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if(session()->has('success')): ?>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Sukses", "<?php echo e(session('success')); ?>", "success");
                }, 1000);
            });
        </script>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Failed", 'Mohon Form Terisi Dengan Benar', "warning");
                }, 1000);

            });
        </script>
    <?php endif; ?>

    <?php if(session()->has('failed')): ?>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    swal("Gagal", "<?php echo e(session('failed')); ?>", "warning");
                }, 1000);

            });
        </script>
    <?php endif; ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BKAD MEDAN\laravel-shindoka\resources\views/profile/index.blade.php ENDPATH**/ ?>