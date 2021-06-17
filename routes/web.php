<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\IsAdmin;

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



require __DIR__.'/auth.php';




Route::get('/admin/create', [EventController::class, 'create'])->name('admin_create')->middleware(IsAdmin::class);
// Route::get('/events/createUser', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store'])->name('store')->middleware(IsAdmin::class);

//realmente esto es para el habilitar el join, no el edit
// Route::get('events/editUser/{id}', [EventController::class, 'edit']);
Route::get('join/{id}', [EventController::class, 'join']);
Route::get('/admin/edit/{id}', [EventController::class, 'edit'])->name('admin_edit')->middleware(IsAdmin::class);

Route::delete('events/{id}', [EventController::class, 'destroy'])->name('destroy')->middleware(IsAdmin::class);

Route::patch('/admin/edit/{id}', [EventController::class, 'update'])->name('update')->middleware(IsAdmin::class);




Route::get('/index',[EventController::class, 'index'])->name('logged_index');




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('show_home');
