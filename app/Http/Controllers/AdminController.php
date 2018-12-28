<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    public function getlogin(){
    	return view('login');
    }

    public function postlogin(AdminRequest $request){
		return view('login');
}
}

