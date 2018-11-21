<?php

namespace App\Http\Controllers;

use App\Internet;
use App\Telefonia;
use App\Cable;
use App\Canal;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
	public function showServiceForm(){
		$data = request()->all();
		return view('admin.adminservicios', compact('data'));
	}

	public function createNetService(){

		$data = request()->all();

		if($data['velocidadInternet'] >= 256)
				$data['velocidadInternet'] = "Internet de ".$data['velocidadInternet']." Kbps";
			else
				$data['velocidadInternet'] = "Internet de ".$data['velocidadInternet']." Mbps";

		Internet::create([
            'descripcion' => $data['velocidadInternet'],
            'precio' => $data['precio']
        ]);

		return view('admin.adminservicios');
	}

	public function createTlfService(){

		$data = request()->all();

		$description = "Plan con ".$data['minutos']." minutos, ".$data['mensajes']." mensajes y ".$data['megas']." megas de navegación.";

		Telefonia::create([
            'descripcion' => $description,
            'precio' => $data['precio']
        ]);

		return view('admin.adminservicios');
	}

	public function createChannels(){
		$data = request()->all();

		for ($i=0; $i < $data['numeroCanales']; $i++)
			$array[] = $i+1;

		return view('admin.adminservicios', compact('data', 'array'));
	}

	public function createCblService(){
		$data = request()->all();

		$canales = "";

		for ($i=0; $i < $data['numeroCanales']; $i++){
			Canal::create([
				'nombre' => $data[$i+1]
			]);
			$canales .= $data[$i+1].", ";
		}

		Cable::create([
			'nombre' => $data['nombreCable'],
			'canales' => $canales,
			'precio' => $data['precio']
		]);

		return view('admin.adminservicios');
	}

}
