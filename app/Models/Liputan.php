<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liputan extends Model
{
    use HasFactory;
     //define table - PRUSER ->default : users
     protected $table = 'pln_tbl_liputanem';

     //DEFINE PRIMARY KEY - USERID ->DEFAULT : ID
     protected $primaryKey = 'Id';

     //set timestamps to false
     public $timestamps = false;

    //relationship satu negara liputan belongsTo satu em
    public function edumas(){
        //model , fk , pk
    return $this->belongsTo('App\Models\EduMas','Kod_EM','Kod_EM');
    }

    //relationship satu negara liputan belongsTo satu negara
    public function negara(){
    //model , fk , pk
    return $this->belongsTo('App\Models\Negara','Kod_NegaraLiputan','Kod_Negara');
    //return $this->hasMany('App\Models\Negara');
    }

}

