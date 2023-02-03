<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __invoke()
    {
        $courses= Courses::get();
        return view('Courses.index',[
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        return view('Courses.create');
    }

    public function store(Request $request, Courses $courses)
    {
        $coursesDataValidated= $request->validate($courses->validationRules());

        $courses->create($coursesDataValidated);

        return view('Courses.create');
    }

    public function edit()
    {
        return view('Courses.edit');
    }

    public function update(Request $request, Courses $courses)
    {
        
    }

    public function delete(Request $request, Courses $courses)
    {

    }
}
