<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Maklumat Peribadi Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Maklumat Peribadi</li>
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
                <div class="card-header"><?php echo e(__('Maklumat Peribadi Saya')); ?></div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="NoKadPengenalan" class="col-sm-2 col-form-label">NO KP</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="NoKadPengenalan" placeholder="No Kad Pengenalan" value="<?php echo e($pelajar->NoKadPengenalan); ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Nama" class="col-sm-2 col-form-label">NAMA</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="Nama" placeholder="Nama" value="<?php echo e($user->Nama); ?>" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="NoPassport" class="col-sm-2 col-form-label">NO PASSPORT</label>

                    <div class="col-md-3">
                        <?php if($pelajar->NoPassport == ""): ?>
                             <input id="NoPassport" type="text" class="form-control <?php $__errorArgs = ['NoPassport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="NoPassport" placeholder="Sila Isi No Passport" value="<?php echo e(old('NoPassport')); ?>" required autocomplete="NoPassport">
                            <?php else: ?>
                            <input id="NoPassport" type="text" class="form-control <?php $__errorArgs = ['NoPassport'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="NoPassport" placeholder="Sila Isi No Passport" value="<?php echo e($pelajar->NoPassport); ?>" required autocomplete="NoPassport">
                            <?php endif; ?>
                        <?php $__errorArgs = ['NoPassport'];
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
                    <label for="TarikhLahir" class="col-sm-2 col-form-label">TARIKH LAHIR</label>

                    <div class="col-md-3">
                        <?php if($pelajar->TarikhLahir == ""): ?>
                            <input id="TarikhLahir" type="date" class="form-control <?php $__errorArgs = ['TarikhLahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="TarikhLahir" placeholder="Sila Isi Tarikh Lahir" value="<?php echo e(old('TarikhLahir')); ?>" required autocomplete="TarikhLahir">
                            <?php else: ?>
                            <input id="TarikhLahir" type="date" class="form-control <?php $__errorArgs = ['TarikhLahir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="TarikhLahir" placeholder="Sila Isi Tarikh Lahir" value="<?php echo e($pelajar->TarikhLahir); ?>" required autocomplete="TarikhLahir">
                            <?php endif; ?>
                        <?php $__errorArgs = ['TarikhLahir'];
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
                    <label for="Umur" class="col-sm-2 col-form-label">UMUR</label>

                    <div class="col-md-3">
                        <?php if($pelajar->Umur == ""): ?>
                        <input id="Umur" type="text" class="form-control <?php $__errorArgs = ['Umur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Umur" placeholder="Sila Isi Umur" value="<?php echo e(old('Umur')); ?>" required autocomplete="Umur">
                        <?php else: ?>
                        <input id="Umur" type="text" class="form-control <?php $__errorArgs = ['Umur'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Umur" placeholder="Sila Isi Umur" value="<?php echo e($pelajar->Umur); ?>" required autocomplete="Umur">
                        <?php endif; ?>
                        <?php $__errorArgs = ['Umur'];
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
                    <label for="Jantina" class="col-sm-2 col-form-label">JANTINA</label>
                    <div class="col-sm-4">
                 <?php if($pelajar->Kod_Jantina == ""): ?>
                    <select name="KodJantina" class="form-control" required>
                        <option value="">Sila Pilih Jantina</option>
                      <?php $__currentLoopData = $jantina; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($j->Kod_Jantina); ?>"><?php echo e($j->Keterangan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php else: ?>
                      <select name="KodJantina" class="form-control" required>
                        <option value="<?php echo e($pelajar->Kod_Jantina); ?>"><?php echo e($pelajar->jantina->Keterangan); ?> - (current)</option>
                      
                       <?php $__currentLoopData = $jantina; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pelajar->Kod_Jantina != $j->Kod_Jantina): ?>
                             <option value="<?php echo e($j->Kod_Jantina); ?>"><?php echo e($j->Keterangan); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NegeriLahir" class="col-sm-2 col-form-label">NEGERI KELAHIRAN</label>
                    <div class="col-sm-6">
                        <?php if($pelajar->Kod_Negeri == ""): ?>
                        <select name="KodNegeriLahir" class="form-control" required>
                                <option value="">Sila Pilih Negeri Kelahiran</option>
                            <?php $__currentLoopData = $negeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($n->Kod_Negeri); ?>"><?php echo e($n->NamaNegeri); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php else: ?>
                      
                       <select name="KodNegeriLahir" class="form-control" required>
                        <option value="<?php echo e($pelajar->Kod_Negeri); ?>"><?php echo e($pelajar->negeri->NamaNegeri); ?> - (current)</option>
                        
                        <?php $__currentLoopData = $negeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pelajar->Kod_Negeri != $n->Kod_Negeri): ?>
                             <option value="<?php echo e($n->Kod_Negeri); ?>"><?php echo e($n->NamaNegeri); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Bangsa" class="col-sm-2 col-form-label">BANGSA</label>
                    <div class="col-sm-4">
                        <?php if($pelajar->Kod_Bangsa == ""): ?>
                        <select name="KodBangsa" class="form-control" required>
                           <option value="">Sila Pilih Bangsa</option>
                           <?php $__currentLoopData = $bangsa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($b->Kod_Bangsa); ?>"><?php echo e($b->NamaBangsa); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       </select>
                       <?php else: ?>
                      
                      <select name="KodBangsa" class="form-control" required>
                         <option value="<?php echo e($pelajar->Kod_Bangsa); ?>"><?php echo e($pelajar->bangsa->NamaBangsa); ?> - (current)</option>
                       
                        <?php $__currentLoopData = $bangsa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($pelajar->Kod_Bangsa != $b->Kod_Bangsa): ?>
                             <option value="<?php echo e($b->Kod_Bangsa); ?>"><?php echo e($b->NamaBangsa); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Agama" class="col-sm-2 col-form-label">AGAMA</label>
                    <div class="col-sm-4">
                        <?php if($pelajar->Kod_Agama == ""): ?>
                      <select name="KodAgama" class="form-control" required>
                       <option value="">Sila Pilih Agama</option>
                        <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($a->Kod_Agama); ?>"><?php echo e($a->NamaAgama); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php else: ?>
                      
                      <select name="KodAgama" class="form-control" required>
                        <option value="<?php echo e($pelajar->Kod_Agama); ?>"><?php echo e($pelajar->agama->NamaAgama); ?> - (current)</option>
                        
                        <?php $__currentLoopData = $agama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pelajar->Kod_Agama != $a->Kod_Agama): ?>
                             <option value="<?php echo e($a->Kod_Agama); ?>"><?php echo e($a->NamaAgama); ?></option>
                             <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat" class="col-sm-2 col-form-label">ALAMAT</label>
                    <div class="col-sm-6">
                     <?php if($pelajar->Alamat == ""): ?>
                      <textarea class="form-control" id="Alamat" rows="3" class="form-control <?php $__errorArgs = ['Alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Alamat" placeholder="Sila Isi Alamat" value="<?php echo e(old('Alamat')); ?>" required autocomplete="Alamat"></textarea>
                      <?php else: ?>
                      <textarea class="form-control" id="Alamat" rows="3" class="form-control <?php $__errorArgs = ['Alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Alamat" placeholder="Sila Isi Alamat" required autocomplete="Alamat"><?php echo e($pelajar->Alamat); ?></textarea>
                      <?php endif; ?>
                      <?php $__errorArgs = ['Alamat'];
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
                    <label for="Poskod" class="col-sm-2 col-form-label">POSKOD</label>
                    <div class="col-md-3">
                        <?php if($pelajar->Poskod == ""): ?>
                        <input id="Poskod" type="text" class="form-control <?php $__errorArgs = ['Poskod'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Poskod" placeholder="Sila Isi Poskod" value="<?php echo e(old('Poskod')); ?>" required autocomplete="Poskod">
                        <?php else: ?>
                        <input id="Poskod" type="text" class="form-control <?php $__errorArgs = ['Poskod'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Poskod" placeholder="Sila Isi Poskod" value="<?php echo e($pelajar->Poskod); ?>" required autocomplete="Poskod">
                        <?php endif; ?>
                        <?php $__errorArgs = ['Poskod'];
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
                    <label for="Bandar" class="col-sm-2 col-form-label">BANDAR</label>

                    <div class="col-md-3">
                        <?php if($pelajar->Bandar == ""): ?>
                        <input id="Bandar" type="text" class="form-control <?php $__errorArgs = ['Bandar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bandar" placeholder="Sila Isi Bandar" value="<?php echo e(old('Bandar')); ?>" required autocomplete="Bandar">
                        <?php else: ?>
                        <input id="Bandar" type="text" class="form-control <?php $__errorArgs = ['Bandar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Bandar" placeholder="Sila Isi Bandar" value="<?php echo e($pelajar->Bandar); ?>" required autocomplete="Bandar">
                        <?php endif; ?>
                        <?php $__errorArgs = ['Bandar'];
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
                    <label for="Negeri" class="col-sm-2 col-form-label">NEGERI</label>
                    <div class="col-sm-6">
                    <?php if($pelajar->Kod_Negeri == ''): ?>
                    <select name="KodNegeri" class="form-control" required>
                      <option value="">Sila Pilih Negeri</option>
                        <?php $__currentLoopData = $negeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($n->Kod_Negeri); ?>"><?php echo e($n->NamaNegeri); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php else: ?>
                      
                       <select name="KodNegeri" class="form-control" required>
                        <option value="<?php echo e($pelajar->Kod_Negeri); ?>"><?php echo e($pelajar->negeri->NamaNegeri); ?> - (current)</option>
                        
                        <?php $__currentLoopData = $negeri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($pelajar->Kod_Negeri != $n->Kod_Negeri): ?>
                             <option value="<?php echo e($n->Kod_Negeri); ?>"><?php echo e($n->NamaNegeri); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Negara" class="col-sm-2 col-form-label">NEGARA</label>
                    <div class="col-sm-6">
                        <?php if($pelajar->Kod_Negara ==''): ?>
                        <select name="KodNegara" class="form-control" required>
                            <option value="">Sila Pilih Negara</option>
                            <?php $__currentLoopData = $negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($country->Kod_Negara); ?>"><?php echo e($country->Keterangan); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php else: ?>
                      
                       <select name="KodNegara" class="form-control" required>
                        <option value="<?php echo e($pelajar->Kod_Negara); ?>"><?php echo e($pelajar->negara->Keterangan); ?> - (current)</option>
                        
                        <?php $__currentLoopData = $negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($pelajar->Kod_Negara != $country->Kod_Negara): ?>
                             <option value="<?php echo e($country->Kod_Negara); ?>"><?php echo e($country->Keterangan); ?></option>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php endif; ?>
                    </div>
                </div>

                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Simpan Maklumat Peribadi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smpln2\resources\views/std/std-detail.blade.php ENDPATH**/ ?>