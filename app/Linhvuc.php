<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class linhvuc extends Model
{
    protected $table = 'linhvuc';
    protected  $timestamp = false;
    protected  $fillable =['malinhvuc','ten','mota','image','noidung'];
}
