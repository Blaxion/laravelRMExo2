<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class v2Controller extends Controller
{
    public function index(){
        return view('pages.view2');
    }
}
