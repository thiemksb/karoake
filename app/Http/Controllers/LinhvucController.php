<?php

namespace App\Http\Controllers;
use App\Linhvuc;

use Illuminate\Http\Request;

use App\Http\Requests;

class LinhvucController extends Controller
{
    public function thicong()
    {
        $data = Linhvuc::where('malinhvuc','thicong')->get();
        return view('linhvuc.thicong',['data' => $data]);
    }
}
