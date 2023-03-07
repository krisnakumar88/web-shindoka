

<?php $__env->startSection('body'); ?>
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5">Pengurus Cabang</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengurus Cabang</li>
            </ol>
        </div>
        <div class="d-flex">
            <div class="justify-content-center">
                
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
                                            <th class="wd-20p">Nama Pengurus Cabang</th>
                                            <th class="wd-20p">Penanggung Jawab</th>
                                            <th class="wd-20p text-center">Alamat</th>
                                            <th class="wd-20p">Pengurus Daerah</th>
                                            <th class="wd-10p"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td class=""><?php echo e($item->nama_pengcap); ?></td>
                                                <td><?php echo e($item->pic); ?><i class=""></i></td>
                                                <td class="text-center">
                                                    <textarea class="form-control" readonly cols="30" rows="2"><?php echo e($item->lokasi); ?></textarea>
                                                </td>
                                                <td>
                                                    <?php echo e($item->pengda->nama_pengda); ?>

                                                </td>
                                                <td class="text-center">
                                                    <div class="btn btn-list">
                                                        <button class="btn ripple btn-primary" data-toggle="dropdown">Action
                                                            <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
                                                        <div class="dropdown-menu">
                                                            <form action="<?php echo e(route('pengcab.destroy', $item->id)); ?>"
                                                                method="post" class="form-delete">
                                                                <?php echo csrf_field(); ?>
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" class="dropdown-item"
                                                                    data-toggle="tooltip" id="delete-button">Delete</button>
                                                            </form>
                                                            <button class="dropdown-item"
                                                                data-target="#modal-update-<?php echo e($item->id); ?>"
                                                                data-toggle="modal">Edit</button>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- Row end -->


    
    <div class="modal fade" id="modal-tambah">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body pd-20 pd-sm-40">
                    <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal"
                        type="button"><span aria-hidden="true">&times;</span></button>
                    <h5 class="modal-title mb-4 text-center">Tambah Pengurus Cabang</h5>
                    <div class="">
                        <form action="<?php echo e(route('pengcab.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label class="">Nama Pengurus Cabang</label>
                                <input class="form-control <?php $__errorArgs = ['nama_pengcap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                                    type="text" name="nama_pengcap" value="<?php echo e(old('nama_pengcap')); ?>">
                                <?php $__errorArgs = ['nama_pengcap'];
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
                            <div class="form-group">
                                <label class="">Pengurus Daerah</label>
                                <select class="form-control select2 <?php $__errorArgs = ['id_pengda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    name="id_pengda">
                                    <option label="Choose one">
                                    </option>
                                    <?php $__currentLoopData = $pengda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($item->id); ?>">
                                            <?php echo e($item->nama_pengda); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['id_pengda'];
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
                            <div class="form-group">
                                <label class="">Penanggung Jawab</label>
                                <input class="form-control <?php $__errorArgs = ['pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required type="text"
                                    name="pic" value="<?php echo e(old('pic')); ?>">
                                <?php $__errorArgs = ['pic'];
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
                            <div class="form-group">
                                <label class="">Alamat</label>
                                <textarea class="form-control <?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lokasi" cols="5" rows="5"><?php echo e(old('lokasi')); ?></textarea>
                                <?php $__errorArgs = ['lokasi'];
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

                            <button class="btn ripple btn-main-primary btn-block" id="submit">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="modal-update-<?php echo e($item->id); ?>">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body pd-20 pd-sm-40">
                        <button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                        <h5 class="modal-title mb-4 text-center">Update Pengurus Cabang</h5>
                        <div class="">
                            <form action="<?php echo e(route('pengcab.update', $item->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label class="">Nama Pengurus Daerah</label>
                                    <input class="form-control <?php $__errorArgs = ['nama_pengcap'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required
                                        type="text" name="nama_pengcap"
                                        value="<?php echo e(old('nama_pengcap', $item->nama_pengcap)); ?>">
                                    <?php $__errorArgs = ['nama_pengcap'];
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
                                <div class="form-group">
                                    <label class="">Pengurus Daerah</label>
                                    <select class="form-control select2 <?php $__errorArgs = ['id_pengda'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        name="id_pengda">
                                        <option label="Choose one">
                                        </option>
                                        <?php $__currentLoopData = $pengda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daerah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item->pengda->id == $daerah->id): ?>
                                                <option  selected value="<?php echo e($daerah->id); ?>">
                                                    <?php echo e($daerah->nama_pengda); ?>

                                                </option>
                                            <?php else: ?>
                                                <option value="<?php echo e($daerah->id); ?>">
                                                    <?php echo e($daerah->nama_pengda); ?>

                                                </option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['id_pengda'];
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
                                <div class="form-group">
                                    <label class="">Penanggung Jawab</label>
                                    <input class="form-control <?php $__errorArgs = ['pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" required type="text"
                                        name="pic" value="<?php echo e(old('pic', $item->pic)); ?>">
                                    <?php $__errorArgs = ['pic'];
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
                                <div class="form-group">
                                    <label class="">Alamat</label>
                                    <textarea class="form-control <?php $__errorArgs = ['lokasi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lokasi" cols="5" rows="5"><?php echo e(old('lokasi', $item->lokasi)); ?></textarea>
                                    <?php $__errorArgs = ['lokasi'];
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
                                <button class="btn ripple btn-main-primary btn-block" id="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BKAD MEDAN\laravel-shindoka\resources\views/pengcap/index.blade.php ENDPATH**/ ?>