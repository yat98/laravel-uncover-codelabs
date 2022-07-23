<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(User $user)
    {
        $time = strtotime($user->birthdate);

        $user['date'] = date('d',$time);
        $user['month'] = date('m',$time);
        $user['year'] = date('Y',$time);

        return view('user.edit', compact('user'));
    }

}
