<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
	public function showServiceForm(){
		$data = request()->all();
		return view('admin.adminservicios', compact('data'));
	}

	public function createInternetService(){
		
	}

	// public function showService(){
	// 	return "HOLA";
	// 	// $data = request()->all();
	// 	// dd($data);

 //  //       // User::create([
 //  //       //     'name' => $data['name'],
 //  //       //     'email' => $data['email'],
 //  //       //     'password' => $data['password']
 //  //       // ]);

 //  //       return redirect()->route('adminServicios');
	// }

	// public function internet(array $data){
	// 	$data = request()->all();

 //        User::create([
 //            'name' => $data['name'],
 //            'email' => $data['email'],
 //            'password' => $data['password']
 //        ]);

 //        return redirect()->route('home');
	// }

 //    protected function validator(array $data)
 //    {
 //        return Validator::make($data, [
 //            'name' => ['required', 'string', 'max:255'],
 //            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
 //            'password' => ['required', 'string', 'min:6', 'confirmed'],
 //        ]);
 //    }

 //    protected function create(array $data)
 //    {
 //        return User::create([
 //            'name' => $data['name'],
 //            'email' => $data['email'],
 //            'password' => Hash::make($data['password']),
 //        ]);
 //    }
}
