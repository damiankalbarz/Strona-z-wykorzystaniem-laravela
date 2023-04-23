<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/car', [App\Http\Controllers\HomeController::class, 'index'])->name('cars.index');

Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index')->middleware('auth');
Route::post('/cars', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store')->middleware('auth');
Route::get('/cars/edit/{car}', [CarController::class, 'edit'])->name('cars.edit')->middleware('auth');
Route::post('/cars/{car}', [CarController::class, 'update'])->name('cars.update')->middleware('auth');



Route::get('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy')->middleware('auth')->where(['car' => '[0-9]+']);

Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create')->middleware('auth');



Route::get('/home', function (){
   return redirect()->route('cars.index');
});


