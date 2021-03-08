<?php

namespace App\Http\Controllers\Pengurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institusi;

class InstitusiController extends Controller
{
    public function senarai()
    {
        //query all data from table 'negeri' using model
           $senarai_inst = Institusi::orderBy('Kod_Institusi','ASC')->get();

        // return to view with data
        //resources/views/pengurusan/state/senarai.blade.php
        return view('pengurusan.institusi.senarai', compact('senarai_inst'));

       }

       public function lihat(Institusi $institusi)
       {
            //resources/views/pengurusan/negeri/lihat.blade.php
           return view('pengurusan.institusi.lihat', compact('institusi'));
       }

       public function kemaskini(Institusi $institusi, Request $request)
       {
           $this->validate(
               $request,
               [
                   'NamaInstitusi' => 'required|min:5',
                   'Status' => 'required'
               ],
               [
                   'NamaInstitusi.min' => 'Nama Institusi wajib di isi sekurang-kurangnya 5 karektor'
               ]
           );
           $institusi->Nama_Institusi = $request->NamaInstitusi;
           $institusi->StatusKod =$request->Status;
           $institusi->save();

           return redirect()->back()->with('status','Berjaya dikemaskini maklumat Institusi');
       }

}
