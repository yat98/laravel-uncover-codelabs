<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function fileUploadProcess(Request $request){
        if($request->has('file')){
            echo 'path(): '.$request->file->path().'<br>';
            echo 'extension(): '.$request->file->extension().'<br>';
            echo 'getClientOriginalExtension(): '.$request->file->getClientOriginalExtension().'<br>';
            echo 'getMimeType(): '.$request->file->getMimeType().'<br>';
            echo 'getClientOriginalName(): '.$request->file->getClientOriginalName().'<br>';
            echo 'getSize(): '.$request->file->getSize().'<br>';
        }else{
            echo 'Empty file upload';
        }
    }
}
