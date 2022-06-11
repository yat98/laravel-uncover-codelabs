<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('register-form');
    }

    public function processForm(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'gender' => 'required|in:M,F',
            'major' => 'required',
            'address' => '',
        ]);

        dump($validateData);
        echo $validateData['nim'].'<br>';
        echo $validateData['name'].'<br>';
        echo $validateData['email'].'<br>';
        echo $validateData['gender'].'<br>';
        echo $validateData['major'].'<br>';
        echo $validateData['address'].'<br>';
    }
}
