<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noithat extends Model
{
    protected $table = 'noithat';
    protected  $timestamp = false;
    protected  $fillable =['manoithat','ten','mota','image','noidung'];
}
