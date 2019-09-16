<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    
    public function index(){
    	if (Auth::check()) {
    		return redirect('/home');
		}
    	return view('welcome');
    }

    public function onepager(){
    	if (Auth::check()) {
    		return view('one-pager');
		}
    	return view('welcome');
    }
    public function pretest(){
        if (Auth::check()) {
            return view('pretest');
        }
        return view('welcome');
    }

        public function posttest(){
        if (Auth::check()) {
            return view('post-test');
        }
        return view('welcome');
    }

        public function pcof(){
            $user = Auth::user();
        if (Auth::check()) {
            return view('pcof', compact('user'));
        }
        return view('welcome');
    }

    public function editprofile(){
        if (Auth::check()) {
            return view('edit-profile');
        }
        return view('welcome');
    }
}
