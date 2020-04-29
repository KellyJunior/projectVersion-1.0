<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Department;

class managedepContoller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $arr['departments'] = Department::all();
        return view('admin.Department.index')->with($arr);
    }

}
