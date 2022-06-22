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
        $fileName = $request->file->getClientOriginalName();
        // $fileName = 'yat-'.time().'.'.$request->file->getClientOriginalExtension();
        // $path = $request->file->storeAs('public',$fileName);
        $path = $request->file->move('image', $fileName);

        // echo 'Success upload file, <a href="'.asset('storage/'.$fileName).'">storage/'.$fileName.'</a>';
        echo 'Success upload file, <a href="'.asset('image/'.$fileName).'">image/'.$fileName.'</a>';
    }

    public function fileUploadRename(){
        return view('file-upload-rename');
    }

    public function fileUploadProcessRename(Request $request){
        $request->validate([
            'name' => 'required|min:5|alpha_dash',
            'file' => 'required|file|image|max:5000'
        ]);
        $fileName = $request->name.'.'.$request->file->getClientOriginalExtension();
        $image = $request->file->storeAs('public/image',$fileName);
        echo 'Success upload <a href="'.asset('storage/image/'.$fileName).'">'.$fileName.'</a><br>';
        echo '<img src="'.asset('storage/image/'.$fileName).'" height="200px"/>';
    }
}
