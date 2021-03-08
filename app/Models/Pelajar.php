<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    use HasFactory;

    //define table by default - 'negeris'
    protected $table = 'pln_tbl_pelajar';

    //define primary key by default - id
    protected $primaryKey ='Id';

    //define timestamps to false
    public $timestamps = false;

    protected $fillable = [
        'NoKadPengenalan'
    ];

    public function user(){
        //model , fk , pk
        return $this->belongsTo('App\Models\User','NoKadPengenalan','NoKadPengenalan');
        }

    public function negeri(){
     //model , fk , pk
     return $this->belongsTo('App\Models\Negeri','Kod_Negeri','Kod_Negeri');
     }

     public function negeriLahir(){
        //model , fk , pk
        return $this->belongsTo('App\Models\Negeri','Kod_NegeriLahir','Kod_Negeri');
        }

    public function negara(){
                //model , fk , pk
     return $this->belongsTo('App\Models\Negara','Kod_Negara','Kod_Negara');
    }

    public function agama(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Agama','Kod_Agama','Kod_Agama');
    }

    public function bangsa(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Bangsa','Kod_Bangsa','Kod_Bangsa');
    }

    public function jantina(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Jantina','Kod_Jantina','Kod_Jantina');
    }

    public function waris()
    {
        return $this->hasMany('App\Models\Waris');
    }
}
