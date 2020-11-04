<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\AdminBaseController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends AdminBaseController
{


    public function all()
    {

        $all_user = User::all();
        return view('admin.users.list', compact('all_user'));
    }
}
