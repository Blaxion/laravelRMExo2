<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class v3Controller extends Controller
{
    public function index(){
        return view('pages.view3');
    }
}
