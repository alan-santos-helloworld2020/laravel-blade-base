<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Views\ClienteController;
use App\Http\Controllers\Views\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PagesController::class)->group(function(){
    Route::get("/","home")->name("home");
    Route::get("/cadastro","cadastro")->name("cadastro");
    Route::get("/clientes","clientes")->name("clientes");
    Route::get("/sobre","sobre")->name("sobre");

});
//Route::resource("/", ClienteController::class);
