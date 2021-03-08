<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    //define table - PRUSER ->default : users
    protected $table = 'pln_tbl_login';

    //DEFINE PRIMARY KEY - USERID ->DEFAULT : ID
    protected $primaryKey = 'Id';

    //set timestamps to false
    public $timestamps = false;

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Kod_Capaian',
        'NoKadPengenalan',
        'Nama',
        'NoTel',
        'Emel',
        'Pswd',
        'Tarikh_LogMasuk',
        'Kod_Status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Pswd',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //'email_verified_at' => 'datetime',
    ];

    public function pelajar(){
        //model , fk , pk
        return $this->belongsTo('App\Models\Pelajar','NoKadPengenalan','NoKadPengenalan');
        }
//relationship
   /*  public function posts()
    {
        return $this->hasMany('App\Models\Post');
    } */
}
