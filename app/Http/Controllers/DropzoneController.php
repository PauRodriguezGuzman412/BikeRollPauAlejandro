<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\FileUpload;
use Illuminate\Http\Request;

class DropzoneController extends Controller
{
   /**
     * Generate Image upload View
     *
     * @return void
     */
    public function dropzone($id)
    {
        return view('dropzone',[
            'id' => $id,
        ]);
    }
     
    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request, FileUpload $upload, $id)
    {
        $fileUpload = new FileUpload();
        $image = $request->file('file');
        

        $imageName = $image->getClientOriginalName();
        $imagePath = $image->move(public_path('coursesImg'),$imageName);

        $fileUpload = FileUpload::create([
            'course_id' => $id,
            'image_path'=> 'coursesImg/' . $imageName,
        ]);
        return response()->json(['success'=>$imageName]);
    }
}
