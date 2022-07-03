<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index(){
        return view('page',['title' => 'List Student']);
    }

    public function all(Request $request){
        // echo Auth::user()->id.'<br>';
        // echo Auth::user()->name.'<br>';
        // echo Auth::user()->email.'<br>';
        // echo Auth::user()->password.'<br>';

        // echo $request->user()->id.'<br>';
        // echo $request->user()->name.'<br>';
        // echo $request->user()->email.'<br>';
        // echo $request->user()->password.'<br>';
        // dump(Auth::user());
        if(Auth::check()){
            return view('page',['title' => 'Welcome to Table Student, '.$request->user()->name]);
        }else{
            return redirect('login');
        }
    }

    public function blog(){
        return view('page',['title' => 'Blog Student']);
    }

}
