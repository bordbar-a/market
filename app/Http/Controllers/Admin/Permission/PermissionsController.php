<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{


    public function index()
    {
        $permissions = Permission::withCount(['users' , 'roles'])->get();
        return view('admin.permission.index', compact('permissions'));
    }


    public function users(Permission $permission)
    {
        $permission->load('users');
        return view('admin.permission.user.index', compact('permission'));
    }


    public function getPermissionFromUser(Permission $permission , User $user)
    {
        $user->withdrawalPermissions($permission->name);
        return back();

    }

    public function getPermissionFromRole(Permission $permission , Role $role)
    {

        $role->withdrawalPermissions($permission->name);

        return back();

    }


    public function roles(Permission $permission)
    {

        $permission->load('roles');
        return view('admin.permission.role.index' , compact('permission'));

    }


}
