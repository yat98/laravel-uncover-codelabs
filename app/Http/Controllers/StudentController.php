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
}
