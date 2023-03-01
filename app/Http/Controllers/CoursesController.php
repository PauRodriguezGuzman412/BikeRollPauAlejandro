<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\CoursesRegister;
use App\Models\Runners;
use App\Models\Insurances;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Endroid\QrCode\Color\Color;
// use Endroid\QrCode\Encoding\Encoding;
// use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
// use SimpleSoftwareIO\QrCode\Facades\QrCode;
// use Endroid\QrCode\Label\Label;
// use Endroid\QrCode\QrCode;
// use Endroid\QrCode\Logo\Logo;
// use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
// use Endroid\QrCode\Writer\PngWriter;
// use Endroid\QrCode\Writer\ValidationException;

class CoursesController extends Controller
{
    public function __invoke()
    {
        $courses = Courses::get();
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

        $path1 = Storage::putFile('coursesImg', $request->file('map_image'));
        $path2 = Storage::putFile('coursesImg', $request->file('promotion_banner'));
        $coursesDataValidated['map_image'] = $path1;
        $coursesDataValidated['promotion_banner'] = $path2;

        $courses->create($coursesDataValidated);

        return redirect()->route('courses');
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

        $path1 = Storage::putFile('coursesImg', $request->file('map_image'));
        $path2 = Storage::putFile('coursesImg', $request->file('promotion_banner'));
        $coursesDataValidated['map_image'] = $path1;
        $coursesDataValidated['promotion_banner'] = $path2;

        Courses::where('id', $id)->update($coursesDataValidated);

        return redirect()->route('courses');
    }

    public function delete(Request $request, Courses $courses, $id, $active)
    {
        if($active == 0) {
            Courses::where('id', $id)->update(['active' => '1']);
            $runners= Courses::get();
            return redirect()->route('courses');

        }
        Courses::where('id', $id)->update(['active' => '0']);
        $courses= Courses::get();
        return redirect()->route('courses');
    }

    public function showAvailable()
    {
        $courses= Courses::where('start_date', '<', date('Y-m-d'))->where('active', 1)->get();

        return view('Courses.showAvailable', [
            'courses' => $courses,
        ]);
    }

    public function showFinished()
    {
        $courses= Courses::where('start_date', '<', date('Y-m-d'))->first();

        return view('Courses.showFinished', [
            'course' => $course,
        ]);
    }

    public function registerForm($id)
    {
        $insurances = Insurances::get();

        return view('Courses.Register', [
            'idCourse'   => $id,
            'insurances' => $insurances,
        ]);
    }

    public function register($id, Request $request, Runners $runners, CoursesRegister $register)
    {
        $runnersDataValited = $request->validate($runners->validationRules());

        $runners->create($runnersDataValited);

        $idInsurance = Insurances::where('CIF', $request['insurance'])->first();

        // $qr = QrCode::generate($id,$runnersDataValited['dni']);

        $register->create([
            'id_courses' => $id,
            'dni_runners' => $runnersDataValited['dni'],
            'dorsal'     => 1,
            'insurance'  => $idInsurance['id'],
        ]);

        return redirect()->route('courses.available');
    }


    public function registerWithIDForm($id)
    {
        $insurances = Insurances::get();

        return view('Courses.Register', [
            'idCourse'   => $id,
            'insurances' => $insurances,
        ]);
    }

    public function registerWithID(Request $request, Runners $runners)
    {
        $runnersDataValidated= $request->validate($runners->validationRules());

        $runners->create($runnersDataValidated);

        return redirect()->route('runners');
    }

    public function qr_qenerate()
    {
        return view('qrCode');
    }
}
