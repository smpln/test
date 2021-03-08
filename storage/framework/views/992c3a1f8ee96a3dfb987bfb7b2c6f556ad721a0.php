<script language="JavaScript" type="text/JavaScript">
    function MM_goToURL() {
    var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
    for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
    }

    function reload_kod_negara(form)
    {
    var val_kod_negara=form.Kod_NegaraPengajian.options[form.Kod_NegaraPengajian.options.selectedIndex].value;
    self.location = 'create-edu.php?neg='+val_kod_negara;
    }

    $dd_negara = $_GET['neg'];
 </script>
<?php $__env->startSection('body'); ?>

<div class="container-fluid">
    <h1 class="mt-4">Tambah Maklumat Pengajian Saya</h1>
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
                    <label for="Kod_NegaraPengajian" class="col-sm-2 col-form-label">NEGARA PENGAJIAN</label>
                     <div class="col-sm-6">
                      
                       <select name="Kod_NegaraPengajian" id="Kod_NegaraPengajian" class="form-control" required>
                        
                        <option value="">Sila Pilih Negara</option>
                        <?php $__currentLoopData = $negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            <option value="<?php echo e($country->Kod_Negara); ?>"><?php echo e($country->Keterangan); ?></option>
                                                      
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="Kod_State" class="col-sm-2 col-form-label">WILAYAH PENGAJIAN</label>
                    <div class="col-sm-6">
                        <select name="Kod_State" id="Kod_State" class="form-control" required>
                            
                            <option value="">Sila Pilih Wilayah Pengajian</option>
                            <?php $__currentLoopData = $state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wilayah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                                  <option value="<?php echo e($wilayah->Kod_State); ?>"><?php echo e($wilayah->NamaState); ?></option>
                                 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="Kod_Institusi" class="col-sm-2 col-form-label">INSTITUSI PENGAJIAN</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="Kod_Institusi" placeholder="Sila Pilih Institusi Pengajian" name="Kod_Institusi" value="<?php echo e(old('Kod_Institusi')); ?>" required >
                      <?php $__errorArgs = ['Kod_Institusi'];
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
                    <label for="Kod_Peringkat" class="col-sm-2 col-form-label">PERINGKAT PENGAJIAN</label>

                    <div class="col-md-6">
                       
                       <select name="Kod_Peringkat" class="form-control" required>
                        
                        <option value="">Sila Pilih Peringkat Pengajian</option>
                        <?php $__currentLoopData = $peringkat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <option value="<?php echo e($level->Kod_Peringkat); ?>"><?php echo e($level->NamaPeringkat); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>

                        <?php $__errorArgs = ['Kod_Peringkat'];
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
                    <label for="Kod_Bidang" class="col-sm-2 col-form-label">BIDANG PENGAJIAN</label>

                    <div class="col-md-6">
                        
                        <select name="Kod_Bidang" class="form-control" required>
                            
                            <option value="">Sila Pilih Bidang Pengajian</option>
                            <?php $__currentLoopData = $bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                 <option value="<?php echo e($bid->Kod_Bidang); ?>"><?php echo e($bid->NamaBidang); ?></option>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>

                        <?php $__errorArgs = ['Kod_Bidang'];
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
                    <label for="Kod_Peringkat" class="col-sm-2 col-form-label">PROGRAM PENGAJIAN</label>
                    <div class="col-sm-6">
                      
                       <select name="Kod_Program" class="form-control" required>
                        
                        <option value="">Sila Pilih Program Pengajian</option>
                        <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <option value="<?php echo e($prog->Kod_Program); ?>"><?php echo e($prog->NamaProgram); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Kod_Penaja" class="col-sm-2 col-form-label">TAJAAN</label>
                    <div class="col-sm-6">
                      
                       <select name="Kod_Penaja" class="form-control" required>
                        
                        <option value="">Sila Pilih Penaja</option>
                        <?php $__currentLoopData = $penaja; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $taja): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           
                             <option value="<?php echo e($taja->Kod_Penaja); ?>"><?php echo e($taja->NamaPenaja); ?></option>
                            
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TarikhMula" class="col-sm-2 col-form-label">TARIKH MULA PENGAJIAN</label>

                    <div class="col-md-3">
                        <input id="TarikhMula" type="date" class="form-control <?php $__errorArgs = ['TarikhMula'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="TarikhMula" placeholder="Sila Isi Tarikh Mula Pengajian" value="<?php echo e(old('TarikhMula')); ?>" required autocomplete="TarikhMula">

                        <?php $__errorArgs = ['TarikhMula'];
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
                    <label for="TarikhTamat" class="col-sm-2 col-form-label">TARIKH TAMAT PENGAJIAN</label>
                    <div class="col-md-3">
                        <input id="TarikhTamat" type="date" class="form-control <?php $__errorArgs = ['TarikhTamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="TarikhTamat" placeholder="Sila Isi Tarikh Tamat Pengajian" value="<?php echo e(old('TarikhTamat')); ?>" required autocomplete="TarikhTamat">

                        <?php $__errorArgs = ['TarikhTamat'];
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
                    <label for="Kod_StatusPengajian" class="col-sm-2 col-form-label">STATUS PENGAJIAN</label>
                    <div class="col-md-3">
                        <select name="Kod_StatusPengajian" class="form-control" required>
                            
                            <option value="">Sila Pilih Status Pengajian</option>
                            <?php $__currentLoopData = $statuspengajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               
                                 <option value="<?php echo e($status->Kod_StatusPengajian); ?>"><?php echo e($status->Keterangan); ?></option>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Simpan Maklumat Pengajian</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {

            $('#Kod_NegaraPengajian').on('change',function(e) {

             var cat_id = e.target.value;

             $.ajax({

                   url:"create-edu/"+cat_id,
                   type:"POST",
                   data: {
                       cat_id: cat_id
                    },

                   success:function (data) {

                    $('#Kod_State').empty();

                    $.each(data.state[0].state,function(index,Kod_State){

                        $('#Kod_State').append('<option value="'+Kod_State.Kod_State+'">'+Kod_State.NamaState+'</option>');
                    })

                   }
               })
            });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smplnv2\resources\views/std/std-edu-show.blade.php ENDPATH**/ ?>