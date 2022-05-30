<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function insert(){
        $results = DB::table('students')->insert([
            'nim' => '22509601',
            'name' => 'John Doe',
            'birthdate' => '1990-08-23',
            'gpa' => '3.66',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        dump($results);
    }

    public function insertMany(){
        $results = DB::table('students')->insert([
            [
                'nim' => '22509602',
                'name' => 'Alex Doe',
                'birthdate' => '1990-08-23',
                'gpa' => '3.26',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nim' => '22509603',
                'name' => 'James Doe',
                'birthdate' => '1993-12-21',
                'gpa' => '3.14',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        dump($results);
    }

    public function update(){
        $results = DB::table('students')->where('name',  'John Doe')
            ->update([
                'birthdate' => '1992-01-03',
                'gpa' => '3.10',
                'updated_at' => now()
            ]);

        dump($results);
    }

    public function updateWhere(){
        $results = DB::table('students')->where('gpa', '>', 3)
            ->where('name', '!=', 'Alex')
            ->update([
                'birthdate' => '2010-01-01',
                'updated_at' => now()
            ]);

        dump($results);
    }

    public function updateOrInsert(){
        $results = DB::table('students')->updateOrInsert(
            [
                'nim' => '19005011',
            ],
            [
                'name' => 'Brad Doe',
                'birthdate' => '1993-11-30',
                'gpa' => '2.26',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );

        dump($results);
    }

    public function delete(){
        $results = DB::table('students')->where('gpa', '>' ,3.1)
            ->delete();

        dump($results);
    }
}
