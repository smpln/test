<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4"> Senarai Penaja</h1>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('Senarai Penaja')); ?>

                        <div class="float-right">
                        <a href="" class="btn btn-info"> + Tambah Penaja Baru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Kod Penaja</th>
                                <th>Nama Penaja</th>
                                <th>Nama Penuh Penaja</th>
                                <th>Tindakan</th>
                            </tr>
                            <?php $__currentLoopData = $senarai_tajaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penaja): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($penaja->Kod_Penaja); ?></td>
                                <td><?php echo e($penaja->Nama_Penaja); ?></td>
                                <td><?php echo e($penaja->LName); ?></td>
                                <td>
                                <a href="<?php echo e(route('tajaan.lihat', $penaja)); ?>" class="btn btn-primary">Lihat</a>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/pengurusan/tajaan/senarai.blade.php ENDPATH**/ ?>