<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// class DashboardController extends Controller;
class AdminController extends Controller

{
    public function index() {
        return view('admin.dashboard');

    }
}
