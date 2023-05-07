<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!!
|
*/

Route::get('/rty', function () {
    return view('welcome');
});

Route::get('/home', [PersonalController::class, 'index']); 
Route::get('/resume', [PersonalController::class, 'resume']);
Route::get('/projects', [PersonalController::class, 'projects']);

Route::get('/contact', [PersonalController::class, 'contact']);
Route::post('/contact', [PersonalController::class, 'contactForm']); 
