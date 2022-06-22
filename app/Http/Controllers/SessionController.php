<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index(){
        echo '<ul>';
        echo '<li><a href="/session/create">Create</a></li>';
        echo '<li><a href="/session/get">Get</a></li>';
        echo '<li><a href="/session/delete">Delete</a></li>';
        echo '<li><a href="/session/flash">Flash</a></li>';
        echo '</ul>';
    }

    public function create(Request $request){
        session(['role' => 'admin', 'name' => 'John']);
        // $request->session()->put('role', 'admin');
        // Session::put('role', 'admin');
        return "Session created";
    }

    public function get(Request $request){
        echo 'Role: '.session('role');
        echo '<br>';
        echo 'Name: '.session('name');
        echo '<hr>';

        // echo 'Role: '.$request->session()->get('role');
        // echo '<br>';
        // echo 'Name: '.$request->session()->get('name');
        // echo '<hr>';

        // echo 'Role: '.Session::get('role');
        // echo '<br>';
        // echo 'Name: '.Session::get('name');
        // echo '<hr>';

        dump(session()->all());
        $defaultValueSession = $request->session()->get('city', 'Jakarta');
        echo 'Session city value is '.$defaultValueSession.'<br>';

        if(session()->has('role')){
            echo 'Session \'role\' detected: '.session('role');
        }
    }

    public function destroy(Request $request){
        session()->forget('role');
        // $request->session()->forget('role');
        // Session::forget('role');
        session()->flush();
        // $request->session()->flush();
        // Session::forget();
        echo 'All Session has deleted';
    }

    public function flash(){
        
    }
}
