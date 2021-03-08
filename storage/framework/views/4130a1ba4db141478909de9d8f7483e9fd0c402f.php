<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <label for="country-dropdown" class="col-sm-2 col-form-label">NEGARA PENGAJIAN</label>
                     <div class="col-sm-6">
                      
                       <select name="country" id="country-dropdown" class="form-control" required>
                        
                        <option value="">Sila Pilih Negara</option>
                        <?php $__currentLoopData = $negara; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($country->Kod_Negara); ?>"> <?php echo e($country ->Keterangan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="state-dropdown" class="col-sm-2 col-form-label">WILAYAH PENGAJIAN</label>
                    <div class="col-sm-6">
                        <select name="state" id="state-dropdown" class="form-control" required>
                            <option value="">Sila Pilih Negara</option>
                         </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inst-dropdown" class="col-sm-2 col-form-label">INSTITUSI PENGAJIAN</label>
                    <div class="col-sm-6">
                        <select name="institusi" id="inst-dropdown" class="form-control" required>
                            <option value="">Sila Pilih Negara</option>
                           </select>
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
                    <label for="bidang-dropdown" class="col-sm-2 col-form-label">BIDANG PENGAJIAN</label>
                     <div class="col-sm-6">
                      
                       <select name="bidang" id="bidang-dropdown" class="form-control" required>
                        
                        <option value="">Sila Pilih Bidang</option>
                        <?php $__currentLoopData = $bidang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($field->Kod_Bidang); ?>"> <?php echo e($field ->NamaBidang); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="program-dropdown" class="col-sm-2 col-form-label">PROGRAM PENGAJIAN</label>
                    <div class="col-sm-6">
                        <select name="program" id="program-dropdown" class="form-control" required>
                            <option value="">Sila Pilih Bidang</option>
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

    <script>
        $(document).ready(function() {

            $('#country-dropdown').on('change', function() {
                var country_id = this.value;
                $("#state-dropdown").html('');
                $.ajax({
                    url:"<?php echo e(route('get:states')); ?>",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#state-dropdown').html('<option value="">Sila Pilih Wilayah Pengajian</option>');
                        $.each(result.states,function(key,value){
                            $("#state-dropdown").append('<option value="'+value.Kod_State+'">'+value.NamaState+'</option>');
                        });
                        $('#inst-dropdown').html('<option value="">Sila Pilih Wilayah Pengajian</option>');
                    }
                });
            });

            $('#state-dropdown').on('change', function() {
                var state_id = this.value;
                $("#inst-dropdown").html('');
                $.ajax({
                    url:"<?php echo e(route('get:institusi')); ?>",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#inst-dropdown').html('<option value="">Sila Pilih Institusi</option>');
                        $.each(result.institusi,function(key,value){
                            $("#inst-dropdown").append('<option value="'+value.Kod_Institusi+'">'+value.NamaInstitusi+'</option>');
                        });
                    }
                });
            });


     $('#bidang-dropdown').on('change', function() {
                var bidang_id = this.value;
                $("#program-dropdown").html('');
                $.ajax({
                    url:"<?php echo e(route('get:program')); ?>",
                    type: "POST",
                    data: {
                        bidang_id: bidang_id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    dataType : 'json',
                    success: function(result){
                        $('#program-dropdown').html('<option value="">Sila Pilih Program Pengajian</option>');
                        $.each(result.program,function(key,value){
                            $("#program-dropdown").append('<option value="'+value.Kod_Program+'">'+value.NamaProgram+'</option>');
                        });
                    }
                });
            });
        });
 </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('std.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smpln2\resources\views/std/std-edu-show.blade.php ENDPATH**/ ?>