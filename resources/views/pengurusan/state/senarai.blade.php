@extends('admin.layouts.main')
@section('body')
<div class="container-fluid">
    <h1 class="mt-4">Senarai <i>State</i></h1>
    <div class="row" >
        <div class="small">Logged in as: {{ auth()->user()->NamaPegMSD }}</div>
        <div class="small">Logged as: {{ auth()->user()->KodLogin }}</div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{__('Senarai State') }}
                        <div class="float-right">
                        <a href="" class="btn btn-info"> + Tambah <i>State</i> Baru</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Kod <i>State</i></th>
                                <th>Nama <i>State</i></th>
                                <th>Status</th>
                                <th>Tindakan</th>
                            </tr>
                            @foreach($senarai_state as $state)
                            <tr>
                                <td>{{ $state->Kod_State }}</td>
                                <td>{{ $state->Nama_State }}</td>
                                <td>@if($state->StatusKod == '1')
                                    Aktif
                                @elseif($state->StatusKod == '0')
                                    Tidak Aktif
                                    @else
                                    Tiada Maklumat
                                @endif </td>
                                <td>
                                <a href="{{ route('state.lihat', $state)}}" class="btn btn-primary">Lihat</a>
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
