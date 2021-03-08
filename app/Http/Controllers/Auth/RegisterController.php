<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Pelajar;
use App\Models\Waris;
use App\Models\Pengajian;
use Mail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     *
     */

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }

        event(new Registered($user = $this->create($request->all())));
       // $this->guard()->login($user);
       // return redirect($this->redirectPath());
       return $this->registered($request, $user)
                    ?: redirect($this->redirectPath());

    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'nokp' => ['required','unique:pln_tbl_login,NoKadPengenalan','int', 'min:12'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'NoTel' => ['required', 'string', 'max:20'],
            'captcha' => 'required|captcha',
        ],
        [
            'nokp.min' => 'No Kad Pengenalan wajib di isi sekurang-kurangnya 12 karektor',
            'nokp.unique' => 'No Kad Pengenalan telah wujud. Sila semak dan masukkan kad pengenalan yang sah.',
            'captcha' => 'Captcha tidak tepat.'
        ]
    );

    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        if (User::where('NoKadPengenalan', '=',  $data['nokp'])->exists()) {
            return back()->with('status', 'Pendaftaran baru tidak berjaya di wujudkan.Rekod telah wujud didalam sistem. Sila isi semula No Kad Pengenalan yang sah.');
         }
         else{
            $pelajar = Pelajar::create([
            'NoKadPengenalan' => $data['nokp'],
            'Nama' => $data['nama'],
            'Email' => $data['email'],
            'Status' => 'X',
            ]);

            $pelajar = Pelajar::where('NoKadPengenalan', '=',$data['nokp'])->first();

            $waris = Waris::create(['Id_Pelajar' => $pelajar->Id,
            'NoKadPengenalan' => $pelajar->NoKadPengenalan,
            'Status' => 'X',
            ]);

            $pengajian = Pengajian::create(['Id_Pelajar' => $pelajar->Id,
            'NoKadPengenalan' => $pelajar->NoKadPengenalan,
            'Kod_Pengesahan' => 'X',]);


        // generate random 8 char password from below chars
        $random = str_shuffle('abcdefghjklmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ234567890!$%^&!$%^&');
        $password = substr($random, 0, 8);

        //notify : send email to noordiana.zaharah@gmail.com
        //method 1
        Mail::send('email.create-user-email', [
            'Nama'=> $data['nama'],
            'NoKadPengenalan' => $data['nokp'],
            'Pswd' => $password ],
                        function ($message) {
                                $message->from('noordiana@mohe.gov.my');
                                $message->to('noordiana.zaharah@gmail.com', 'Diana')
                                ->subject('Pengguna Baharu Dicipta');
                            });

            return User::create([
                    'Kod_Capaian' => '04',
                    'NoKadPengenalan' => $data['nokp'],
                    'Nama' => $data['nama'],
                    'NoTel' => $data['NoTel'],
                    'Emel' => $data['email'],
                    'Kod_Status' => '1',
                    'Tarikh_LogMasuk' => now(),
                    'Pswd' => Hash::make($password),
                ]);
        // return back()->with('status', 'Pendaftaran baru berjaya di wujudkan. Katalaluan telah dihantar ke dalam email yang di daftarkan.');
    }
}
}
