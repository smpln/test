<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jantina extends Model
{
    use HasFactory;

    //define table by default - 'jantinas'
    protected $table = 'pln_tbl_jantina';

    //define primary key by default - id
    protected $primaryKey ='Id';

    //define timestamps to false
    public $timestamps = false;
}
