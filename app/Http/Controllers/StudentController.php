<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('register-form');
    }

    public function processForm(Request $request){
        // echo $request->get('nim').'<br>';
        // echo $request->input('nim').'<br>';
        // echo request('nim').'<br>';
        // echo data_get($request,'nim').'<br>';
        echo $request->nim.'<br>';
        echo $request->name.'<br>';
        echo $request->email.'<br>';
        echo $request->gender.'<br>';
        echo $request->major.'<br>';
        echo $request->address.'<br>';
    }
}
