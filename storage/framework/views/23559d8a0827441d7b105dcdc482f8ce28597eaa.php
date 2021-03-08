<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Dashboard Pelajar</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard Pelajar</li>
    </ol>
    <div class="row">
            <div class="container">
                <div class="row justify-content">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><?php echo e(__('Dashboard Pelajar')); ?></div>

                            <div class="card-body">
                                <?php if(session('status')): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?php echo e(session('status')); ?>


                                    </div>
                                <?php endif; ?>
                                <?php echo e(__('Anda berjaya Log Masuk!')); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/home.blade.php ENDPATH**/ ?>