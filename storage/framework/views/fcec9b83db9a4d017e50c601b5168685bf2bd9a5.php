<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Senarai Education Malaysia')); ?></div>
                <div class="card">
                <form action="" method="GET" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                    <div class="form-group row">

                        <label for="title" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Education Malaysia')); ?></label>
                        <div class="dropdown">
                                <select name="EM" class="form-control">
                              
                                   <option value=" "></option>
                                
                                    <option value="ALL">SEMUA</option>
                                 </select>
                            <?php $__errorArgs = ['EM'];
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
                        <div class="card">
                        <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                    </div>
                    </form>

                    <table class="table">
                        <tr>
                            <th>Nama Negara Liputan</th>

                        </tr>
                        <?php $__currentLoopData = $senarai_Liputan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $liput): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($liput->Kod_NegaraLiputan); ?></td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>


                </table>
            </div>
         </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/edumas/senaraiEM.blade.php ENDPATH**/ ?>