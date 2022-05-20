<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
	public function __construct()
	{
    	$this->middleware('LoginCheck:admin');
	}

    function dashboard()
    {
    	return view('dashboard');
    }
    
    public function AdminLogout()
    {
    	Auth::guard('admin')->logout();
    	return redirect('admin/');
    }
    
}
