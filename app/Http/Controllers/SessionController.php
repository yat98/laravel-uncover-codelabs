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

    public function get(){
        
    }

    public function destroy(){
        
    }

    public function flash(){
        
    }
}
