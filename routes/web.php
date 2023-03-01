<?php

use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MobilBaruController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;

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
    return view('home');
});

Route::group(["prefix" => "/home"], function () {
    Route::get('/all', [HomeController::class, 'index']);
});

Route::group(["prefix" => "/register"], function(){
    Route::get('/index',[RegisterController::class, 'index']);
    Route::get('/create',[RegisterController::class, 'create']);
    Route::post('/add',[RegisterController::class, 'store']);
});

Route::group(["prefix" => "/login"], function(){
    Route::get('/index',[LoginController::class, 'index']);
});
Route::group(["prefix" => "/profile"], function(){
    Route::get('/all',[ProfileController::class, 'index']);
});
Route::group(["prefix" => "/mobil_baru"], function(){
    Route::get('/all',[MobilBaruController::class, 'index']);
});
Route::group(["prefix" => "/detail_page"], function(){
    Route::get('/all',[DetailController::class, 'index']);
});