<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Maklumat Institusi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini Institusi</li>
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
                <div class="card-header"><?php echo e(__('Maklumat Institusi')); ?></div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <div class="form-group">
                    <label>KOD INSTITUSI</label>
                    <input class="form-control" type="text" name="KodInstitusi" value="<?php echo e($institusi->Kod_Institusi); ?>" readonly>
                </div>
                 <div class="form-group">
                        <label>NAMA INSTITUSI</label>
                        <input class="form-control" type="text" name="NamaInstitusi" value="<?php echo e($institusi->Nama_Institusi); ?>">
                        <?php $__errorArgs = ['NamaInstitusi'];
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
                        <label>STATUS</label>
                        <select name="Status" class="form-control">
                            <?php if( $institusi->StatusKod == '1'): ?>
                                <option value="<?php echo e($institusi->StatusKod); ?>">Aktif - (current)</option>
                            <?php elseif( $institusi->StatusKod == '0'): ?>
                                <option value="<?php echo e($institusi->StatusKod); ?>">Tidak Aktif - (current)</option>
                            <?php else: ?>
                                <option value="<?php echo e($institusi->StatusKod); ?>">Tiada Maklumat - (current)</option>
                             <?php endif; ?>
                            <option value="1">Aktif</option>
                               <option value="0">Tidak Aktif</option>
                    </select>
                    <?php $__errorArgs = ['Status'];
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
                    <button type="submit" class="btn btn-primary">Kemaskini Institusi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/pengurusan/institusi/lihat.blade.php ENDPATH**/ ?>