<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\CoursesRegister;
use App\Models\Runners;
use App\Models\Insurances;
use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Endroid\QrCode\Color\Color;
// use Endroid\QrCode\Encoding\Encoding;
// use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
// use Endroid\QrCode\Label\Label;
//use Endroid\QrCode\QrCode;
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
        $courses= Courses::whereNotNull('course_duration')->get();

        return view('Courses.showFinished', [
            'courses' => $courses,
        ]);
    }

    public function showPictures($id)
    {
        $course = Courses::where('id', $id)->first();
        $pictures = FileUpload::where('course_id', $id)->get();

        return view('Courses.showPictures', [
            'course' => $course,
            'pictures' => $pictures,
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
        $runnersDataValidated = $request->validate($runners->validationRules());
        $runners->create($runnersDataValidated);

        $idInsurance = Insurances::where('CIF', $request['insurance'])->first();
        $json = json_encode([$id,$runnersDataValidated['dni']]);
        $qr = QrCode::generate($json);
        $register->create([
            'id_courses' => $id,
            'dni_runners' => $runnersDataValidated['dni'],
            'dorsal'     => 1,
            'insurance'  => $idInsurance['id'],
            'data'         => $qr
        ]);

        return redirect()->route('qrCode');
    }


    public function registerWithIDForm($id,$userExists = '1',$registerExists = 'false', $insuranceNeeded = 'false')
    {
        $insurances = Insurances::get();
        $course = Courses::where('id',$id)->first();

        return view('Courses.RegisterWithId', [
            'idCourse'   => $id,
            'userExists' => $userExists,
            'registerExists' => $registerExists,
            'insuranceNeeded' => $insuranceNeeded,
            'insurances' => $insurances,
            'course' => $course
        ]);
    }

    public function registerWithID($id, Request $request, Runners $runners, CoursesRegister $register)
    {
        $runners = Runners::where('dni',$request['dni'])->get();
        if(count($runners) > 0) {
            $runners         = Runners::where('dni',$request['dni'])->first();
            $coursesRegister = CoursesRegister::where('dni_runners',$request['dni'])->first();
            if($runners && !$coursesRegister){
                $idInsurance = Insurances::where('CIF', $request['insurance'])->first();
                $json  = json_encode([$id,$request['dni']]);
                $qr    = QrCode::generate($json);
                $path1 = Storage::putFile('QRImg', $qr);
                dd($path1);

                $register->create([
                    'id_courses'  => $id,
                    'dni_runners' => $request['dni'],
                    'dorsal'      => 1,
                    'insurance'   => $idInsurance['id'],
                    'data'        => $path1
                ]);

                $route = redirect()->route('qrCode',[
                    'qr' => $qr,
                ]);

            }else{
                $insurances = Insurances::get();
                $course = Courses::where('id',$id)->first();

                $route = redirect()->route('courses.registerWithIDForm',['idCourse' => $id, 'userExists' => '1', 'registerExists' => 'true']);
            }
            dd();
            return $route;
        }
        else {
            $insurances = Insurances::get();

            $course = Courses::where('id',$id)->first();
            return redirect()->route('courses.registerWithIDForm',['idCourse' => $id, 'userExists' => 'false']);
        }
    }

    public function runners($id)
    {
        $runners = Courses::query()
            ->where('id',$id)
            ->with('runners')
            ->first();

        $runners = $runners->runners()->get();

        return view('Courses.runners', [
            'idCourse' => $id,
            'runners'   => $runners,
        ]);
    }

    public function qr($idCourse, $dniRunner, $time)
    {
        //TODO: BORRAR Y REVISAR
        dd("hola");

        if (! isset($time)) {
            CoursesRegister::query()
                ->where('id_courses', $idCourse)
                ->where('dni_runners', $dniRunner)
                ->update('data', 0);
        } else {
            CoursesRegister::query()
                ->where('id_courses', $idCourse)
                ->where('dni_runners', $dniRunner)
                ->update('data', now());
        }
    }
}

?>
