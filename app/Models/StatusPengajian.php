<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPengajian extends Model
{
    use HasFactory;
    //define table by default - 'negeris'
    protected $table = 'pln_tbl_statuspengajian';

    //define primary key by default - id
    protected $primaryKey ='Id';

    //define timestamps to false
    public $timestamps = false;

    protected $fillable = [
        'Id_Pelajar',
        'NoKadPengenalan'
    ];

    public function pengajian(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Pengajian','Kod_StatusPengajian','Kod_StatusPengajian');
    }
}
