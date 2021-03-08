<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tajaan extends Model
{
    use HasFactory;
    //define table by default - 'negeris'
    protected $table = 'pln_tbl_penaja';

    //define primary key by default - id
    protected $primaryKey ='Id';

    //define timestamps to false
    public $timestamps = false;

    public function pengajian(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Pengajian','Kod_Penaja','Kod_Penaja');
    }
}
