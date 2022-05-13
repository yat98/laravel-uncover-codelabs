<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
