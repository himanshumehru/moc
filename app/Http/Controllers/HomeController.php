<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $gender = Auth::user()->gender; 
        $gender = $this->checkgender($gender);
        return view('home', compact(['gender']));
    }

    public function checkgender($gender){
        if($gender == 'notsay'){
            $gender = "I'd rather not say";
        }else{
            return ucwords($gender);
        }  
        return $gender;
    }
}
