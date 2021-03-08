<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peringkat extends Model
{
    use HasFactory;
     //define table - PRUSER ->default : users
     protected $table = 'pln_tbl_peringkat';

     //DEFINE PRIMARY KEY - USERID ->DEFAULT : ID
     protected $primaryKey = 'Id';

     //set timestamps to false
     public $timestamps = false;

    public function pengajian(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Pengajian','Kod_Peringkat','Kod_Peringkat');
    }
}
