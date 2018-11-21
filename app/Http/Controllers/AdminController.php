<?php

namespace App\Http\Controllers;

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
    	return view('admin.adminPaquetes');
    }

    public function facturas(){
    	return view('admin.adminFacturas');
    }

    public function autorizacion(){
    	return view('admin.adminAutorizacion');
    }

    public function usuarios(){
    	return view('admin.adminUsuarios');
    }

    public function programacion(){
    	return view('admin.adminProgramacion');
    }
}
