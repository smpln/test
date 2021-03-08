<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});

Auth::routes();

//Reload captcha register
Route::get('/reload-captcha', [App\Http\Controllers\Auth\RegisterController::class, 'reloadCaptcha']);

Route::redirect('/login','/new-login',301);

//reset new password
Route::get('/reset-pwd', [App\Http\Controllers\ResetPwdController::class, 'index'])->name('reset');
Route::post('/reset-pwd', [App\Http\Controllers\ResetPwdController::class, 'resetProcess'])->name('reset:process');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Login User Interface
Route::get('/new-login', [App\Http\Controllers\LoginController::class, 'loginInterface'])->name('new-login:ui');
Route::post('/new-login', [App\Http\Controllers\LoginController::class, 'loginProcess'])->name('new-login:process');

//User Admin Dashboard
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

//method (uri,action)
Route::get('/list-em',[App\Http\Controllers\EMController::class, 'show'])->name('em.show');
//Route::get('/list-em',[App\Http\Controllers\EMController::class, 'senaraiEM'])->name('list-em.senaraiEM');
Route::get('/list-em',[App\Http\Controllers\EMController::class, 'senaraiLiputan'])->name('list-em.senaraiLiputan');

//User Admin Profile
Route::get('/admin/my-profile', [App\Http\Controllers\Pengurusan\ProfileController::class, 'myProfile'])->name('my-profile');
Route::post('/admin/my-profile', [App\Http\Controllers\Pengurusan\ProfileController::class, 'updateProfile'])->name('update-profile');
Route::get('/admin/password', [App\Http\Controllers\Pengurusan\ProfileController::class, 'myProfilePassword'])->name('my-profile-password');
Route::post('/admin/password', [App\Http\Controllers\Pengurusan\ProfileController::class, 'updatePassword'])->name('update-password');

//method (uri,action) - State
Route::get('/admin/state',[App\Http\Controllers\Pengurusan\StateController::class, 'senarai'])->name('state.senarai');
Route::get('/admin/state/{state}',[App\Http\Controllers\Pengurusan\StateController::class, 'lihat'])->name('state.lihat');
Route::post('/admin/state/{state}',[App\Http\Controllers\Pengurusan\StateController::class, 'kemaskini'])->name('state.kemaskini');
//Route::post('/admin/state', [App\Http\Controllers\Pengurusan\StateController::class, 'senaraiProcess'])->name('state:process');

//method (uri,action) - Institusi
Route::get('/admin/institusi',[App\Http\Controllers\Pengurusan\InstitusiController::class, 'senarai'])->name('institusi.senarai');
Route::get('/admin/institusi/{institusi}',[App\Http\Controllers\Pengurusan\InstitusiController::class, 'lihat'])->name('institusi.lihat');
Route::post('/admin/institusi/{institusi}',[App\Http\Controllers\Pengurusan\InstitusiController::class, 'kemaskini'])->name('institusi.kemaskini');

//method (uri,action) - Tajaan
Route::get('/admin/tajaan',[App\Http\Controllers\Pengurusan\TajaanController::class, 'senarai'])->name('tajaan.senarai');
Route::get('/admin/tajaan/{tajaan}',[App\Http\Controllers\Pengurusan\TajaanController::class, 'lihat'])->name('tajaan.lihat');
Route::post('/admin/tajaan/{tajaan}',[App\Http\Controllers\Pengurusan\TajaanController::class, 'kemaskini'])->name('tajaan.kemaskini');

//method (uri,action) - Wilayah Liputan
Route::get('/admin/liputan',[App\Http\Controllers\Pengurusan\LiputanController::class, 'senarai'])->name('liputan.senarai');

//User Std Profile
Route::get('/std/std-profile', [App\Http\Controllers\Std\ProfileController::class, 'stdProfile'])->name('std-profile');
Route::post('/std/std-profile', [App\Http\Controllers\Std\ProfileController::class, 'stdUpdateProfile'])->name('update-std-profile');
Route::get('/std/password', [App\Http\Controllers\std\ProfileController::class, 'stdProfilePassword'])->name('std-profile-password');
Route::post('/std/password', [App\Http\Controllers\std\ProfileController::class, 'stdUpdatePassword'])->name('update-std-password');

//User Std Peribadi
Route::get('/std/std-detail', [App\Http\Controllers\Std\DetailController::class, 'stdDetail'])->name('std-detail');
//Route::get('/std/std-detail', [App\Http\Controllers\Std\DetailController::class, 'stdShowDetail'])->name('std-detail-show');
Route::post('/std/std-detail', [App\Http\Controllers\Std\DetailController::class, 'stdDetailCreate'])->name('std-detail-create');

//User Std Waris
Route::get('/std/std-waris', [App\Http\Controllers\Std\WarisController::class, 'stdWarisSenarai'])->name('std-waris');
Route::get('/std/create-waris', [App\Http\Controllers\Std\WarisController::class, 'stdWarisShow'])->name('std-waris-show');
Route::post('/std/create-waris', [App\Http\Controllers\Std\WarisController::class, 'stdWarisSimpan'])->name('std-waris-simpan');
Route::get('/std/create-waris2', [App\Http\Controllers\Std\WarisController::class, 'stdWarisShow'])->name('std-waris-show2');
Route::post('/std/create-waris2', [App\Http\Controllers\Std\WarisController::class, 'stdWarisSimpan2'])->name('std-waris-simpan2');
Route::get('/std/update-waris/{waris}', [App\Http\Controllers\Std\WarisController::class, 'stdWarisShowUpdate'])->name('std-waris-show3');
Route::post('/std/update-waris/{waris}', [App\Http\Controllers\Std\WarisController::class, 'stdWarisUpdate'])->name('std-waris-simpan');

//User Std Pengajian
Route::get('/std/std-edu', [App\Http\Controllers\Std\EducationController::class, 'stdEduList'])->name('std-edu-list');
Route::get('/std/create-edu', [App\Http\Controllers\Std\EducationController::class, 'stdEduShow'])->name('std-edu-show');
// this route can return the state with the state id (dynamic dropdown)
Route::get('/std/create-edu/dropDown', [App\Http\Controllers\Std\EducationController::class, 'dropDown'])->name('std-edu-state');
Route::post('/std/create-edu/get-states-by-country', 'App\Http\Controllers\Std\EducationController@getState')->name('get:states');
Route::post('/std/create-edu/get-institusi-by-state', 'App\Http\Controllers\Std\EducationController@getInstitusi')->name('get:institusi');
// this route can return the program with the bidang id (dynamic dropdown)
Route::post('/std/create-edu/get-program-by-bidang', 'App\Http\Controllers\Std\EducationController@getProgram')->name('get:program');
Route::post('/std/create-edu', [App\Http\Controllers\Std\EducationController::class, 'stdEduSimpan'])->name('std-edu-simpan');
Route::get('/std/create-edu2', [App\Http\Controllers\Std\EducationController::class, 'stdEduShow'])->name('std-edu-show2');
Route::post('/std/create-edu2', [App\Http\Controllers\Std\EducationController::class, 'stdEduSimpan2'])->name('std-edu-simpan2');
Route::get('/std/update-edu/{edu}', [App\Http\Controllers\Std\EducationController::class, 'stdEduShowUpdate'])->name('std-edu-show3');
Route::post('/std/update-edu/{edu}', [App\Http\Controllers\Std\EducationController::class, 'stdEduUpdate'])->name('std-edu-simpan');

