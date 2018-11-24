<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUsuariosController extends Controller
{
    public function eliminar(){
    	$id = request()->all()['user_id'];

    	$user = User::where('id', '=', "$id")->first();

    	$user->delete();

    	return redirect()->route('adminUsuarios');
    }

    public function showEdit(){
    	$id = request()->all()['user_id'];

    	$user = User::where('id', '=', "$id")->first();

    	return view('admin.adminEditarUsuarios', compact('user'));
    }

    public function editar(){
    	$id = request()->all()['id'];

    	$user = User::where('id', '=', "$id")->first();

    	if($user->name != request()->all()['name'])
    		$user->name = request()->all()['name'];

    	if($user->apellido != request()->all()['apellido'])
    		$user->apellido = request()->all()['apellido'];

    	if($user->email != request()->all()['email'])
    		$user->email = request()->all()['email'];

    	$user->save();

    	$user = User::orderBy('id','ASC')->paginate(8);
    	return view('admin.adminUsuarios')->with('users',$user);
    }

    public function makeAdmin(){

    	$id = request()->all()['user_id'];

    	$user = User::where('id', '=', "$id")->first();
    	$user->is_admin = true;
    	$user->save();

    	$user = User::orderBy('id','ASC')->paginate(8);
    	return view('admin.adminUsuarios')->with('users',$user);
    }
}
