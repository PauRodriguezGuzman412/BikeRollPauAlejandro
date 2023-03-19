<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use App\Models\Runners;
use App\Models\Insurances;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($course_id,$runner_id,$insurance_id) {

        $course = Courses::where('id',$course_id)->first();
        $runner = Runners::where('dni',$runner_id)->first();
        $insurance = Insurances::where('id',$insurance_id)->first();

        $data = [

            'title' => 'FACTURA',

            'date' => date('d/m/Y'),

            'course' => $course,

            'runner' => $runner,

            'insurance' => $insurance,

        ]; 
            $pdf = PDF::loadView('Courses.pdf-view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
        // return view('Courses.pdf-view', $data);
    }
}
