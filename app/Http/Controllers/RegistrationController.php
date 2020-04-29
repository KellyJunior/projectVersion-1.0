<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create(){
        return view('create');
    }

    public function addEmployeePost(Request $request){
        $empl=new \App\tblEmployee;
        $empl->emplCode =$request->input('empcode');
        $empl->firstName =$request->input('firstname');
        $empl->lastName =$request->input('lastname');
        $empl->email =$request->input('email');
        $empl->password =$request->input('password');
        $empl->gender =$request->input('gender');
        $empl->department =$request->input('department');
        $empl->address =$request->input('address');
        $empl->mobileNumber =$request->input('mobile');
        $empl->dateOfBirth =$request->input('dob');
        $empl->save();
    }
        
}


