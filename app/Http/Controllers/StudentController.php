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

    public function insert(){
        $student = new Student;
        $student->nim = '19901162';
        $student->name = 'John Doe';
        $student->birthdate = '1992-01-01';
        $student->gpa = 3.88;
        $student->save();
        dump($student);
    }

    public function massAssignment(){
        $student = Student::create([
            'nim' => '19901163',
            'name' => 'James Doe',
            'birthdate' => '1992-04-17',
            'gpa' => 3.31,
        ]);
        dump($student);
    }

    public function massAssignmentTwo(){
        $student = Student::create([
            'nim' => '19901164',
            'name' => 'Alma Doe',
            'birthdate' => '1992-12-01',
            'gpa' => 2.71,
        ]);
        dump($student);
        $student = Student::create([
            'nim' => '19901165',
            'name' => 'Brand Doe',
            'birthdate' => '1992-09-23',
            'gpa' => 3.42,
        ]);
        dump($student);
        $student = Student::create([
            'nim' => '19901166',
            'name' => 'Jack Doe',
            'birthdate' => '1992-06-27',
            'gpa' => 3.51,
        ]);
        dump($student);
    }
}
