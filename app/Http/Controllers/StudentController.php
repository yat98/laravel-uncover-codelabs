<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('student.index',compact('students'));
    }

    public function show(Student $student){
        return view('student.show',compact('student'));
    }

    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:8|unique:students',
            'name' => 'required|min:3|max:50',
            'gender' => 'required|in:M,F',
            'major' => 'required',
            'address' => '',
        ]);

        Student::create($validateData);
        $request->session()->flash('message',"Success add student {$validateData['name']}");
        return redirect()->route('student.index');
    }
}
