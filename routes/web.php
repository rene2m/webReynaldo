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
/*NAVBAR*/
Route::get('/', 'PublicofertController@ofertas');


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/productos', 'StoreController@index');

Route::get('productos/{slug}',
[
    'as'   => 'product-details',
    'uses' => 'StoreController@show'
]);
Route::get('categorias/{slug}',[
    'uses' => 'StoreController@searchCategory',
])->name('searchCategory');


Route::get('/profesiones', 'StoreServiciosController@index');
Route::get('profesiones/{slug}',
[
    'as'   => 'profesiones-details',
    'uses' => 'StoreServiciosController@show'
]);
Route::get('servicios/{slug}',[
    'uses' => 'StoreServiciosController@searchServicio',
])->name('searchServicio');



Route::post('/clientes', 'ClientesController@create');

Route::get('/nosotros', 'ClientesController@clientes');

Route::resource('/contacto', 'ContactController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* GESTION*/
Route::resource('usuarios','UserController')->middleware('auth')->middleware('auth');
///ruta para servicios profesinoales 
Route::resource('serviciosP','ClientesController')->middleware('auth')->middleware('auth');
Route::resource('roles','RoleController')->middleware('auth')->middleware('auth');
Route::resource('/clientes/todas', 'ClientesController')->middleware('auth');
Route::resource('/proveedores', 'ProveedoresController')->middleware('auth');
Route::resource('/ofertas/todas', 'PublicofertController')->middleware('auth');

Route::resource('/Categorias', 'CategoriasController')->middleware('auth');
Route::resource('/producto', 'ProductoController')->middleware('auth');

//rutas para accede a los servicios profesionales y profesiones 

Route::resource('/Servicios', 'ServiciosController')->middleware('auth');
Route::resource('/profesion', 'ProfesionesController')->middleware('auth');


/*ADMIN*/