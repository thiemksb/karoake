<?php

namespace App\Http\Controllers;
use app\noithat;
use Illuminate\Http\Request;

use App\Http\Requests;

class NoithatController extends Controller
{
    public function ban()
    {
        return view('noithat.ban');
    }
    public function ghe()
    {
        return view('noithat.ghe');
    }

}
