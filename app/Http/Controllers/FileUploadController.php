<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function fileUploadProcess(Request $request){
        $request->validate([
            'file' => 'required|file|image|max:5000'
        ]);
        echo $request->file->getClientOriginalName().' Lolos Validasi';
    }
}
