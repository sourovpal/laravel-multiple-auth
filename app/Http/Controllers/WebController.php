<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function __construct()
    {
        $this->middleware('MultipleLoginCheck:admin');
        $this->middleware('RedirectLogin:web');
    }

     public function showLoginForm()
    {
    	return view('userLogin');
    }

    public function login(Request $request)
    {
    	$this->loginValidation($request);
    	$data = $request->only('email', 'password');
    	if(Auth::guard('web')->attempt($data))
    	{
    		return redirect('user/home');
    	}
    	else
    	{
    		return "hello login  not success";
    	}
    }

    private function loginValidation(Request $request)
    {
    	$request->validate([
    		'email' => 'required|string',
    		'password' => 'required|string',
    	]);
    }

    // public function UserLogout()
    // {
    // 	Auth::guard('web')->logout();
    // 	return redirect('user');
    // }
}
