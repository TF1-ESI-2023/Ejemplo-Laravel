<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;

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


Route::get("/",[PersonaController::class,"Listar"]);

Route::get('/personas', function () {
    return view('crear');
});


Route::post("/personas",[PersonaController::class,"Crear"]);
Route::get("/personas/{d}",[PersonaController::class,"Detalles"]);
Route::get("/eliminar/{d}",[PersonaController::class,"Eliminar"]);
Route::post("/modificar",[PersonaController::class,"Modificar"]);
