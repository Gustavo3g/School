<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\RegisteredsController;
use App\Http\Controllers\StudentsController;
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

Route::resource('students', StudentsController::class);
Route::resource('classes', ClassesController::class);

Route::prefix('registered')->group(function (){
    Route::get('/',[RegisteredsController::class, 'index'])->name('registered.index');
    Route::get('/create/{id}',[RegisteredsController::class, 'create'])->name('registered.create');
    Route::post('/store',[RegisteredsController::class, 'store'])->name('registered.store');
});

