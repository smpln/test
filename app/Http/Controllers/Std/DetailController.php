<?php

namespace App\Http\Controllers\Std;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelajar;
use App\Models\Jantina;
use App\Models\Negeri;
use App\Models\Negara;
use App\Models\Bangsa;
use App\Models\Agama;
use App\Models\Waris;

class DetailController extends Controller
{
    public function stdDetail()
    {
        $user = auth()->user();
        $nokp = $user->NoKadPengenalan;
        $pelajar = Pelajar::where('NoKadPengenalan', '=',$nokp)->first();

        $jantina = Jantina::all();
        $negeri = Negeri::all();
        $negara = Negara::all();
        $bangsa = Bangsa::all();
        $agama = Agama::all();

        return view('std.std-detail', compact(['pelajar','user','jantina','negeri','bangsa','agama','negara']));
    }

    public function stdDetailCreate(Request $request)
    {
        $user = auth()->user();
        $nokp = $user->NoKadPengenalan;
        $pelajar = Pelajar::where('NoKadPengenalan', '=',$nokp)->first();

        $pelajar->NoPassport = $request->NoPassport;
        $pelajar->TarikhLahir = $request->TarikhLahir;
        $pelajar->Umur = $request->Umur;
        $pelajar->Kod_Jantina = $request->KodJantina;
        $pelajar->Kod_NegeriLahir = $request->KodNegeriLahir;
        $pelajar->Kod_Bangsa = $request->KodBangsa;
        $pelajar->Kod_Agama = $request->KodAgama;
        $pelajar->Alamat = $request->Alamat;
        $pelajar->Poskod = $request->Poskod;
        $pelajar->Bandar = $request->Bandar;
        $pelajar->Kod_Negeri = $request->KodNegeri;
        $pelajar->Kod_Negara = $request->KodNegara;
        $pelajar->Tarikh_Kemaskini = now();
        $pelajar->Status = 'Y';
        $pelajar->save();

        return redirect()->to('std/std-detail')->with('status','Berjaya simpan Maklumat Peribadi.');
    }
}
