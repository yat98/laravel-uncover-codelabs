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
        // $path = $request->file->store('uploads');
        // $fileName = $request->file->getClientOriginalName();
        $fileName = 'yat-'.time().'.'.$request->file->getClientOriginalExtension();
        $path = $request->file->storeAs('public',$fileName);
        
        echo 'Success upload file, <a href="'.asset('storage/'.$fileName).'">storage/'.$fileName.'</a>';
    }
}
