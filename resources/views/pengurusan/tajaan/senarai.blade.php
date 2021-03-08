@extends('admin.layouts.main')
@section('body')
<div class="container-fluid">
    <h1 class="mt-4"> Senarai Penaja</h1>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{__('Senarai Penaja') }}
                        <div class="float-right">
                        <a href="" class="btn btn-info"> + Tambah Penaja Baru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Kod Penaja</th>
                                <th>Nama Penaja</th>
                                <th>Nama Penuh Penaja</th>
                                <th>Tindakan</th>
                            </tr>
                            @foreach($senarai_tajaan as $penaja)
                            <tr>
                                <td>{{ $penaja->Kod_Penaja }}</td>
                                <td>{{ $penaja->Nama_Penaja }}</td>
                                <td>{{ $penaja->LName }}</td>
                                <td>
                                <a href="{{ route('tajaan.lihat', $penaja)}}" class="btn btn-primary">Lihat</a>
                                 </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
