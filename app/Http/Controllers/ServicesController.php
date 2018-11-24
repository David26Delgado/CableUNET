<?php

namespace App\Http\Controllers;

use App\Internet;
use App\Telefonia;
use App\Cable;
use App\Canal;
use App\Pivote;
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

		return view('admin.adminservicios', compact('data'));
	}

	public function createCblService(){

		$data = request()->all();

		$canales = Canal::all();

		$cable = Cable::create([
			'nombre' => $data['nombreCable'],
			'precio' => $data['precio']
		]);

		for ($i=0; $i < $data['numeroCanales']; $i++){

			$band = false;

			foreach ($canales as $canal) {
				if($canal->nombre == $data[$i+1]){
					$band = true;
					Pivote::create([
						'cable_id' => $cable->id,
						'canal_id' => $canal->id
					]);
				}
			}

			if(!$band){
				$aux = Canal::create([
					'nombre' => $data[$i+1]
				]);
				Pivote::create([
					'cable_id' => $cable->id,
					'canal_id' => $aux->id
				]);
			}
		}

		

		for ($i=0; $i < $data['numeroCanales']; $i++) { 
			
		}

		return view('admin.adminservicios');
	}

}
