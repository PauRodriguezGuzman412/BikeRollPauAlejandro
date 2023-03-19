<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as Controller;
use App\Models\Courses;
use App\Models\Sponsors;

class IndexController extends Controller
{
    public function __invoke(){

        $sponsors = Sponsors::where('principal_page', 1)->get();
        
        $courses = Courses::where('start_date','>', date('Y-m-d'))
                        ->orderBy('start_date', 'asc')
                        ->take(4)
                        ->get();
        return view('index',['recentCourses' => $courses, 'principalSponsors' => $sponsors]);
    }
}
