<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;

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
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

Route::get('/cars/{id}', [CarController::class, 'details'])->where('id', '[0-9]+')->name('cars.details');

Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->where('id', '[0-9]+')->name('cars.edit');

Route::put('/cars/{id}', [CarController::class, 'saveedit'])->name('cars.saveedit');

Route::post('/cars', [CarController::class, 'savenew'])->name('cars.savenew');

Route::delete('/cars/{id}/delete', [CarController::class, 'remove'])->name('cars.remove');

Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');
