<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke()
    {
        return view('adminIndex');
    }
    
    public function validateAdminCredentials(Request $request, Admin $admin) {
        echo "uwu";
        return view('logAdmin');
    }
}
