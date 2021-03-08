<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    use HasFactory;
     //define table - PRUSER ->default : users
     protected $table = 'pln_tbl_negara';

     //DEFINE PRIMARY KEY - USERID ->DEFAULT : ID
     protected $primaryKey = 'Id';

     //set timestamps to false
     public $timestamps = false;

     public function state(){

        return $this->hasMany('App\Models\State');
    }
    public function liputan(){

        return $this->hasMany('App\Models\Liputan');
    }
}
