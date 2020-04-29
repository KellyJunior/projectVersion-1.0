<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Mail\confirmationMail;
use Illuminate\Support\Facades\Mail;

Route::get('/', 'HomeController@index')->name('home');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('/register','HomeController@addEmployee');
Route::post('/register', 'HomeController@create')->name('create');
Route::get('/managEmpl','HomeController@managEmpl');


// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Department Management
Route::get('/addDept','HomeController@addDept')->name('addDept');
Route::post('/addDept','HomeController@addDeptPost');
Route::get('/managDept','HomeController@managDep');

// Leave Management
Route::get('/addLeave','HomeController@addLeave');
Route::post('/addLeave',"HomeController@addLeavePost")->name('addLeave');
Route::get('/managLeave','HomeController@managLeave');

//View For an Employee
Route::get('/emplView','HomeController@employeeView');
Route::get('/emplInfo','HomeController@emplInfo');

Route::get('/applLeave','HomeController@applicationLeave');
Route::post('/applLeaveInsert','HomeController@applicationLeaveInsert')->name('applLeaveInsert');
Route::get('/managApplicationLeave','HomeController@managApplicationLeave');
Route::get('/managApplicationLeaveAdmin','HomeController@managApplicationLeaveAdmin');


Route::get('/email', function () {

    //Mail::to('afroteckkely@gmail.com')->send(new ConfirmMail());

    //return new ConfirmMail();

    Mail::to('afroteckkely@gmail.com')->send(new confirmationMail());
    return new confirmationMail();
});

Route::get('/editRequest',"HomeController@edit");
Route::post('/updateRequest',"HomeController@updateRequest");


Route::get('/respondRequest','HomeController@indexe');
Route::get('respondRequest/{id}','HomeController@show');
Route::post('respondRequest/{id}','HomeController@edite');

/*Route to show the Details about a specific employee : All requests asked*/
Route::get('/leavePerEmployee','HomeController@managPersonalRequest');

Route::get('/403',function(){
    return view('error403');
})->name('403');
/*Delete Department Leaves and Employees Details from the DataBase */
Route::get('deleteDep/{id}','HomeController@deleteDep');
Route::get('deleteLeave/{id}','HomeController@deleteLeave');
Route::get('deleteEmployee/{emplCode}','HomeController@deleteEmployee');
Route::get('deleteRequestUser/{id}','HomeController@deleteRequestUser');

Route::get('LoggedEmployee','HomeController@LoggedEmployee');

/* Routes for the Update department function */
Route::get('updateDepartment','HomeController@indexDepartment');

Route::get('editDepartment/{id}','HomeController@showDepartment');
Route::post('editDepartment/{id}','HomeController@editDepartment');
