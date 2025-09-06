<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResidentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/residents', [
    ResidentController::class, 'index'
])->name('resident.index');