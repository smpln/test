<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    //define table - PRUSER ->default : users
    protected $table = 'pln_tbl_program';

    //DEFINE PRIMARY KEY - USERID ->DEFAULT : ID
    protected $primaryKey = 'Id';

    //set timestamps to false
    public $timestamps = false;

    public function bidang(){
        //model , fk , pk
    return $this->hasMany('App\Models\Bidang');
    }

}
