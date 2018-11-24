<?php

namespace App\Http\Controllers;

use App\Internet;
use App\Telefonia;
use App\Cable;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard(){
    	return view('admin.adminDash');
    }

    public function servicios(){
    	return view('admin.adminServicios');
    }

    public function paquetes(){

        $net = Internet::all();
        $net = $net->toArray();

        $tlf = Telefonia::all();
        $tlf = $tlf->toArray();

        $cbl = Cable::all();
        $cbl = $cbl->toArray();


    	return view('admin.adminPaquetes', compact('net', 'tlf', 'cbl'));
    }

    public function facturas(){
    	return view('admin.adminFacturas');
    }

    public function autorizacion(){
    	return view('admin.adminAutorizacion');
    }

    public function index(){

        $user = User::orderBy('id','ASC')->paginate(8);
    	return view('admin.adminUsuarios')->with('users',$user);
    }

    public function programacion(){
    	return view('admin.adminProgramacion');
    }
}
