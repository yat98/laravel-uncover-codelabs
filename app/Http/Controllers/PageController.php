<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function show(){
        $students = ["Risa Lestari","Rudi Hermawan","Bambang Kusumo","Lisa Permata"];
        return view('student', compact('students'));
    }
}
