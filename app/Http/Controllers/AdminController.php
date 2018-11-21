<?php

namespace App\Http\Controllers;

use App\Internet;
use App\Telefonia;
use App\Cable;
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

    public function usuarios(){
    	return view('admin.adminUsuarios');
    }

    public function programacion(){
    	return view('admin.adminProgramacion');
    }
}
