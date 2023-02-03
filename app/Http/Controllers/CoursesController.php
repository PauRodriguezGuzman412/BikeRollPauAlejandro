<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function __invoke()
    {
        return view('index');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request, Courses $courses)
    {
        $coursesDataValidated = $request->validate($courses->validationRules());

        $courses->create($coursesDataValidated);

        return view('adminCourses');
    }

    public function edit()
    {
        return view('edit');
    }

    public function update(Request $request, Courses $courses)
    {
        
    }

    public function delete(Request $request, Courses $courses)
    {

    }
}
