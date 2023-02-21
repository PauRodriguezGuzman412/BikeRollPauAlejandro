<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public  function dropzoneUi()  
    {  
        return view('Courses.uploadView');  
    }  

    
    public  function dropzoneFileUpload(Request $request)  
    {  
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension(); 
        $image->move(public_path('images'),$imageName);  
        return response()->json(['success'=>$imageName]);
    }
}
