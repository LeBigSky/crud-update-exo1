<?php

use App\Http\Controllers\AnimalController;
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
Route::get('/', [AnimalController::class, 'home'])->name('home');
Route::post('/store/animal/', [AnimalController::class, 'store'])->name('store.animal');
Route::get('/create', [AnimalController::class, 'create'])->name('create');
Route::get('/show/{id}', [AnimalController::class, 'show'])->name('show.animal');
Route::get('/delete/{id}', [AnimalController::class, 'delete'])->name('delete.animal');
Route::get('/edit/{id}', [AnimalController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [AnimalController::class, 'update'])->name('update.animal');