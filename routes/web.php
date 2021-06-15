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




Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);


Route::get('events/edit/{id}', [EventController::class, 'edit']);

Route::delete('events/{id}', [EventController::class, 'destroy'])->name('destroy');


Route::patch('/events/edit/{id}', [EventController::class, 'update']);

Route::get('events/showAdmin/{id}', [EventController::class, 'show']);
