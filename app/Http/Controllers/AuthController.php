<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
	public function login(){
		return view('login');
	}
	public function register(){
		return view('register');
	}
	public function authLogin(Request $request){
		// return redirect()->route('');
	}
	public function store(Request $request){

	}
	public function logout(Request $request){
		$token = $request->user()->token()->revoke();
	}
}
