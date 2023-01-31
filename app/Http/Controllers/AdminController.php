<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function __invoke()
    {
        return view('adminIndex');
    }

    public function store()
    {

    }
}
