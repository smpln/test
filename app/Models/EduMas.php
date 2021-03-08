<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class EduMas extends Model
{
    use HasFactory;
    //define table - PRUSER ->default : users
    protected $table = 'pln_tbl_em';

    //DEFINE PRIMARY KEY - USERID ->DEFAULT : ID
    protected $primaryKey = 'Id';

    //set timestamps to false
    public $timestamps = false;

/*     public function liputan(){
        //model , fk , pk
    return $this->belongsTo('App\Models\Liputan','Kod_EM','Kod_EM');
    }
 */
    public function liputan()
    {
        return $this->belongsTo('App\Models\Liputan','Kod_EM','Kod_EM');
    }

    public function negara(){
        //model , fk , pk
        return $this->belongsTo('App\Models\Negara','Kod_NegaraEM','Kod_Negara');
        }
}
