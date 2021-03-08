<?php $__env->startSection('body'); ?>
<div class="container-fluid">
    <h1 class="mt-4">Profil Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini Profil</li>
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
                <div class="card-header"><?php echo e(__('Profil Saya')); ?></div>

                <div class="card-body">
                <form action="<?php echo e(route('update-profile')); ?>" method="POST" enctype="multipart/form-data">
                 <?php echo csrf_field(); ?>
                 <?php if(auth()->user()->ImageFile): ?>
                 <center>
                 <img src="<?php echo e(asset('/storage/'.auth()->user()->ImageFile)); ?>" width="15%" height="10%" class="rounded float-right">
                 </center>
                 <?php endif; ?>
                 <div class="form-group">
                    <label>No Kad Pengenalan</label>
                    <input class="form-control" type="text" name="NoKadPengenalan" value="<?php echo e($user->NoKadPengenalan); ?>" readonly>
                </div>
                 <div class="form-group">
                        <label>NAMA</label>
                        <input class="form-control" type="text" name="NAMA" value="<?php echo e($user->Nama); ?>">
                     </div>
                     <div class="form-group col-sm-4">
                        <label>NO TELEFON</label>
                        <input class="form-control" type="text" name="TELEFON" value="<?php echo e($user->NoTel); ?>">
                    </div>
                    <div class="form-group">
                        <label>EMEL</label>
                        <input class="form-control" type="email" name="EMAIL" value="<?php echo e($user->Emel); ?>">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>GAMBAR PROFIL</label>
                        <input class="form-control" type="file" name="profile_picture">
                    </div>
                    
                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Kemaskini Profil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\smpln2\resources\views/pengurusan/my-profile.blade.php ENDPATH**/ ?>