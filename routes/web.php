<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasalController;

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


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/NEW', [App\Http\Controllers\CasalController::class, 'create'])->name('new.casal');
Route::get('/casals', [App\Http\Controllers\CasalController::class, 'index'])->name('casals');
Route::post('/store', [App\Http\Controllers\CasalController::class, 'store'])->name('post.casal');
Route::get('/edit/{casal_id}', [App\Http\Controllers\CasalController::class, 'edit'])->name('edit.casal');
Route::post('/update', [App\Http\Controllers\CasalController::class, 'update'])->name('update.casal');
Route::get('/destroy/{casal_id}', [App\Http\Controllers\CasalController::class, 'destroy'])->name('destroy.casal');
