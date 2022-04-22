<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'App\Http\Controllers\UsuarioController@ir_home')->middleware('auth');

//ADMINISTRACION
/*Route::get('/admin', [AdministradorController::class, 'inicio_sesion'])->name('inicio_sesion');
Route::post('/verificar', [AdministradorController::class, 'verificar'])->name('verificar');
Route::get('/inicioAdmin', function(){
    return view('administrador.inicioAdmin');
});*/

//Links
Auth::routes();
Route::get('/productosAdmin', [AdministradorController::class, 'productosAdmin'])->name('productosAdmin');
Route::get('/categoriasAdmin', [AdministradorController::class, 'categoriasAdmin'])->name('categoriasAdmin');
Route::get('/pedidosAdmin', [AdministradorController::class, 'pedidosAdmin'])->name('pedidosAdmin');

//Auth::routes();


