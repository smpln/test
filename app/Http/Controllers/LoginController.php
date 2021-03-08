<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pelajar;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function loginInterface()
    {
        //  return to view with new login ui
        //resources/views/new/login.blade.php
        return view('new.login');
    }

    public function loginProcess(Request $request)
    {
        //query from db - check user
        $user = User::where('NoKadPengenalan', $request->username)->first();

        //if ada hash password == hash password in db
      if ($user) {     //login
          if (Hash::check($request->password, $user->Pswd)) {
              //redirect to home
            Auth::login($user, false); // remember_token column

            //return redirect()->to('dashboard');
            if($user->Kod_Capaian == '04')
                {
                    return redirect()->to('home');
                    return view('home', compact('pelajar'));
                } else if($user->Kod_Capaian == '01'){
                    return redirect()->to('dashboard');
                }else{
                    return redirect()->to('new-login')->with('status','Ralat. ID Pengguna tidak sah. Sila hubungi Admin Sistem.');
                }

          } else {//redirect to login
              return redirect()->to('new-login')->with('status','Ralat. Katalaluan atau ID Pengguna tidak tepat. Sila Log masuk semula.');
          }
      }

        return redirect()->to('new-login')->with('status','Ralat. ID Pengguna tidak wujud. Sila daftar pengguna.');
        //else
            //error message, wrong credentials
            //redirect to login page
    }

}
