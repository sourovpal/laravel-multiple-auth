<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('MultipleLoginCheck:web');
        $this->middleware('RedirectLogin:admin');
    }

    public function showLoginForm()
    {
    	return view('adminLogin');
    }

    public function login(Request $request)
    {
    	$this->loginValidation($request);
    	$data = $request->only('email', 'password');
    	if(Auth::guard('admin')->attempt($data))
    	{
    		return redirect('admin/dashboard');
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

    // public function AdminLogout()
    // {
    // 	Auth::guard('admin')->logout();
    // 	return redirect('admin/');
    // }

}
