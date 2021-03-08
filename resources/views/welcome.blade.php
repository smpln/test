<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

       @if(Route::has('login'))
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
           @auth
             <li class="nav-item active">
            <a class="nav-link" href="{{ url('/home') }}">Utama
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('new-login:ui') }}">Log Masuk</a>
            </li>
          @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Daftar Baru</a>
            </li>
          @endif
          @endif
        </ul>
      </div>
      @endif
    </div>
  </nav>
  <div class="text-center">
    {{-- <img src="{{ route('image.displayImage','jata.jpeg') }}" alt="" title=""> --}}
    <img src="{{url('/storage/images/jata.jpeg')}}" width="30%" height="30%" class="rounded mx-auto d-block" alt="...">
  </div>

  @include('layouts.partials.container')
  @include('layouts.partials.footer')

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>
