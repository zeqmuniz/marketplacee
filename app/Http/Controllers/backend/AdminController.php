<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function login()
    {
        return view('admin/auth/login');
    }

    public function forgot()
    {
        return view('admin/auth/forgot-password');
    }
}
