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

    public function update(){
        $student = Student::find(1);
        $student->birthdate = '2001-02-10';
        $student->gpa = 4.0;
        $student->save();
        dump($student);
    }

    public function updateWhere(){
        $student = Student::where('nim','19901162')->first();
        $student->birthdate = '2001-01-31';
        $student->gpa = 4.0;
        $student->save();
        dump($student);
    }

    public function massUpdate(){
        $student = Student::where('nim','19901162')->first();
        $student->update([
            'birthdate' => '2001-01-31',
            'gpa' => 4.0,
        ]);
        return 'update success';
    }

    public function delete(){
        $student = Student::destroy(1);
        dump($student);
    }

    public function massDelete(){
        $student = Student::where('gpa','<',3)->delete();
        dump($student);
    }

    public function all(){
        $students = Student::all();
        foreach($students as $student){
            echo $student->id.'<br>';
            echo $student->nim.'<br>';
            echo $student->name.'<br>';
            echo $student->birthdate.'<br>';
            echo $student->gpa.'<br>';
            echo '<hr>';
        }
    }

    public function allView(){
        $students = Student::all();
        return view('students',compact('students'));
    }

    public function getWhere(){
        $students = Student::where('gpa','<',3)
            ->orderBy('name','desc')
            ->get();
        return view('students',compact('students'));
    }

    public function first(){
        $students = Student::where('gpa','<',3)
            ->first();
        // dump($students);
        return view('students',['students' => compact('students')]);
    }

    public function find(){
        $students = Student::find(3);
        // dump($students);
        return view('students',['students' => compact('students')]);
    }

    public function latest(){
        $students = Student::latest()
            ->limit(2)
            ->get();
        return view('students',compact('students'));
    }

    public function skipTake(){
        $students = Student::oldest('gpa')
            ->skip(1)
            ->take(3)
            ->get();
        return view('students',compact('students'));
    }

    public function withTrashed(){
        $students = Student::withTrashed()->get();
        return view('students',compact('students'));
    }

    public function restore(){
        $students = Student::withTrashed()->where('id',1)->restore();
        return 'restore success';
    }

    public function forceDelete(){
        $students = Student::where('id',1)->forceDelete();
        return 'delete permanent success';
    }
}
