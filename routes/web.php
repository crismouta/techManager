<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

Route::get('/dashboard', [EventController::class, 'index'])->name('dashboard');


require __DIR__.'/auth.php';




<<<<<<< HEAD
Route::get('/events/create', [EventController::class, 'create']);
=======
Route::get('/events/createUser', [EventController::class, 'create']);
>>>>>>> 30e904341971c361782a650ab3cdac103870172d
Route::post('/events', [EventController::class, 'store']);


Route::get('events/editUser/{id}', [EventController::class, 'edit']);

Route::delete('events/{id}', [EventController::class, 'destroy'])->name('destroy');


Route::patch('/events/editUser/{id}', [EventController::class, 'update']);

<<<<<<< HEAD
Route::get('events/showAdmin/{id}', [EventController::class, 'show']);
=======
Route::get('events/showUser/{id}', [EventController::class, 'show']);
>>>>>>> 30e904341971c361782a650ab3cdac103870172d
