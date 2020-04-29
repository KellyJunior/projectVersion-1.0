<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission_Role extends Model
{
    protected $table = 'permission_role';
    protected $fillable = [
        'role_id','permission_id'
    ];
    public $timestamps = false;
    
   
}
