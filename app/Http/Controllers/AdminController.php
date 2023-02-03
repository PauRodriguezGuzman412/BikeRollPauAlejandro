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

    public function storeCourses(Request $request)
    {
        $courses= new Courses();

        $data = $request->validate([
            'description'        => 'required',
            'slope'              => 'required',
            'map_image'          => 'required',
            'maxim_participants' => 'required',
            'km'                 => 'required',
            'start_date'         => 'required',
            'start_point'        => 'required',
            'promotion_banner'   => 'required',
            'sponsoring_money'   => 'required',
            'course_duration'    => 'required',
            ]);
        
            // dd($data);

        $courses->save($data);
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
