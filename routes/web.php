<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
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

Route::get('/add', function () {
    return view('add');
})->name("add");

Route::get('/', 'ArtikelController@show');
Route::post('/add_process', 'ArtikelController@add_process');
