<?php

use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowPersona;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard',ShowPersona::class)->name('dashboard');

/* Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
}); */

Route::post('/form',[PersonaController::class,'create']);

Route::view('/alert','livewire.alert');
/* 
Route::get('prueba/{nombre}', ShowPersona::class); */
