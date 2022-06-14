<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StudentController extends Controller
{
    public function registerForm($locale = 'id')
    {
        App::setLocale($locale);
        return view('register-form');
    }

    public function processForm(Request $request)
    {
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'gender'=> 'required|in:M,F',
            'major' => 'required',
            'address' => '',
        ]);
        dump($validateData);
    }
}
