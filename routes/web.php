<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\WeatherAPIController;

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

Route::get('/search', [SearchController::class,'index'])->name('search.index');
Route::get('/weatherData', [WeatherAPIController::class,'weatherData'])->name('weatherAPI.weatherdata');
Route::post('/weatherData', [WeatherAPIController::class,'weatherData'])->name('weatherAPI.weatherdata');