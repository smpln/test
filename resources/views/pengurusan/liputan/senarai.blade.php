@extends('admin.layouts.main')
@section('body')
<div class="container-fluid">
    <h1 class="mt-4">Senarai Wilayah Liputan</h1>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{__('Senarai Wilayah Liputan') }}
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Nama Negara Liputan</th>
                                <th>Tindakan</th>
                            </tr>
                            @foreach($senarai_Liputan as $liput)
                            <tr>
                            <td>{{$liput->negara->Nama_Negara}}</td>
                                <td>
                                <a href="" class="btn btn-primary">Lihat</a>
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
