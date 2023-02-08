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

    public function edit($id)
    {
        $course= Courses::where('id', $id)->first();

        return view('Courses.edit', [
            'course' => $course,
        ]);
    }

    public function update(Request $request, Courses $courses, $id)
    {
        $coursesDataValidated= $request->validate($courses->validationRules());

        // $course= $courses->update($coursesDataValidated);
        $course= Courses::where('id', $id)->update($coursesDataValidated);

        $courses= Courses::get();
        return view('Courses.index',[
            'courses' => $courses,
        ]);
    }

    public function delete(Request $request, Courses $courses, $id)
    {
        
    }
}
