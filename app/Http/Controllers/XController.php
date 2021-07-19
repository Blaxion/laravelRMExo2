<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XController extends Controller
{
    public function index(){
        $tabs = ['Crayon','Bic','Latte','Weed'];
        return view('pages.viewX',compact('tabs'));
    }
}
