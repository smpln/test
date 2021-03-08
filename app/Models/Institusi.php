<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institusi extends Model
{
    use HasFactory;
    //define table by default - 'negeris'
    protected $table = 'pln_tbl_institusi';

    //define primary key by default - id
    protected $primaryKey ='Id';

    //define timestamps to false
    public $timestamps = false;

    public function pengajian(){
        //model , fk , pk
    return $this->hasMany('App\Models\Pengajian');
    }
}
