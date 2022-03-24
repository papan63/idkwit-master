<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{KelasController};

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

// Route::get('/', 'kelascontroller@index')
Route::get('/', [KelasController::class, "index"]);