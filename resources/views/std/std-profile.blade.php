@extends('std.layouts.main')
@section('body')
<div class="container-fluid">
    <h1 class="mt-4">Profil Saya</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini Profil</li>
    </ol>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">

                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            <div class="card">
                <div class="card-header">{{ __('Profil Saya') }}</div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 @csrf

                 @if(auth()->user()->ImageFile)
                 <center>
                 <img src="{{ asset('/storage/'.auth()->user()->ImageFile) }}" width="15%" height="10%" class="rounded float-right">
                 </center>
                 @endif

                 <div class="form-group col-sm-4">
                    <label>NO KAD PENGENALAN</label>
                    <input class="form-control" type="text" name="NoKadPengenalan" value="{{ $user->NoKadPengenalan }}" readonly>
                </div>
                <div class="form-group col-sm-7">
                    <label>NAMA</label>
                    <input class="form-control" type="text" name="NAMA" value="{{ $user->Nama }}">
                </div>
                <div class="form-group col-sm-4">
                    <label>NO TELEFON</label>
                    <input class="form-control" type="text" name="TELEFON" value="{{ $user->NoTel }}">
                </div>
                    <div class="form-group col-sm-6">
                        <label>EMEL</label>
                        <input class="form-control" type="email" name="EMAIL" value="{{ $user->Emel }}">
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
@endsection
