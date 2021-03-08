<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion" style="background-color: #edeefd;">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <img src="<?php echo e(url('/storage/images/logo1.png')); ?>" width="90%" height="90%">
                <?php if(auth()->user()->ImageFile): ?>
                <center>
                <img src="<?php echo e(asset('/storage/'.auth()->user()->ImageFile)); ?>" width="90" height="90">
                </center>
                <?php endif; ?>
                <div class="sb-sidenav-menu-heading">Tarikh : <?php echo e(date('d-m-Y H:i:s')); ?></div>
                <a class="nav-link" href="<?php echo e(route('home')); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="far fa-user"></i></div>
                    Pengurusan Profil
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('std-profile')); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-id-badge"></i></div>
                            Profil
                        </a>
                        <a class="nav-link" href="<?php echo e(route('std-profile-password')); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div>
                            Tukar Kata Laluan
                        </a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fa fa-user-circle"></i></div>
                Pengurusan Maklumat
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo e(route('std-detail')); ?>">
                            <div class="sb-nav-link-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                            Butiran Peribadi
                        </a>
                        <a class="nav-link" href="<?php echo e(route('std-waris')); ?>">
                            <div class="sb-nav-link-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
                            Butiran Waris
                        </a>
                        <a class="nav-link" href="<?php echo e(route('std-edu-list')); ?>">
                            <div class="sb-nav-link-icon"><i class="fa fa-university" aria-hidden="true"></i></div>
                            Butiran Pengajian
                        </a>
                    </nav>
                </div>
            </div>

        </div>
        <div class="sb-sidenav-footer"  style="background-color: #edeefd;" >
            <div class="small">Logged in as: <?php echo e(auth()->user()->Nama); ?></div>
            <div class="small">Logged as: <?php echo e(auth()->user()->NoKadPengenalan); ?></div>
        </div>
    </nav>
<?php /**PATH C:\laragon\www\smpln2\resources\views/layouts/partials/sidebarStd.blade.php ENDPATH**/ ?>