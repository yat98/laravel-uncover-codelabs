<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $birthdate = $data["year"].str_pad($data["month"],2,0,STR_PAD_LEFT).
            str_pad($data["date"],2,0,STR_PAD_LEFT);
        $data['birthdate'] = $birthdate;
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'birthdate' => ['required', 'date', 'before:-10years','after:-100years'],
            'job' => ['sometimes', 'nullable', 'string', 'max:255'],
            'city' => ['sometimes', 'nullable', 'string', 'max:255'],
            'bio'  => ['sometimes', 'nullable', 'string'],
            'profile_picture' => ['sometimes', 'file', 'image', 'max:2000'],
            'background_picture' => ['required', 'integer', 'min:1', 'max:12']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $birthdate = $data["year"].str_pad($data["month"],2,0,STR_PAD_LEFT).
        str_pad($data["date"],2,0,STR_PAD_LEFT);

        $request = request();

        if($request->hasFile('profile_picture')){
            $slug = Str::slug($data['name']);
            $extFile = $request->profile_picture->getClientOriginalExtension();
            $fileName = $slug.'-'.time().'.'.$extFile;
            $request->profile_picture->storeAs('public/uploads',$fileName);
        } else {
            $fileName = 'default_profile.jpg';
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'name' => $data['name'],
            'birthdate' => $birthdate,
            'job' => $data['job'],
            'city' => $data['city'],
            'bio' => $data['bio'],
            'picture_profile' => $fileName,
            'background_picture' => $data['background_picture'],
        ]);
    }
}
