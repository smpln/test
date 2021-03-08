<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;

     //define table by default - 'negeris'
     protected $table = 'pln_tbl_agama';

     //define primary key by default - id
     protected $primaryKey ='Id';

     //define timestamps to false
     public $timestamps = false;
}
