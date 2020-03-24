<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Covid19Controller extends Controller
{
    public function json(){
        return view('json-covid');
    }
    public function index(){
        return view('covid19-id');
    }
}
