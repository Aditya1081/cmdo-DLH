<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\spekalatController;
use App\Http\Controllers\detailalatController;

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
    return view('admin.index');
});


Route::prefix('alat')->group(function(){
    Route::get('/index', [AlatController::class,'index'])->name('alat.view');
    Route::get('/add', [AlatController::class,'create'])->name('alat.add');
    // Route::post('/store', [FilmController::class,'FilmStore'])->name('film.store');
    Route::get('/edit', [AlatController::class,'edit'])->name('alat.edit');
    // Route::post('/update/{id}', [FilmController::class,'FilmUpdate'])->name('Film.update');
});
Route::prefix('spekalat')->group(function(){
    Route::get('/index', [spekalatController::class,'index'])->name('spekalat.view');
    Route::get('/add', [spekalatController::class,'create'])->name('spekalat.add');
    // Route::post('/store', [FilmController::class,'FilmStore'])->name('film.store');
    Route::get('/edit', [spekalatController::class,'edit'])->name('spekalat.edit');
    // Route::post('/update/{id}', [FilmController::class,'FilmUpdate'])->name('Film.update');
});
Route::prefix('detailalat')->group(function(){
    Route::get('/index', [detailalatController::class,'index'])->name('detailalat.view');
    Route::get('/indexdetail', [detailalatController::class,'indexdetail'])->name('detailalat.detail');
    Route::get('/add', [detailalatController::class,'create'])->name('detailalat.add');
    // Route::post('/store', [FilmController::class,'FilmStore'])->name('film.store');
    Route::get('/edit', [detailalatController::class,'edit'])->name('detailalat.edit');
    // Route::post('/update/{id}', [FilmController::class,'FilmUpdate'])->name('Film.update');
});