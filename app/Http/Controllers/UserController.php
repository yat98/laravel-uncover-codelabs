<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user)
    {
        $time = strtotime($user->birthdate);

        $user['day'] = date('d',$time);
        $user['month'] = date('m',$time);
        $user['year'] = date('y',$time);

        return view('user.edit', compact('user'));
    }

}
