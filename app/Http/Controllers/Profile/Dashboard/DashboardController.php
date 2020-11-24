<?php

namespace App\Http\Controllers\Profile\Dashboard;

use App\Http\Controllers\Profile\ProfileBaseController;
use Illuminate\Http\Request;

class DashboardController extends ProfileBaseController
{

    public function index()
    {
        return view('profile.index');
    }



}
