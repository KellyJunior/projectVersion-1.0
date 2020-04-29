<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;

use App\department;
use DB;
use Illuminate\Http\Request;
use App\Employee;
use App\Mail\confirmationMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers as BaseController;
use App\Notifications\AdminNotification;
use Illuminate\Support\Facades\Auth;
use user;

use Socialite;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('RolesAuth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }

    public function LoggedEmpployee(){
        return view('LoggedEmployee');
    }


    public function test(){
        return view('/addDept');
    }

    public function formsubmit(Request $req){
       $req->validate([
               'departmentname'=>"required",

               'departmentcode'=>"required",

               'headofdep'=>"required"
       ]);
        print_r($req->input());

    }

    public function addDept(){
        return view('addDept');
    }
    public function addDeptPost(Request $request){
        $dept = new \App\department;
        $dept->departmentname = $request->input('departmentname');
        $dept->departmentcode = $request->input('departmentcode');
        $dept->headofdept = $request->input('headofdept');
        $dept->save();
        return redirect()->action('HomeController@managDep');
   }
   function managDep(){
        $departments = \App\department::all();

        return view('/managDept', ['departments' => $departments]);
   }


    // Here the admin of the system can add or manage the Leaves available in the enterprise
    public function addLeave(){
        return view('/addLeave');
    }  /*Manage Function*/
    function managLeave(){
        $leave = \App\leavetable::all();
        $a="hello World";
        return view('/managLeave', ['leave' => $leave]);
       }

         /*Send to the database.*/
    public function addLeavePost(Request $request){
        $leave = new \App\leavetable;
        $leave->leaveType = $request->input('leaveType');
        $leave->Duration = $request->input('leaveDuration');
        $leave->leaveDescription = $request->input('leaveDescription');
        $leave->save();
      return redirect()->action('HomeController@managLeave');
    }


    //create a new employee !!
    public function create(Request $request){
        $empl=new \App\tblEmployee;
        $empl->emplCode=$request->input('emplCode');
        //$empl->usernanme=$empl->emplCode.$empl->firstName;
        $empl->username=$request->input('emplCode').$request->input('firstName');
        $empl->firstName=$request->input('firstName');
        $empl->lastName=$request->input('lastName');
        $empl->email=$request->input('email');
        $empl->password=Hash::make($empl->password=$request->input('password'));
        $empl->gender=$request->input('gender');
        $empl->department=$request->input('department');
        $empl->address=$request->input('address');
        $empl->mobileNumber=$request->input('mobileNumber');
        $empl->dateOfBirth=$request->input('dateOfBirth');
        $empl->role_id=$request->input('role');
        $empl->save();
        return redirect()->action('HomeController@managEmpl');
       // Mail::to('afrotechkely@gmail.com')->send(new confirmationMail());
        //{{ Auth::user()->email }}
    }
/* Return The addEmployee View*/
    public function addEmployee(){
        return view('addEmployee');
    }


/* Code To manage and Print the list of employees in the enterprise  */
    function managEmpl(){
        $employees = \App\Employee::all();
        return view('/managEmpl', ['employees' => $employees]);
   }

   // Print The Total Number Of Employee In The table EMployee Of the enterprise

   function getEmployee(){
    $countEmpl = \App\Employee::all()->count();
   }


   //Manage Employee View OF the System

   public function employeeView(){
       return view('employeeView');
   }

   public function emplInfo(){
       return view('emplInfo');
   }

  //application form to ask for  leave in the enterprise    !!!!!!! Here
  public function applicationLeave(){
    $leave = \App\leavetable::all();
    $departments = \App\department::all();
      //return view('applicationLeave');['departments' => $departments]
      return view('/applicationLeave', ['leave' => $leave ,'departments' => $departments]);
  }
   // ApplicationLeaveInsert()   function
  public function applicationLeaveInsert(Request $request){
    $leaveInsert=new \App\applicationLeaveModel;
    $leaveInsert->username=$request->input('username');
    $leaveInsert->email=$request->input('email');
    $leaveInsert->department=$request->input('department');
    $leaveInsert->reason=$request->input('reason');
    //$leaveInsert->Status=NULL;
    $leaveInsert->save();
return redirect('/applLeave')->with('succes','Your request is sent successfully');
   //return redirect()->action('HomeController@redirectConfirm');
  }
  //confirmation message  to the user about the rgistration.
  function redirectConfirm(){
     return window.alert("Leave request Registered Successfully");
  }
  // Print  the Whole  Leave From The database applicationLeaveModel();
  public function managApplicationLeave(){
      $leaveInsert= \App\applicationLeaveModel::all();
      return view('/managApplicationLeave', ['leaveInsert' => $leaveInsert]);
  }
   // Print  the Whole  Leave From The database applicationLeaveModel();
  public function managApplicationLeaveAdmin(){
    $leaveInsert= \App\applicationLeaveModel::all();
    return view('/managApplicationLeaveAdmin', ['leaveInsert' => $leaveInsert]);

  }

   // Respond To An Application Of an EMployee(This will be done only by the Head of departments)
 public function indexe(){
    $users = DB::select('select * from application_leave');
    return view('editRequest',['users'=>$users]);
 }
 public function show($id) {
    $users = DB::select('select * from application_leave where id = ?',[$id]);
    return view('editRequest',['users'=>$users]);
 }
 public function edite(Request $request,$id) {
    $Status = $request->input('Status');
    DB::update('update application_leave set Status = ? where id = ?',[$Status,$id]);
    return redirect()->action('HomeController@managApplicationLeaveAdmin');
 }  /* End of the Hod action Here */

  //Here We allow the user to check the evolution of his leave request.
public function managPersonalRequest(){
    //$leaveInsert= \App\applicationLeaveModel::all();\
    $currentEmail= Auth::user()->email;
    $leaveInsert= DB::table('application_leave')->where('email', $currentEmail)->get();
    return view('/PrintRequestEmployee',['leaveInsert'=>$leaveInsert]);
}

  //The Notification system using the mail trap (This part will be maintained later)
public function sendNotification()
{
        //$user = user()->first();
    $user=Auth::user()->first();
         // Details about the email that will be sent to the user of the system
    $details = [
        'greeting' => 'Hi Artisan',
        'body' => 'This is my first notification from ItSolutionStuff.com',
        'thanks' => 'Thank you for using ItSolutionStuff.com tuto!',
        'actionText' => 'View My Site',
        'actionURL' => url('/emplView'),
        'order_id' => 101
    ];

    $user->notify(new AdminNotification($details));

    dd('done');
}
   //Function here to delete a departments information from the midration departments
public function deleteDep($id) {
    $departments = \App\department::all();
    DB::delete('delete from tblsdepartments where id = ?',[$id]);
    return view('/managDept', ['departments' => $departments]);
 }

 //Function to update a department information
 public function showDep($id) {
    $users = DB::select('select * from tblsdepartments where id = ?',[$id]);
    return view('editRequest',['users'=>$users]);
 }
 public function editeDept(Request $request){
    $dept = new \App\department;
    $dept->departmentname = $request->input('departmentname');
    $dept->departmentcode = $request->input('departmentcode');
    $dept->headofdept = $request->input('headofdept');
    $dept->save();
    return redirect()->action('HomeController@managDep');
}

/* Function used to delete a leave from the database */
public function deleteLeave($id){
    $leave = \App\leavetable::all();
    DB::delete('delete from leavetable where id = ?', [$id]);
    return view('/managLeave', ['leave' => $leave]);

}
/* Function ued to delete an employee  from the database */
public function deleteEmployee($emplCode){
    $employees = \App\Employee::all();
    DB::delete('delete from  tblemployee where emplCode = ?', [$emplCode]);
    return view('/managEmpl', ['employees' => $employees]);
}

/* Function to allow a user to delete his own leave request from the database */
public function deleteRequestUser($id){
    $leaveInsert= \App\applicationLeaveModel::all();
    DB::delete('delete from application_leave where id = ?', [$id]);
    return view('/PrintRequestEmployee',['leaveInsert'=>$leaveInsert]);
}

public function LoggedEmployee(){
    return view('LoggedEmployee');
}

/* Function for updating a department details by the admin of the system */
public function indexDepartment(){
    $departments = \App\department::all();
    $departments=DB::select('select * from tblsdepartments ');
    return view('/managDept', ['departments' => $departments]);
}
public function showDepartment($id){
    $dept = new \App\department;
    $departments=DB::select('select * from tblsdepartments where id = ?', [$id]);
    return view('UpdateDepartment',['departments'=>$departments]);
}

    public function editDepartment(Request $request, $id){
            $departments = \App\department::all();
            $departmentname = $request->input('departmentname');
            $departmentcode = $request->input('departmentcode');
            $headofdept = $request->input('headofdept');
            DB::update('update tblsdepartments set departmentname = ? where id = ?', [$departmentname,$id]);
            DB::update('update tblsdepartments set departmentcode = ? where id = ?', [$departmentcode,$id]);
            DB::update('update tblsdepartments set headofdept = ? where id = ?', [$headofdept,$id]);
            echo"The department Details are updated successfully";
            return view('/managDept', ['departments' => $departments]);
    }
}
