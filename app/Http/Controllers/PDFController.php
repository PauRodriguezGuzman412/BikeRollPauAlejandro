<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF() {

        $users = Courses::get();
        
        $data = [

            'title' => 'Factura',

            'date' => date('m/d/Y'),

            'users' => $users

        ]; 
        view()->share('employee',$data);
        $pdf = PDF::loadView('Courses.pdf-view', $data);
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
    }
}
