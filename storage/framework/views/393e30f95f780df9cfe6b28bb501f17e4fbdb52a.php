<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Senarai <i>State</i></h1>
    <div class="row" >
        <div class="small">Logged in as: <?php echo e(auth()->user()->NamaPegMSD); ?></div>
        <div class="small">Logged as: <?php echo e(auth()->user()->KodLogin); ?></div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo e(__('Senarai State')); ?>

                        <div class="float-right">
                        <a href="" class="btn btn-info"> + Tambah <i>State</i> Baru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Kod <i>State</i></th>
                                <th>Nama <i>State</i></th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                            <?php $__currentLoopData = $senarai_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($state->Kod_State); ?></td>
                                <td><?php echo e($state->Nama_State); ?></td>
                                <td><?php if($state->StatusKod == '1'): ?>
                                    Aktif
                                <?php elseif($state->StatusKod == '0'): ?>
                                    Tidak Aktif
                                    <?php else: ?>
                                    Tiada Maklumat
                                <?php endif; ?> </td>
                                <td>
                                <a href="<?php echo e(route('state.lihat', $state)); ?>" class="btn btn-primary">Lihat</a>
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

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/pengurusan/state/senarai.blade.php ENDPATH**/ ?>