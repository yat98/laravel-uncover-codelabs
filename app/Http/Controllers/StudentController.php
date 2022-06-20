<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return 'Student table here';
    }

    public function create(){
        return view('form-register');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:M,F',
            'major' => 'required',
            'address' => '',
        ]);

        Student::create($validateData);
        return 'Success insert to database';
    }
}
