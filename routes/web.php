<?php

use App\Http\Controllers\CancionesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CodigoPostalController;
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

Route::get('/', function () {return view('welcome');});
Route::get('/verCodigo',[CodigoPostalController::class,'mostrarCodigosPostales'])->name('verCodigoPostal2');
Route::get('/index', [CodigoPostalController::class, 'codigoPostal']);
Route::get('/obtenerTipoAsenta/{id}', [CodigoPostalController::class, 'obtenerTipoAsenta']);
