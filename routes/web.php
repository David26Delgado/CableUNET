<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//Vistas del Administrador

Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/servicios', 'AdminController@servicios')->name('adminServicios');
Route::get('/admin/paquetes', 'AdminController@paquetes')->name('adminPaquetes');
Route::get('/admin/facturas', 'AdminController@facturas')->name('adminFacturas');
Route::get('/admin/autorizacion', 'AdminController@autorizacion')->name('adminAutorizacion');
Route::get('/admin/usuarios', 'AdminController@usuarios')->name('adminUsuarios');
Route::get('/admin/programacion', 'AdminController@programacion')->name('adminProgramacion');

#Creación de servicios
Route::post('service', 'ServicesController@showServiceForm')->name('serviceForm');
Route::post('internet', 'ServicesController@createNetService')->name('createNetService');
Route::post('telefonia', 'ServicesController@createTlfService')->name('createTlfService');
Route::post('cable', 'ServicesController@createChannels')->name('createChannels');
Route::post('canales', 'ServicesController@createCblService')->name('createCblService');

#Creación de paquetes
Route::post('paquetes', 'PackageController@createPackage')->name('createPackage');

//Vistas del Usuario

Route::get('/user/dashboard', 'UserController@dashboard');
Route::get('/user/contratar', 'UserController@contratar')->name('userContrar');
Route::get('/user/factura','UserController@factura')->name('userFactura');
Route::get('/user/programacion','UserController@programacion')->name('userProgramacion');

