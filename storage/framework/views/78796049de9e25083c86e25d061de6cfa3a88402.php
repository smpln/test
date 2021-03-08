<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Maklumat Pengajian Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Maklumat Pengajian</li>
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
                <div class="card-header"><?php echo e(__('Maklumat Pengajian Saya')); ?></div>

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

                <div class="table-responsive">
                    <table class="table table-hover" id="id">
                        <thead>
                        <tr align="center">
                            <th colspan="4">Maklumat Pengajian</th>
                            <th rowspan="2">Status</th>
                            <th rowspan="2">Tindakan</th>
                        </tr>
                        <tr>
                            <th>Peringkat</th>
                            <th>Bidang</th>
                            <th>Program</th>
                            <th>Negara</th>
                        </tr>
                        </thead>
                   <?php $__currentLoopData = $senaraipengajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($edu->Kod_Negara == ""): ?>
                            <tr align="center">
                                  <td colspan="6"><b>Tiada Maklumat Pengajian</b></td>
                            </tr>
                           
                         <?php else: ?>
                            <tr>
                                <td><?php echo e($edu->peringkat->NamaPeringkat); ?></td>
                                <td><?php echo e($edu->bidang->NamaBidang); ?></td>
                                <td><?php echo e($edu->program->NamaProgram); ?></td>
                                <td><?php echo e($edu->negara->Keterangan); ?></td>
                                <td><?php echo e($edu->statuspengajian->Keterangan); ?></td>
                                <td>
                                    <a href="" class="btn btn-primary">Lihat</a>
                                    </td>
                            </tr>

                          <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </table>

         <?php $__currentLoopData = $senaraipengajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <?php if($edu->Kod_Negara <> ""): ?>
                <center>
                     <a href="" class="btn btn-primary"> Tambah Maklumat Pengajian </a>
                </center>
              <?php else: ?>
              <center>
                   <a href="<?php echo e(route('std-edu-show')); ?>" class="btn btn-primary"> Isi Maklumat Pengajian </a>
                </center>
            <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/std/std-edu-list.blade.php ENDPATH**/ ?>