<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Devices;

class tbldepartments extends Controller
{
    public function index(){
 
        $devices = tbldepartments::all();
 
        return view('tbldepartment.index',compact('tbldepartment'));
    }
 
    public function create(){
        return view('tbldepartment.create');
    }
 
    public function addDep(){
 
        $device = new tbldepartments();
 
        $device->departmentname = request('departmentName');
        $device->depcode = request('departmentCode');
        $device->headofdep = request('headofDepartment');
        
 
        $device->save();
 
        return redirect('/tbldepartment');
 
    }
}
