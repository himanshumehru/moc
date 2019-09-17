<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Sheets;
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

    public function pretestsubmit(){
        if (Auth::check()){
        $user = Auth::user();
        $result = array_merge([
            'First Name' => $user->firstname, 
            'Last Name'  =>$user->lastname, 
            'ABFM Number' =>$user->abfmnumber, 
            'Birth Year' => $user->age, 
            'Email' =>$user->email, 
            'Gender' =>$user->gender], 
            request()->all());
        unset($result['_token']);
        //connect with google sheets
        $token = [
            'access_token'  => $user->access_token,
            'refresh_token' => $user->refresh_token,
            'expires_in'    => $user->expires_in,
            'created'       => $user->updated_at->getTimestamp(),
        ];

// all() returns array
        $values = Sheets::spreadsheet('1yjdLppsDsQg0trZRBpqLt2h4OUjQxMm1ds-H3oFCPmE')->sheet('Sheet1')->all();
        Sheets::sheet('Sheet 1')->range('A2')->append([['3', 'name3', 'mail3']]);
        //$values = Sheets::range('A2')->all();
            
            
            dd($result);
        } else{
            return redirect('/');
    }
}
}
