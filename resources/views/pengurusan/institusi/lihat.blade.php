@extends('admin.layouts.main')
@section('body')
<div class="container-fluid">
    <h1 class="mt-4">Maklumat Institusi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kemaskini Institusi</li>
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
                <div class="card-header">{{ __('Maklumat Institusi') }}</div>

                <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group">
                    <label>KOD INSTITUSI</label>
                    <input class="form-control" type="text" name="KodInstitusi" value="{{ $institusi->Kod_Institusi }}" readonly>
                </div>
                 <div class="form-group">
                        <label>NAMA INSTITUSI</label>
                        <input class="form-control" type="text" name="NamaInstitusi" value="{{ $institusi->Nama_Institusi }}">
                        @error('NamaInstitusi')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                     </div>
                    <div class="form-group">
                        <label>STATUS</label>
                        <select name="Status" class="form-control">
                            @if( $institusi->StatusKod == '1')
                                <option value="{{ $institusi->StatusKod }}">Aktif - (current)</option>
                            @elseif( $institusi->StatusKod == '0')
                                <option value="{{ $institusi->StatusKod }}">Tidak Aktif - (current)</option>
                            @else
                                <option value="{{ $institusi->StatusKod }}">Tiada Maklumat - (current)</option>
                             @endif
                            <option value="1">Aktif</option>
                               <option value="0">Tidak Aktif</option>
                    </select>
                    @error('Status')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="col text-center">
                    <button type="submit" class="btn btn-primary">Kemaskini Institusi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
