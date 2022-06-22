<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function register(){
        return 'Register form';
    }

    public function all(){
        return 'All student data';
    }

    public function blog(){
        return 'Student blog page';
    }
}
