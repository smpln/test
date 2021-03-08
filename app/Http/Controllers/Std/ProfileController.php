<?php

namespace App\Http\Controllers\Std;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;
use File;
use App\Models\User;
use Mail;

class ProfileController extends Controller
{
    public function stdProfile()
    {
        $user = auth()->user();
        return view('std.std-profile', compact('user'));
    }
    public function stdUpdateProfile(Request $request)
    {
        //save to db
        $user = auth()->user();
        $user->Nama = $request->NAMA;
        $user->NoTel = $request->TELEFON;
        $user->Emel = $request->EMAIL;
       // $user->Kod_Status = $request->Status;
        $user->save();

        if($request->hasFile('profile_picture')){
            $filename = 'profile-picture-'.$user->NoKadPengenalan.'-'.date("Y-m-d").".".$request->profile_picture->getClientOriginalExtension();

            Storage::disk('public')->put($filename, File::get($request->profile_picture));

            $user->ImageFile = $filename;
            $user->save();
        }


        return redirect()->to('std/std-profile')->with('status','Maklumat Profil berjaya di kemaskini');
    }

    public function stdProfilePassword()
    {
        return view ('std.std-profile-password');
    }

    public function stdUpdatePassword(Request $request)
    {
        $user = auth()->user();
        $user ->Pswd = bcrypt($request->password);
        $user->save();

        //notify : send email to noordiana.zaharah@gmail.com
        //method 1
        Mail::send('email.update-pwd-email', [
            'Nama'=> $user->Nama,
            'NoKadPengenalan' => $user->NoKadPengenalan,
            'Pswd' =>  $request['password'] ],
                        function ($message) {
                                $message->from('noordiana@mohe.gov.my');
                                $message->to('noordiana.zaharah@gmail.com', 'Diana')
                                ->subject('Kemaskini Tukar Katalaluan Baharu');
                            });

                            auth()->logout();

        return redirect()->route('new-login:ui')->with('status','Kata Laluan berjaya di kemaskini.Sila Log Masuk semula.');
        //return redirect()->route('std-profile-password')->with('status','Kata Laluan berjaya di kemaskini');
    }

}
