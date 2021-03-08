<?php

namespace App\Http\Controllers\Pengurusan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function myProfile()
    {
        $user = auth()->user();

        //return to view with user
        //resources/views/profile/my-profile.blade.php
        return view('pengurusan.my-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        //save to db
        $user = auth()->user();
        $user->Nama = $request->NAMA;
        $user->Emel = $request->EMAIL;
        $user->NoTel = $request->TELEFON;
       // $user->Kod_Status = $request->Status;
        $user->save();

        if($request->hasFile('profile_picture')){
            $filename = 'profile-picture-'.$user->NoKadPengenalan.'-'.date("Y-m-d").".".$request->profile_picture->getClientOriginalExtension();

            Storage::disk('public')->put($filename, File::get($request->profile_picture));

            $user->ImageFile = $filename;
            $user->save();
        }

        return redirect()->to('pengurusan/my-profile')->with('status','Maklumat Profil berjaya di kemaskini');
    }

    public function myProfilePassword()
    {
        return view ('pengurusan.my-profile-password');
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        $user ->Pswd = bcrypt($request->password);
        $user->save();

        return redirect()->route('my-profile-password')->with('status','Kata Laluan berjaya di kemaskini');
    }
}
