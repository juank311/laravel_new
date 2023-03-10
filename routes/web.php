<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');


//Route::get('/usuarios', [UsuariosController::class, 'index', 'search'])->name('usuarios');

//Route::get('/usuarios', [UsuariosController::class, 'search'])->name('usuarios');

Route::resource('usuarios', UsuariosController::class);

Route::get('/login', function () {
    return view('login');
})->name('login');