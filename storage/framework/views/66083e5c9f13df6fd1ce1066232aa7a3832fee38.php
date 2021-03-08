<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Senarai Education Malaysia')); ?></div>
                <div class="card">
                    <div class="card-body">
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Education Malaysia')); ?></label>
                        <div class="col-md-6">

                        <select name="em_id" id="" class="form-control" >
                          <?php $__currentLoopData = $senarai_em; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $em): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($em->Kod_EM); ?>"><?php echo e($em->Name_EM); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Bil</th>
                                <th>Negara di bawah Wilayah</th>
                                <th>Education Malaysia</th>
                            </tr>
                            <?php $__currentLoopData = $senarai_liputan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liput): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo e($liput->Kod_NegaraLiputan); ?></td>
                                <td><?php echo e($liput->edumas->Name_EM); ?></td>
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/edumas/senarai.blade.php ENDPATH**/ ?>