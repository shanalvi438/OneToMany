<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoyController;
use App\Http\Controllers\GirlController;

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

    Route::get('/girls', [GirlController::class, 'index'])->name('girls.index');
    Route::get('/girls/create', [GirlController::class, 'create'])->name('girls.create');
    Route::post('/girls', [GirlController::class, 'store'])->name('girls.store');
    Route::get('/girls/{girl}', [GirlController::class, 'show'])->name('girls.show');
    Route::get('/girls/{girl}/edit', [GirlController::class, 'edit'])->name('girls.edit');
    Route::put('/girls/{girl}', [GirlController::class, 'update'])->name('girls.update');
    Route::delete('/girls/{girl}', [GirlController::class, 'destroy'])->name('girls.destroy');

    // Boys routes
    Route::get('/boys', [BoyController::class, 'index'])->name('boys.index');
    Route::get('/boys/create/{girl_id}', [BoyController::class, 'create'])->name('boys.create');
    Route::post('/boys', [BoyController::class, 'store'])->name('boys.store');
    Route::get('/boys/{boy}', [BoyController::class, 'show'])->name('boys.show');
    Route::get('/boys/{boy}/edit', [BoyController::class, 'edit'])->name('boys.edit');
    Route::put('/boys/{boy}', [BoyController::class, 'update'])->name('boys.update');
    Route::delete('/boys/{boy}', [BoyController::class, 'destroy'])->name('boys.destroy');
