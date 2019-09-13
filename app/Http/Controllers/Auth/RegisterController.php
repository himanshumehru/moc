<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    protected $redirectTo = '/home';

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
        $messages = [
            'abfmnumber.max'=>'The abfmnumber should not be more than 8 digits long.',
            'abfmnumber.min' => 'The abfmnumber should be at least 4 digits long.',
            'abfmnumber.integer' => 'The abfmnumber should contain numbers only.',
            'firstname.regex' => 'First name should only contain letters A-Z.',
            'lastname.regex' => 'Last name should only contain letters A-Z.',
            'age.min'=> 'Sorry, You are too old to be doing this.',
            'age.max' => 'Sorry, you are way too young for doing this.'
            ];
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'lastname' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z]+$/u'],
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'abfmnumber' =>['required', 'confirmed','integer', 'min:1000','max:99999999','unique:users'],
            'age'=>['required', 'integer', 'min:1940', 'max:1995'],
            'gender'=>['required','in:male,female,other,notsay','string']
        ], $messages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'abfmnumber' => $data['abfmnumber'],
            'age' => $data['age'],
            'gender' =>$data['gender']
        ]);
    }
}
