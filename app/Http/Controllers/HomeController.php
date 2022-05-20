<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

	public function __construct()
	{
    	$this->middleware('LoginCheck:web');
	}

    public function home()
    {
    	return view('home');
    }
    public function UserList()
    {
    	return '1,1,1,1,2,,3,5,8,7,5,6,8,87,';
    }

    public function UserLogout()
    {
        Auth::guard('web')->logout();
        return redirect('user');
    }
}
