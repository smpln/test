<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">

        <title>Sistem Maklumat Pelajar Luar Negara</title>

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    </head>

<body>

 <!-- Navigation -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #1d1b7e;">

    <div class="container">
      <a class="navbar-brand" href="#">Sistem Maklumat Pelajar Luar Negara</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <?php if(Route::has('login')): ?>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           <?php if(auth()->guard()->check()): ?>
             <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/home')); ?>">Utama
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <?php else: ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('new-login:ui')); ?>">Log Masuk</a>
            </li>
          <?php if(Route::has('register')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('register')); ?>">Daftar Baru</a>
            </li>
          <?php endif; ?>
          <?php endif; ?>
        </ul>
      </div>
      <?php endif; ?>
    </div>
  </nav>
  <div class="text-center">
    <img src="<?php echo e(url('/storage/images/jata.jpeg')); ?>" width="25%" height="25%" class="rounded mx-auto d-block" alt="...">
  </div>

  <?php echo $__env->make('layouts.partials.container', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>
<?php /**PATH C:\laragon\www\smplnv2\resources\views/welcome.blade.php ENDPATH**/ ?>