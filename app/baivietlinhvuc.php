<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baivietlinhvuc extends Model
{
    protected $table = 'baivietlinhvuc';
    protected  $timestamp = fasle;
    protected  $fillable =['malinhvuc','name','mota','image','noidung'];
}
