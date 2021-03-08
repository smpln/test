<?php

namespace App\Http\Controllers\Pengurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tajaan;


class TajaanController extends Controller
{
    public function senarai()
    {
     //query all data from table 'negeri' using model
        $senarai_tajaan = Tajaan::orderBy('Nama_Penaja','ASC')->get();

     // return to view with data
     //resources/views/pengurusan/state/senarai.blade.php
     return view('pengurusan.tajaan.senarai', compact('senarai_tajaan'));

    }

    public function lihat(Tajaan $tajaan)
       {
            //resources/views/pengurusan/negeri/lihat.blade.php
           return view('pengurusan.tajaan.lihat', compact('tajaan'));
       }

       public function kemaskini(Tajaan $tajaan, Request $request)
       {
           $this->validate(
               $request,
               [
                   'NamaTajaan' => 'required|min:5',
                   'LName' => 'required|min:5'
               ],
               [
                   'NamaTajaan.min' => 'Nama Penaja wajib di isi sekurang-kurangnya 5 karektor',
                   'LName.min' => 'Nama Penuh Penaja wajib di isi sekurang-kurangnya 5 karektor'
               ]
           );
           $tajaan->Nama_Penaja = $request->NamaTajaan;
           $tajaan->LName =$request->LName;
           $tajaan->save();

           return redirect()->back()->with('status','Berjaya dikemaskini maklumat Penaja');
       }
}
