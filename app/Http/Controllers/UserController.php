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

    public function update(Request $request, User $user)
    {
        $birthdate = $request["year"].str_pad($request["month"],2,0,STR_PAD_LEFT).
        str_pad($request["date"],2,0,STR_PAD_LEFT);
        $request['birthdate'] = $birthdate;
        $validateDate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user->id],
            'birthdate' => ['required', 'date', 'before:-10years','after:-100years'],
            'job' => ['sometimes', 'nullable', 'string', 'max:255'],
            'city' => ['sometimes', 'nullable', 'string', 'max:255'],
            'bio'  => ['sometimes', 'nullable', 'string'],
            'profile_picture' => ['sometimes', 'file', 'image', 'max:2000'],
            'background_picture' => ['required', 'integer', 'min:1', 'max:12']
        ]);

        if($request->hasFile('profile_picture')){
            $slug = Str::slug($data['name']);
            $extFile = $request->profile_picture->getClientOriginalExtension();
            $fileName = $slug.'-'.time().'.'.$extFile;
            $request->profile_picture->storeAs('public/uploads',$fileName);
        } else {
            $fileName = $user->profile_picture;
        }

        $validateDate['profile_picture'] = $fileName;
        $user->update($validateDate);
        return redirect('/#member-list')->with([
            'message' => 'update', 'name' => $user->name
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/#member-list')->with([
            'message' => 'delete', 'name' => $user->name
        ]);
    }
}
