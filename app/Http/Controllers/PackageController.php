<?php

namespace App\Http\Controllers;

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

    	Paquete::create([
    		'nombre' => $data['packageName'],
    		'descripcion' => $descripcion
    	]);

    	return view('admin.adminDash');
    }
}
