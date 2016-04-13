<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class congtrinh extends Model
{
    protected $table = 'congtrinh';
    protected  $fillable =['ten','chudautu','image','noidung','diadiem','sophong','mota',];
}
