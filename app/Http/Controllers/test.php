<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    function indedx(){
        //echo"Hello Here we have it ";
        return view('testview');
    }
}
