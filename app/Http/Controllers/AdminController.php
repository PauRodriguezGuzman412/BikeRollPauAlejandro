<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function __invoke()
    {
        return view('logAdmin');
    }

    public function jose()
    {
        return view('adminIndex');
    }

    public function indexCourses()
    {
        return view('adminCourses');
    }

    public function storeCourses()
    {

    }

    public function indexAseguradoras()
    {
        return view('adminAseguradores');
    }

    public function storeAseguradoras()
    {

    }

    public function indexSponsors()
    {
        return view('adminSponsors');
    }

    public function storeSponsors()
    {

    }
}
