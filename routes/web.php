<?php

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
use App\Http\Controllers\StudentController;
Route::get('/', [StudentController::class, 'index'])->name('home');
Route::get('create', [StudentController::class, 'create'])->name('create');
Route::post('store', [StudentController::class, 'store'])->name('store');
Route::get('edit/{id}', [StudentController::class, 'edit'])->name('edit');
Route::put('update/{id}', [StudentController::class, 'update'])->name('update');
Route::delete('student/{id}', [StudentController::class, 'destroy'])->name('destroy');


