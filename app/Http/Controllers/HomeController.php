<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\congtrinh;
use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function hinhanh()
    {
        return view('hinhanh');
    }
    public function video()
    {
        return view('video');
    }
    public function congtrinh()
    {
        $data = congtrinh::all();
        return view('congtrinh');
    }
    public function gioithieu()
    {
        return view('gioithieu');
    }
    public function baogia()
    {
        return view('baogia');
    }
}
