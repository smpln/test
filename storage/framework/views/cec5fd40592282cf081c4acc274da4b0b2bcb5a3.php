<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Profil Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini Profil</li>
    </ol>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
            <div class="card">
                <div class="card-header"><?php echo e(__('Profil Saya')); ?></div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <div class="form-group">
                    <label>NO KAD PENGENALAN</label>
                    <input class="form-control" type="text" name="NoKadPengenalan" value="<?php echo e($user->NoKadPengenalan); ?>" readonly>
                </div>
                <div class="form-group">
                    <label>NAMA</label>
                    <input class="form-control" type="text" name="NAMA" value="<?php echo e($user->Nama); ?>">
                </div>
                    <div class="form-group">
                        <label>EMEL</label>
                        <input class="form-control" type="email" name="EMAIL" value="<?php echo e($user->Emel); ?>">
                    </div>
                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Kemaskini Profil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/std/std-profile.blade.php ENDPATH**/ ?>