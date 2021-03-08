<?php

namespace App\Http\Controllers\Pengurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EduMas;
use App\Models\Liputan;
use App\Models\Negara;
use Auth;

class LiputanController extends Controller
{
    public function senarai()
    {
        $KodLogin = auth()->user()->KodLogin;
        //query all data from table 'negeri' using model
        $senarai_negara = Negara::all();
        if($KodLogin <> 'BPK')
       {    $KodEM = EduMas::where('Kod_Negara_EM', '=', $KodLogin)
                        ->pluck('Kod_EM');

            $senarai_Liputan = Liputan::where('Kod_EM', '=', $KodEM)->get();
        }
        //$negara = Negara::all();
        // return to view with data
        //resources/views/pengurusan/state/senarai.blade.php
        return view('pengurusan.liputan.senarai', compact(['senarai_negara','senarai_Liputan']));

    }
}
