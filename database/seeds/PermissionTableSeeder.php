<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {            // iterate though all routes
           $adminPermission_ids= [];
           $hodPermission_ids =[];
            $emplPermission_ids =[];
           
        foreach (Route::getRoutes()->getRoutes() as $key => $route){
            // get route action
            $action = $route->getActionname();
            // separating controller and method
            $_action = explode('@' ,$action);
            
            $controller = $_action[0];
            $method = end($_action);
            
            // check if this permission is already exists
            $permission_check = App\Permission::where(
                    ['controller'=>$controller,'method'=>$method])->first();
            if(!$permission_check){
            $permission = new App\Permission;
            $permission->controller = $controller;
            $permission->method = $method;
            $permission->save();  
            
            // admin methods      ####### In This i have added a new method for the index  ==> Because the index pages can be visiible for the admin only
            if( $method=="index" || $method=="addEmployee" || $method=="create"|| $method=="addDept" ||
            $method=="addDeptPost" || $method=="managDep" ||$method=="addLeave" || $method=="addLeavePost" || $method=="managLeave"
             || $method=="deleteDep" || $method=="deleteLeave" || $method=="indexDepartment" || $method=="showDepartment" 
             || $method=="editDepartment"){
                // add stored permission id in array
                $adminPermission_ids[] = $permission->id; 

            }
            //HOD Methods
            else if($method=="managApplicationLeaveAdmin" || $method=="indexe" || $method=="show" || $method=="index"
            ||$method=="edite"){
               
                $hodPermission_ids[] =  $permission->id ;  

            }else if($method=="managEmpl" ){

                $adminPermission_ids[] = $permission->id;
                $hodPermission_ids[] =  $permission->id ; 
            } else if($method=="LoggedEmployee"){
                $emplPermission_ids[] = $permission->id ;
            }
            
            else{ 

            $adminPermission_ids[] = $permission->id;
            $hodPermission_ids[] =  $permission->id ; 
            $emplPermission_ids[] = $permission->id ;  
                  
            }
        }  
                        
    }               
            // find admin role.
            $admin_role = App\Role::where('name','admin')->first();        
            //Find the role of the employees
             $employee_role=App\Role::where('name','employee')->first();
            //Find the role of the hod
            $hod_role=App\Role::where('name','headDepartment')->first(); 
            // atache all permissions to admin role
            $admin_role->attach($admin_role->id,$adminPermission_ids);
            
            $hod_role->attach($hod_role->id,$hodPermission_ids);
            $employee_role->attach($employee_role->id,$emplPermission_ids);
    }
}
