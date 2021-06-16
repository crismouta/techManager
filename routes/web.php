<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard'); 

// Route::get('/dashboard', [EventController::class, 'index'])->name('dashboard');


require __DIR__.'/auth.php';




Route::get('/events/createAdmin', [EventController::class, 'create']);
// Route::get('/events/createUser', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

//realmente esto es para el habilitar el join, no el edit
// Route::get('events/editUser/{id}', [EventController::class, 'edit']);
Route::get('events/editAdmin/{id}', [EventController::class, 'edit']);

Route::delete('events/{id}', [EventController::class, 'destroy'])->name('destroy');

Route::patch('/events/editAdmin/{id}', [EventController::class, 'update']);

Route::get('events/showAdmin/{id}', [EventController::class, 'show']);
// Route::get('events/showUser/{id}', [EventController::class, 'show']);



Route::get('/admin/index',[EventController::class, 'index'])->name('index_admin')->middleware((isAdmin::class));


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [HomeController::class, 'show'])->name('show_home');
