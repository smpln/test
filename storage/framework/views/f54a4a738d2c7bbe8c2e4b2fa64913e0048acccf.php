<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Senarai Wilayah Liputan</h1>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('Senarai Wilayah Liputan')); ?>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama Negara Liputan</th>
                                <th>Tindakan</th>
                            </tr>
                            <?php $__currentLoopData = $senarai_Liputan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liput): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                            <td><?php echo e($liput->negara->Nama_Negara); ?></td>
                                <td>
                                <a href="" class="btn btn-primary">Lihat</a>
                                 </td>
                            </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/pengurusan/liputan/senarai.blade.php ENDPATH**/ ?>