<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Senarai Education Malaysia')); ?></div>

                <div class="form-group">
                    <label for="name">Senarai Education Malaysia</label>
                    <select name="em_id" id="" class="form-control">
                      <?php $__currentLoopData = $em; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->ID_EM); ?>"><?php echo e($key->Name_EM); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>

               
<hr>
                   <table class="table" >
                       <tr>
                           <th>Bil</th>
                           <th>Negara di bawah Wilayah EM</th>
                       </tr>
                       
                       <tr>
                       <td></td>
                       <td></td>
                    </tr>
                       
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/edumas/index.blade.php ENDPATH**/ ?>