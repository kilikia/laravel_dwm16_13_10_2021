<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/page_2', function () {
    return view('page_2');
});

Route::get('/page_3', function () {
    return view('page_3');
});

Route::get('/page_4', function () {
    return view('page_4');
});
*/
Route::get('/', [NavController::class, 'home']);

Route::get('/page_2', [NavController::class, 'page2']);

Route::get('/page_3', [NavController::class, 'page3']);

Route::get('/page_4', [NavController::class, 'page4']);
