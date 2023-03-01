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
    public function dropzone()
    {
        return view('dropzone');
    }
     
    /**
     * Image Upload Code
     *
     * @return void
     */
    public function dropzoneStore(Request $request, FileUpload $upload)
    {
        $image = $request->file('file');
    
        $imageName = time().'.'.$image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        $upload->create('id','ola');
        return response()->json(['success'=>$imageName]);
    }
}
