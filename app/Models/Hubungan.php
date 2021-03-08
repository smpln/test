<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hubungan extends Model
{
    use HasFactory;

     //define table by default - 'hubungans'
     protected $table = 'pln_tbl_hubungan';

     //define primary key by default - id
     protected $primaryKey ='Id';

     //define timestamps to false
     public $timestamps = false;
}

