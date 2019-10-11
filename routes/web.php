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
    return view('LoginDoria.login');
});

Route::get('/loginn', function () {
    return view('LoginDoria.login');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Route::post('login', 'Auth\LoginController@login');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...

Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');

Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//Usuario
Route::get('/usuario/perfil', 'UserController@show_account')->name('usuario.perfil');

Route::put('/usuarioPerfil/{user}', 'UserController@updatePerfil')->name('usuarioperfil.update');


//Jefe de Proceso
Route::get('/usuario/{user}', 'UserController@show')->name('usuario.show');

Route::put('/usuario/{user}', 'UserController@update')->name('usuario.update');

Route::delete('/usuario/{user}', 'UserController@destroy')->name('usuario.destroy');

Route::get('/lista', 'UserController@index')->name('usuario.list');

Route::get('/nuevo', 'UserController@create')->name('usuario.create');

Route::post('/crear', 'UserController@store');

//Distribuidor
Route::get('/distribuidor/{user}', 'DistribuidorController@show')->name('distribuidor.show');

Route::put('/distribuidor/{user}', 'DistribuidorController@update')->name('distribuidor.update');

Route::delete('/distribuidor/{user}', 'DistribuidorController@destroy')->name('distribuidor.destroy');

Route::get('/distribuidor.lista', 'DistribuidorController@index')->name('distribuidor.list');

Route::get('/distribuidor.nuevo', 'DistribuidorController@create')->name('distribuidor.create');

Route::post('/distribuidor.crear', 'DistribuidorController@store');

//Detallista
Route::get('/detallista/{user}', 'DetallistaController@show')->name('detallista.show');

Route::put('/detallista/{user}', 'DetallistaController@update')->name('detallista.update');

Route::delete('/detallista/{user}', 'DetallistaController@destroy')->name('detallista.destroy');

Route::get('/detallista.lista', 'DetallistaController@index')->name('detallista.list');

Route::get('/detallista.nuevo', 'DetallistaController@create')->name('detallista.create');

Route::post('/detallista.crear', 'DetallistaController@store');

//Detallista
Route::get('/proveedor/{user}', 'ProveedorController@show')->name('proveedor.show');

Route::put('/proveedor/{user}', 'ProveedorController@update')->name('proveedor.update');

Route::delete('/proveedor/{user}', 'ProveedorController@destroy')->name('proveedor.destroy');

Route::get('/proveedor.lista', 'ProveedorController@index')->name('proveedor.list');

Route::get('/proveedor.nuevo', 'ProveedorController@create')->name('proveedor.create');

Route::post('/proveedor.crear', 'ProveedorController@store');

