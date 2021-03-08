<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajian extends Model
{
    use HasFactory;

     //define table by default - 'negeris'
     protected $table = 'pln_tbl_pengajian';

     //define primary key by default - id
     protected $primaryKey ='Id';

     //define timestamps to false
     public $timestamps = false;

     protected $fillable = [
        'Id_Pelajar',
        'NoKadPengenalan'
    ];

    public function peringkat(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Peringkat','Kod_Peringkat','Kod_Peringkat');
    }

    public function bidang(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Bidang','Kod_Bidang','Kod_Bidang');
    }

    public function program(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Program','Kod_Program','Kod_Program');
    }

    public function negara(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Negara','Kod_Negara','Kod_Negara');
    }

    public function state(){
        //model , fk , pk
    return $this->belongsTo('App\Models\State','Kod_State','Kod_State');
    }

    public function institusi(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Institusi','Kod_Institusi','Kod_Institusi');
    }

    public function tajaan(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Tajaan','Kod_Penaja','Kod_Penaja');
    }
    public function statuspengajian(){
        //model , fk , pk
    return $this->belongsTo('App\Models\StatusPengajian','Kod_StatusPengajian','Kod_StatusPengajian');
    }
}
