<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function checkObject(){
        $student = new Student;
        dump($student);
    }
}
