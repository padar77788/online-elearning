<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\role;


class DashboardController extends Controller
{

    public function index()
    {
         return view('admin.pages.index');
    }


}
