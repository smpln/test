<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Maklumat Penaja</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini Penaja</li>
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
                <div class="card-header"><?php echo e(__('Maklumat Penaja')); ?></div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <div class="form-group">
                    <label>KOD PENAJA</label>
                    <input class="form-control" type="text" name="KodTajaan" value="<?php echo e($tajaan->Kod_Penaja); ?>" readonly>
                </div>
                 <div class="form-group">
                        <label>NAMA PENAJA</label>
                        <input class="form-control" type="text" name="NamaTajaan" value="<?php echo e($tajaan->Nama_Penaja); ?>">
                        <?php $__errorArgs = ['NamaState'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>
                     <div class="form-group">
                        <label>NAMA PENUH PENAJA</label>
                        <input class="form-control" type="text" name="LName" value="<?php echo e($tajaan->LName); ?>">
                        <?php $__errorArgs = ['LName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                     </div>
                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Kemaskini Penaja</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/pengurusan/tajaan/lihat.blade.php ENDPATH**/ ?>