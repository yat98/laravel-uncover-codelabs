<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\Validator;

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

    public function processFormValidator(Request $request){
        $rules = [
            'nim' => 'required|size:8',
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'gender' => 'required|in:M,F',
            'major' => 'required',
            'address' => '',
        ];
        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect('/')->withErrors($validator)->withInput();
        } else {
            echo $request->nim.'<br>';
            echo $request->name.'<br>';
            echo $request->email.'<br>';
            echo $request->gender.'<br>';
            echo $request->major.'<br>';
            echo $request->address.'<br>';
        }
    }

    public function processFormRequest(StudentRequest $request){
        $validateData = $request->validated();
        dump($validateData);
    }
}
