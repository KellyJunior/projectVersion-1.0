<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudInsertController extends Controller {
public function insertform(){
return view('stud_create');
}
public function insert(Request $request){
$departmentname = $request->input('departmentname');
$departmentcode = $request->input('departmentcode');
$headofdep = $request->input('headofdep');
//$email = $request->input('email');
$data=array('departmentname'=>$departmentname,"departmentcode"=>$departmentcode,"headofdep"=>$headofdep);
DB::table('tbldepartments')->insert($data);
echo "Record inserted successfully.<br/>";
echo '<a href = "/insert">Click Here</a> to go back.';
}
}


