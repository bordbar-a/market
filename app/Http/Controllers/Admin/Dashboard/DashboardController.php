<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Admin\AdminBaseController;
use Illuminate\Http\Request;

class DashboardController extends AdminBaseController
{

    public function index(Request $request)
    {
        return view('admin.index');
    }
}
