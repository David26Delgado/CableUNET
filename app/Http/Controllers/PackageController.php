<?php

namespace App\Http\Controllers;

use App\Cable;
use App\Telefonia;
use App\Internet;
use App\Paquete;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function createPackage(){

    	$data = request()->all();

    	$descripcion = "";
    	$descripcion .= $data['internet']."<br>";
    	$descripcion .= $data['telefono']."<br>";
    	$descripcion .= $data['cable']."<br>";

        $tlf = $data['telefono'];
        $tlf = Telefonia::where('descripcion', '=', "$tlf")->get();
        $cbl = $data['cable'];
        $cbl = Cable::where('nombre', '=', "$cbl")->get();
        $net = $data['internet'];
        $net = Internet::where('descripcion', '=', "$net")->get();

    	// Paquete::create([
    	// 	'nombre' => $data['packageName'],
    	// 	'descripcion' => $descripcion,
        //  'telefonia_id' => $tlf->id,
        //  'cable_id' => $cbl->id,
        //  'internet_id' => $net->id
    	// ]);

    	return view('admin.adminDash');
    }
}
