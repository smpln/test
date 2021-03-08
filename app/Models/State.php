<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    //define table by default - 'negeris'
    protected $table = 'pln_tbl_state';

    //define primary key by default - id
    protected $primaryKey ='Id';

    //define timestamps to false
    public $timestamps = false;

    public function user(){
        //model , fk , pk
    return $this->belongsTo('App\Models\User','Kod_Negara','Kod_Negara');
    }

    public function negara(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Negara','Kod_Negara','Kod_Negara');
    }

    public function institusi(){

        return $this->hasMany('App\Models\Institusi');
    }

}
