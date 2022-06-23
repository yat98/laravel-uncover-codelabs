<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function login(){
        return view('form-login');
    }

    public function getLogin(Request $request){
        $request->validate([
            'username' => 'required'
        ]);

        $validUsername = ['john', 'james', 'albert', 'brad'];
        if(in_array($request->username, $validUsername)){
            session(['username' => $request->username]);
            return redirect('student');
        }else{
            return back()->withInput()->with('message', 'Username not valid');
        }
    }

    public function logout(){
        session()->forget('username');
        return redirect('login')->with('message', 'Logout success');
    }

    public function register(){
        return view('page',['title' => 'Register Student']);
    }

    public function index(){
        return view('page',['title' => 'All Student']);
    }

    public function blog(){
        return view('page',['title' => 'Blog Student']);
    }
}
