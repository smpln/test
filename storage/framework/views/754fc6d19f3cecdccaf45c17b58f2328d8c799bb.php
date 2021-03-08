<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4"> Senarai Institusi</h1>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('Senarai Institusi')); ?>

                        <div class="float-right">
                        <a href="" class="btn btn-info"> + Tambah Institusi Baru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Kod Institusi</th>
                                <th>Nama Institusi</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                            <?php $__currentLoopData = $senarai_inst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institusi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($institusi->Kod_Institusi); ?></td>
                                <td><?php echo e($institusi->Nama_Institusi); ?></td>
                                <td>
                                    <?php if($institusi->StatusKod == '1'): ?>
                                    Aktif
                                <?php elseif($institusi->StatusKod == '0'): ?>
                                    Tidak Aktif
                                    <?php else: ?>
                                    Tiada Maklumat
                                <?php endif; ?>
                                   </td>
                                <td>
                                <a href="<?php echo e(route('institusi.lihat', $institusi)); ?>" class="btn btn-primary">Lihat</a>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/pengurusan/institusi/senarai.blade.php ENDPATH**/ ?>