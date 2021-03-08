<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Profil Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini Kata Laluan</li>
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
                <div class="card-header"><?php echo e(__('Kemaskini Kata Laluan')); ?></div>

                <div class="card-body">
                <form action="<?php echo e(route('update-std-password')); ?>" method="POST" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <div class="form-group">
                        <label>Kata Laluan Baru</label>
                        <input class="form-control" type="password" name="password">
                     </div>
                     <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Kemaskini Kata Laluan</button>
                     </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/std/std-profile-password.blade.php ENDPATH**/ ?>