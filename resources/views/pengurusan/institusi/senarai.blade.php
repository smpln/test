@extends('admin.layouts.main')
@section('body')
<div class="container-fluid">
    <h1 class="mt-4"> Senarai Institusi</h1>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{__('Senarai Institusi') }}
                        <div class="float-right">
                        <a href="" class="btn btn-info"> + Tambah Institusi Baru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Kod Institusi</th>
                                <th>Nama Institusi</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                            @foreach($senarai_inst as $institusi)
                            <tr>
                                <td>{{ $institusi->Kod_Institusi }}</td>
                                <td>{{ $institusi->Nama_Institusi }}</td>
                                <td>
                                    @if($institusi->StatusKod == '1')
                                    Aktif
                                @elseif($institusi->StatusKod == '0')
                                    Tidak Aktif
                                    @else
                                    Tiada Maklumat
                                @endif
                                   </td>
                                <td>
                                <a href="{{ route('institusi.lihat', $institusi)}}" class="btn btn-primary">Lihat</a>
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
