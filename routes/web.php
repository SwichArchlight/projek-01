<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('frontend.index');
});













// admin stuff
/////////////////////////////////////////////////////////////////////////////////////////////
auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::get('/admin//form', function() {
    return view('form');
} );

Route::get('/admin/data', 'App\Http\Controllers\SiswaController@index');
Route::post('/admin/data/store','App\Http\Controllers\SiswaController@store');

Route::get('/admin/data/edit/{id}', 'App\Http\Controllers\SiswaController@edit');
Route::patch('/admin/data/update/{id}','App\Http\Controllers\SiswaController@update');
Route::delete('/admin/data/delete/{id}','App\Http\Controllers\SiswaController@delete');

Route::get('/admin/tambah-data', function() {
    return view('backend.tambah');
} );

//BANK SOAL
Route::get('/admin/soal', 'App\Http\Controllers\SoalController@index');
