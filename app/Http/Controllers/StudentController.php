<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        return 'success';
    }

    public function insertSql()
    {
        $results = DB::insert("INSERT INTO students(nim,name,birthdate,gpa) VALUES ('53141655','Hidayat Chandra','2001-01-01',3.5)");
        dump($results);
    }

    public function insertTimestamp()
    {
        $results = DB::insert("INSERT INTO students(nim,name,birthdate,gpa,created_at,updated_at) VALUES ('12141301','John Doe','2001-01-01',3.4,now(),now())");
        dump($results);
    }

    public function insertPrepared()
    {
        $results = DB::insert("INSERT INTO students(nim,name,birthdate,gpa,created_at,updated_at) VALUES (?,?,?,?,?,?)",['49049364','James Doe','2001-01-01',3.3,now(),now()]);
        dump($results);
    }

    public function insertNamedBinding()
    {
        $results = DB::insert(
            'INSERT INTO students (nim,name,birthdate,gpa,created_at,updated_at)
            VALUES (:nim,:name,:birthdate,:gpa,:created_at,:updated_at)',
            [
                'nim' => '91527162',
                'name' => 'Riana Doe',
                'birthdate' => '2010-01-10',
                'gpa' => 2.7,
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($results);
    }

    public function update()
    {
        $results = DB::update("UPDATE students SET created_at=now(), updated_at=now() WHERE nim=?",['49049364']);
        dump($results);
    }

    public function delete()
    {
        $results = DB::delete("DELETE FROM students WHERE name=?",['John Doe']);
        dump($results);
    }

    public function select()
    {
        $results = DB::select('SELECT * FROM students');
        echo $results[0]->id.'<br>';
        echo $results[0]->nim.'<br>';
        echo $results[0]->name.'<br>';
        echo $results[0]->birthdate.'<br>';
        echo $results[0]->gpa.'<br>';
    }

    public function selectView()
    {
        $results = DB::select('SELECT * FROM students');
        return view('view-students',compact('results'));
    }

    public function selectWhere()
    {
        $results = DB::select('SELECT * FROM students WHERE gpa > 3 ORDER BY name ASC');
        return view('view-students',compact('results'));
    }
}
