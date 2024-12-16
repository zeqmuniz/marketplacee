<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class VendorController extends Controller
{
    public function dashboard()
    {
        return view('vendor/dashboard');
    }
}
