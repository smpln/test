<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bangsa extends Model
{
    use HasFactory;

       //define table by default - 'bangsas'
       protected $table = 'pln_tbl_bangsa';

       //define primary key by default - id
       protected $primaryKey ='Id';

       //define timestamps to false
       public $timestamps = false;
}
