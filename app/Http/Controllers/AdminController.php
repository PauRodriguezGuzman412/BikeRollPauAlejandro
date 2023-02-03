<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public function __invoke()
    {
        return view('adminIndex');
    }

    public function indexCourses()
    {
        return view('adminCourses');
    }

    public function storeCourses(Request $request, Courses $courses)
    {
        // $data = $request->validate([
        //     'description'        => 'required',
        //     'slope'              => 'required',
        //     'map_image'          => 'required',
        //     'maxim_participants' => 'required',
        //     'km'                 => 'required',
        //     'start_date'         => 'required',
        //     'start_point'        => 'required',
        //     'promotion_banner'   => 'required',
        //     'sponsoring_money'   => 'required',
        //     'course_duration'    => 'required',
        //     ]);
        $coursesDataValidated = $request->validate($courses->validationRules());

        $courses->create($coursesDataValidated);

        return view('adminCourses');
    }

    public function indexAseguradoras()
    {
        return view('adminAseguradores');
    }

    public function storeAseguradoras()
    {

    }


}
