<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    public function index(){
    	if (Auth::check()) {
    		return view('home');
		}
    	return view('welcome');
    }

    public function onepager(){
    	if (Auth::check()) {
    		return view('one-pager');
		}
    	return view('welcome');
    }
}
