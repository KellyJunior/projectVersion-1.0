<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    //
    public function create(){
        return view('links.create');
    }
}
