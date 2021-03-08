<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waris extends Model
{
    use HasFactory;

     //define table by default - 'negeris'
     protected $table = 'pln_tbl_waris';

     //define primary key by default - id
     protected $primaryKey ='Id';

     //define timestamps to false
     public $timestamps = false;

     protected $fillable = [
        'Id_Pelajar',
        'NoKadPengenalan'
    ];

     public function hubungan(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Hubungan','Kod_Hubungan','Kod_Hubungan');
    }

    public function negeri(){
        //model , fk , pk
        return $this->belongsTo('App\Models\Negeri','Kod_NegeriWaris','Kod_Negeri');
        }

    public function negara(){
            //model , fk , pk
    return $this->belongsTo('App\Models\Negara','Kod_NegaraWaris','Kod_Negara');
    }
}
