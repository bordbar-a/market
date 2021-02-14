<?php

namespace App\Http\Controllers\Admin\Role;

use App\Helpers\FlashMessages\FlashMessages;
use App\Http\Controllers\Admin\AdminBaseController;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RolesController extends AdminBaseController
{


    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', compact('roles'));
    }


    public function create()
    {
        $permissions = Permission::all();
        return view('admin.role.create', compact('permissions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:roles,name'],
            'persian-name' => ['required', 'unique:roles,persian_name'],
        ], [
            'name.required' => 'وارد کردن نام نقش الزامی است',
            'name.unique' => 'نام تکراری امکان پذیر نیست',
            'persian-name.required' => 'وارد کردن نام فارسی نقش الزامی است',
            'persian-name.unique' => 'نام فارسی تکراری امکان پذیر نیست',
        ]);


        $roleData = [
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian-name')
        ];
        $permissions = $request->input('permissions');


        try {
            $newRole = Role::create($roleData);

        } catch (\Exception $exception) {
            $newRole = false;
        }

        if ($newRole) {
            $newRole->refreshPermissions($permissions);
            FlashMessages::success('نقش جدید ایجاد گردید');
        }

        return redirect()->route('admin.role.list');


    }


    public function delete(Role $role)
    {
        $result = false;

        if ($role) {
            $result = $role->delete();
        }

        if ($result) {
            FlashMessages::success('نقش مورد نظر حذف شد');
            return redirect()->route('admin.role.list');
        }

        FlashMessages::error('نقش مورد نظر حذف نشد');
        return redirect()->route('admin.role.list');


    }

    public function edit(Role $role)
    {
        if ($role) {
            $permissions = Permission::all();
            $role->load('permissions');
            return view('admin.role.edit', compact('role', 'permissions'));
        }

        return redirect()->route('admin.role.list');
    }

    public function update(Request $request, Role $role)
    {
        if (!$role) {
            FlashMessages::error('ویرایش انجام نشد');
            return redirect()->route('admin.role.list');
        }

        $request->validate([
            'name' => ['required', 'unique:roles,name,' . $role->id],
            'persian-name' => ['required', 'unique:roles,persian_name,' . $role->id],
        ], [
            'name.required' => 'وارد کردن نام نقش الزامی است',
            'name.unique' => 'نام تکراری امکان پذیر نیست',
            'persian-name.required' => 'وارد کردن نام فارسی نقش الزامی است',
            'persian-name.unique' => 'نام فارسی تکراری امکان پذیر نیست',
        ]);

        $roleData = [
            'name' => $request->input('name'),
            'persian_name' => $request->input('persian-name')
        ];
        $permissions = $request->input('permissions');
        $role->update($roleData);
        $role->refreshPermissions($permissions);
        FlashMessages::success('نقش مورد نظر ویرایش شد');
        return back();


    }

    public function rolePermissions(Role $role)
    {
        if(!$role){
            return back();
        }
        $role->load('permissions');
        return view('admin.role.permission.index' ,compact('role'));
    }

    public function deleteRolePermission(Role $role , Permission $permission)
    {
        if(!$role || !$permission){
            return back();
        }

        $role->withdrawalPermissions($permission->name);
        return back();
    }


    public function roleUsers(Role $role)
    {

    }


}
