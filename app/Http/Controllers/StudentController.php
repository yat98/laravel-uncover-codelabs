<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('page',['title' => 'List Student']);
    }

    public function all(){
        return view('page',['title' => 'Table Student']);
    }

    public function blog(){
        return view('page',['title' => 'Blog Student']);
    }

}
