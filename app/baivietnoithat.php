<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baivietnoithat extends Model
{
    protected $table = 'baivietnoithat';
    protected  $timestamp = fasle;
    protected  $fillable =['manoithat','name','mota','image','noidung'];
}
