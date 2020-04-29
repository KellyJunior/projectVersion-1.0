<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name'
    ];

    public function attach($role_id,$permission_ids){
      foreach($permission_ids as $id){
        $permission_role=new \App\Permission_Role();
        $permission_role->role_id=$role_id;
        $permission_role->permission_id=$id;
        $permission_role->save();
        
      }
    }

   

    
}
