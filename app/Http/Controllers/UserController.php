<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(){
    	return view('user.userdash');
    }
    public function contratar(){
    	return view('user.contratar');
    }
    public function factura(){
    	return view('user.factura');
    }
    public function programacion(){
    	return view('user.programacion');
    }
}
