<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Maklumat Waris Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Maklumat Waris</li>
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
                        <?php if(session('warning')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo e(session('warning')); ?>

                        </div>
                    <?php endif; ?>
            <div class="card">
                <div class="card-header"><?php echo e(__('Maklumat Waris Saya')); ?></div>

                <div class="card-body">

                <div class="form-group row">
                    <label for="NoKadPengenalan" class="col-sm-1 col-form-label">NO KP</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="NoKadPengenalan" placeholder="No Kad Pengenalan" value="<?php echo e($user->NoKadPengenalan); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Nama" class="col-sm-1 col-form-label">NAMA</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="Nama" placeholder="Nama" value="<?php echo e($user->Nama); ?>" readonly>
                    </div>
                </div>
                

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Nama Waris</th>
                            <th>No Kad Pengenalan Waris</th>
                            <th>Hubungan</th>
                            <th>No Telefon</th>
                            <th>Tindakan</th>
                        </tr>
                  <?php $__currentLoopData = $senaraiwaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $waris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($waris->NoKadPengenalan_Waris == ""): ?>
                            <tr align="center">
                                  <td colspan="5"><b>Tiada Maklumat Waris</b></td>
                            </tr>
                           
                        <?php else: ?>
                            <tr>
                                <td><?php echo e($waris->Nama_Waris); ?></td>
                                <td><?php echo e($waris->NoKadPengenalan_Waris); ?></td>
                                <td><?php echo e($waris->hubungan->Keterangan); ?></td>
                                <td><?php echo e($waris->NoTel_Waris); ?></td>
                                <td>
                                    <a href="<?php echo e(route('std-waris-show3',$waris->Id)); ?>" class="btn btn-primary">Lihat</a>
                                    </td>
                            </tr>

                          <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </table>
                
                <?php if($waris->NoKadPengenalan_Waris <> ""): ?>
                <center>
                     <a href="<?php echo e(route('std-waris-show2')); ?>" class="btn btn-primary"> Tambah Maklumat Waris </a>
                </center>
              <?php else: ?>
              <center>
                   <a href="<?php echo e(route('std-waris-show')); ?>" class="btn btn-primary"> Isi Maklumat Waris </a>
                </center>
            <?php endif; ?>
        
                </div>
            </div>
        </div>



    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/std/std-waris.blade.php ENDPATH**/ ?>