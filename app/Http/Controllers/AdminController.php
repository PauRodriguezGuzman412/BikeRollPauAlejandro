<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function __invoke()
    {
        return view('adminIndex');
    }
    
    public function validateAdminCredentials(Request $request, Admin $admin) {
        print_r($request);
    }
}
