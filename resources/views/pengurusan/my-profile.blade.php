@extends('admin.layouts.main')
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
                <form action="{{ route('update-profile')}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @if(auth()->user()->ImageFile)
                 <center>
                 <img src="{{ asset('/storage/'.auth()->user()->ImageFile) }}" width="15%" height="10%" class="rounded float-right">
                 </center>
                 @endif
                 <div class="form-group">
                    <label>No Kad Pengenalan</label>
                    <input class="form-control" type="text" name="NoKadPengenalan" value="{{ $user->NoKadPengenalan }}" readonly>
                </div>
                 <div class="form-group">
                        <label>NAMA</label>
                        <input class="form-control" type="text" name="NAMA" value="{{ $user->Nama }}">
                     </div>
                     <div class="form-group col-sm-4">
                        <label>NO TELEFON</label>
                        <input class="form-control" type="text" name="TELEFON" value="{{ $user->NoTel }}">
                    </div>
                    <div class="form-group">
                        <label>EMEL</label>
                        <input class="form-control" type="email" name="EMAIL" value="{{ $user->Emel }}">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>GAMBAR PROFIL</label>
                        <input class="form-control" type="file" name="profile_picture">
                    </div>
                    {{-- <div class="form-group">
                        <label>STATUS</label>
                        <select name="Status" class="form-control">
                            @if( $user->Kod_Status == '1')
                             <option value="{{ $user->Kod_Status }}">Aktif - (current)</option>

                            @else
                             <option value="{{ $user->Kod_Status }}">Tidak Aktif - (current)</option>

                             @endif
                              <option value="1">Aktif</option>
                               <option value="0">Tidak Aktif</option>
                    </select>
                    @error('Status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div> --}}
                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Kemaskini Profil</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
