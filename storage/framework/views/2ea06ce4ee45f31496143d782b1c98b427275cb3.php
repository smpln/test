<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Tambah Maklumat Waris Saya</h1>
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
            <div class="card">
                <div class="card-header"><?php echo e(__('Maklumat Waris Saya')); ?></div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="NoKadPengenalan" class="col-sm-2 col-form-label">NO KP</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="NoKadPengenalan" placeholder="No Kad Pengenalan" value="<?php echo e($user->NoKadPengenalan); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="Nama" placeholder="Nama" value="<?php echo e($user->Nama); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NoKadPengenalan_Waris" class="col-sm-2 col-form-label">NO KP WARIS</label>
                    <div class="col-sm-4">
                      <input type="text" id="NoKadPengenalan_Waris" class="form-control <?php $__errorArgs = ['NoKadPengenalan_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  maxlength="12" placeholder="No Kad Pengenalan Waris" name="NoKadPengenalan_Waris" value="<?php echo e(old('NoKadPengenalan_Waris')); ?>" required>

                      <?php $__errorArgs = ['NoKadPengenalan_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Nama_Waris" class="col-sm-2 col-form-label">NAMA WARIS</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="Nama_Waris" placeholder="Nama Waris" name="Nama_Waris" value="<?php echo e(old('Nama_Waris')); ?>" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Alamat_Waris" class="col-sm-2 col-form-label">ALAMAT WARIS</label>
                    <div class="col-sm-6">
                      <textarea class="form-control" id="Alamat_Waris" rows="3" class="form-control <?php $__errorArgs = ['Alamat_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Alamat_Waris" placeholder="Sila Isi Alamat Waris" value="<?php echo e(old('Alamat_Waris')); ?>" required autocomplete="Alamat_Waris"></textarea>

                      <?php $__errorArgs = ['Alamat_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Poskod_Waris" class="col-sm-2 col-form-label">POSKOD WARIS</label>

                    <div class="col-md-3">
                        <input id="Poskod_Waris" type="text" class="form-control <?php $__errorArgs = ['Poskod_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Poskod_Waris" placeholder="Sila Isi Poskod Waris" value="<?php echo e(old('Poskod_Waris')); ?>" required autocomplete="Poskod_Waris">

                        <?php $__errorArgs = ['Poskod_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Bandar_Waris" class="col-sm-2 col-form-label">BANDAR WARIS</label>

                    <div class="col-md-3">
                        <input id="Bandar_Waris" type="text" class="form-control <?php $__errorArgs = ['Bandar_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bandar_Waris" placeholder="Sila Isi Bandar Waris" value="<?php echo e(old('Bandar_Waris')); ?>" required autocomplete="Bandar_Waris">

                        <?php $__errorArgs = ['Bandar_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Negeri_Waris" class="col-sm-2 col-form-label">NEGERI WARIS</label>
                    <div class="col-sm-6">
                      
                       <select name="Kod_NegeriWaris" class="form-control" required>
                        
                        <option value="">Sila Pilih Negeri</option>
                        <?php $__currentLoopData = $negeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <option value="<?php echo e($n->Kod_Negeri); ?>"><?php echo e($n->NamaNegeri); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Negara_Waris" class="col-sm-2 col-form-label">NEGARA WARIS</label>
                    <div class="col-sm-6">
                      
                       <select name="Kod_NegaraWaris" class="form-control" required>
                        
                        <option value="">Sila Pilih Negara</option>
                        <?php $__currentLoopData = $negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <option value="<?php echo e($country->Kod_Negara); ?>"><?php echo e($country->Keterangan); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NoTel_Waris" class="col-sm-2 col-form-label">NO. TELEFON WARIS</label>

                    <div class="col-md-3">
                        <input id="NoTel_Waris" type="text" class="form-control <?php $__errorArgs = ['NoTel_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="NoTel_Waris" placeholder="Sila Isi No Telefon Waris" value="<?php echo e(old('NoTel_Waris')); ?>" required autocomplete="NoTel_Waris">

                        <?php $__errorArgs = ['NoTel_Waris'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Hubungan_Waris" class="col-sm-2 col-form-label">HUBUNGAN WARIS</label>
                    <div class="col-sm-6">
                      
                       <select name="Hubungan_Waris" class="form-control" required>
                        
                        <option value="">Sila Pilih Hubungan Waris</option>
                        <?php $__currentLoopData = $hubungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relationship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <option value="<?php echo e($relationship->Kod_Hubungan); ?>"><?php echo e($relationship->Keterangan); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>
                </div>

                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Simpan Maklumat Waris</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smpln2\resources\views/std/std-waris-show.blade.php ENDPATH**/ ?>