<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginationController extends Controller
{
    public function pertamina(){
        return view('pertamina');
    }
    public function shell(){
        return view('shell');
    }
    public function bpakr()
    {
        return view('bpakr');
    }
    public function total()
    {
        return view('total');
    }
    public function vivo()
    {
        return view('vivo');
    }
}
