<div class="main-sidebar main-sidebar-sticky side-menu">
    <div class="sidemenu-logo">
        <a class="main-logo" href="/pages/index">
            <img src="<?php echo e(asset('/file/shindoka-logo.png')); ?>" width="50" height="50"
                class="header-brand-img desktop-logo" alt="logo">
            <img src="<?php echo e(asset('/file/shindoka-logo.png')); ?>" width="50" height="50"
                class="header-brand-img icon-logo" alt="logo">
            <img src="<?php echo e(asset('/file/shindoka-logo.png')); ?>" width="50" height="50"
                class="header-brand-img desktop-logo theme-logo" alt="logo">
            <img src="<?php echo e(asset('/file/shindoka-logo.png')); ?>" width="50" height="50"
                class="header-brand-img icon-logo theme-logo" alt="logo">
        </a>
    </div>
    <div class="main-sidebar-body">
        <ul class="nav">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isSuperadmin')): ?>
                <li class="nav-header"><span class="nav-label">Menu Utama</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-clipboard sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('pengda.index')); ?>"><span class="shape1"></span><span
                            class="shape2"></span><i class="fa fa-city sidemenu-icon"></i><span class="sidemenu-label">Pengurus
                            Daerah</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('pengcab.index')); ?>"><span class="shape1"></span><span
                            class="shape2"></span><i class="fa fa-layer-group sidemenu-icon"></i><span class="sidemenu-label">Pengurus
                            Cabang</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('dojo.index')); ?>"><span class="shape1"></span><span
                            class="shape2"></span><i class="fa fa-home sidemenu-icon"></i><span
                            class="sidemenu-label">Dojo</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('anggota.index')); ?>"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-users sidemenu-icon"></i><span class="sidemenu-label">Anggota</span></a>
                </li>


                <li class="nav-header"><span class="nav-label">Akses</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('superadmin.index')); ?>"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-user-tie sidemenu-icon"></i><span class="sidemenu-label">Superadmin</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('admin.index')); ?>"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-user sidemenu-icon"></i><span class="sidemenu-label">Admin</span></a>
                </li>
                
            <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('isAdmin')): ?>
                <li class="nav-header"><span class="nav-label">Menu Utama</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('anggota.index')); ?>"><span class="shape1"></span><span class="shape2"></span><i
                            class="fa fa-users sidemenu-icon"></i><span class="sidemenu-label">Anggota</span></a>
                </li>

            <?php else: ?>
            <li class="nav-header"><span class="nav-label">Menu Utama</span></li>
                <li class="nav-item">
                    <a class="nav-link" href="/"><span class="shape1"></span><span class="shape2"></span><i
                            class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
                </li>
            <?php endif; ?>



            
            
        </ul>
    </div>
</div>
<?php /**PATH D:\BKAD MEDAN\laravel-shindoka\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>