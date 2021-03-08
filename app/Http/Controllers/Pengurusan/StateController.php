<?php

namespace App\Http\Controllers\Pengurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\EduMas;
use App\Models\Liputan;
use Auth;

class StateController extends Controller
{
    public function senarai()
    {
        $KodLogin = auth()->user()->KodLogin;
        //query all data from table 'negeri' using model

        if($KodLogin == 'BPK')
        {
            //query only for KPT
            $senarai_state = State::orderBy('Kod_State','ASC')->get();

        }else{
                $senarai_state = State::where('KodNegara','=',$KodLogin)->get();
        }
        // return to view with data
        //resources/views/pengurusan/state/senarai.blade.php
        return view('pengurusan.state.senarai', compact('senarai_state'));

    }

    public function lihat(State $state)
    {
         //resources/views/pengurusan/negeri/lihat.blade.php
        return view('pengurusan.state.lihat', compact('state'));
    }

    public function kemaskini(State $state, Request $request)
    {
        $this->validate(
            $request,
            [
                'NamaState' => 'required|min:5',
                'Status' => 'required'
            ],
            [
                'NamaState.min' => 'Nama State wajib di isi sekurang-kurangnya 5 karektor'
            ]
        );
        $state->Nama_State = $request->NamaState;
        $state->StatusKod =$request->Status;
        $state->save();

        return redirect()->back()->with('status','Berjaya dikemaskini maklumat State');
    }

}
