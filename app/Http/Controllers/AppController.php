<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AppController extends Controller
{
	public function home()
	{
		return view('home');
	}
}
