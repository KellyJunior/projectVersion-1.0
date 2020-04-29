<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Redirect;

class RolesAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      
        // get user role permissions
        $role = \App\Role::findOrFail(auth()->user()->role_id);
        $ids=\App\Permission_Role::select('permission_id')->where('role_id',$role->id)->pluck('permission_id')->toArray();
        $permissions=\App\Permission::whereIn('id',$ids)->get();
        // get requested action
        $actionName = class_basename($request->route()->getActionname());
        // check if requested action is in permissions list
        foreach ($permissions as $permission)
        {

        $_namespaces_chunks = explode('\\', $permission->controller);
        $controller = end($_namespaces_chunks);
        if ($actionName == $controller. '@' . $permission->method)
        {
          // authorized request
          return $next($request);
        }
        }
        // none authorized request
        return redirect('/403');
    }
}
