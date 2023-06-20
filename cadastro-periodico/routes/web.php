<?php

use App\Http\Controllers\PeriodicoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PeriodicoController::class, 'index']);
Route::get('/events/create', [PeriodicoController::class, 'create']);
Route::get('/events/{codigo}', [PeriodicoController::class, 'show']);
Route::post('/periodicos', [PeriodicoController::class, 'store']);

Route::get('/contact', function () {
    return view('contact');
});

