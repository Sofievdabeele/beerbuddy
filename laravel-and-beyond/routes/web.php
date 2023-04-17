<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\NewBeerController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController::class, 'show'])->name('home');

Route::get('/beers',[BeerController::class, 'show'])->name('beers');
Route::get('/beers/{beer:slug}', [BeerController::class, 'showDetail'])->name('beer');

Route::get('/new-beer/create', [NewBeerController::class, 'create'])->name('create');
Route::post('/new-beer', [NewBeerController::class, 'store'])->name('store');

Route::get('/new-beers',[NewBeerController::class, 'show'])->name('new-beers');
Route::get('/new-beers/{newBeer:id}', [NewBeerController::class, 'showDetail'])->name('new-beer');
