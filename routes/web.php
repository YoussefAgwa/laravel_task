<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
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
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/' , [mainController::class , 'home']);
Route::get('/about' , [mainController::class , 'about']);
Route::get('/contact' , [mainController::class , 'contact']);
Route::get('/post' , [mainController::class , 'post']);