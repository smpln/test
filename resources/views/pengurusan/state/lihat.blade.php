@extends('admin.layouts.main')
@section('body')
<div class="container-fluid">
    <h1 class="mt-4">Maklumat <i>State</i></h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini State</li>
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
                <div class="card-header">{{ __('Maklumat State') }}</div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                    <label>KOD <i>STATE</i></label>
                    <input class="form-control" type="text" name="KodState" value="{{ $state->Kod_State }}" readonly>
                </div>
                 <div class="form-group">
                        <label>NAMA <i>STATE</i></label>
                        <input class="form-control" type="text" name="NamaState" value="{{ $state->Nama_State }}">
                        @error('NamaState')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                     </div>
                    <div class="form-group">
                        <label>STATUS</label>
                        <select name="Status" class="form-control">
                            @if( $state->StatusKod == '1')
                                <option value="{{ $state->StatusKod }}">Aktif - (current)</option>
                            @elseif( $state->StatusKod == '0')
                                <option value="{{ $state->StatusKod }}">Tidak Aktif - (current)</option>
                            @else
                                <option value="{{ $state->StatusKod }}">Tiada Maklumat - (current)</option>
                             @endif
                            <option value="1">Aktif</option>
                               <option value="0">Tidak Aktif</option>
                    </select>
                    @error('Status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Kemaskini <i>State</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
