<?php

namespace App\Http\Controllers\Admin\Permission;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{


    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permission.index' , compact('permissions'));
    }
}
