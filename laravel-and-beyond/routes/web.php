<?php

use App\Http\Controllers\BeerController;
use App\Http\Controllers\NewBeerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
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

Route::get('/previousbeer/{id}', [BeerController::class, 'showPreviousBeer'])->name('previous-beer');
Route::get('/nextbeer/{id}', [BeerController::class, 'showNextBeer'])->name('next-beer');

Route::get('/new-beer/create', [NewBeerController::class, 'create'])->name('create');
Route::post('/new-beer', [NewBeerController::class, 'store'])->name('store');

Route::get('/new-beers',[NewBeerController::class, 'show'])->name('new-beers');
Route::get('/new-beers/{newBeer:id}', [NewBeerController::class, 'showDetail'])->name('new-beer');

Route::get('/previousnewbeer/{id}', [NewBeerController::class, 'showPreviousNewBeer'])->name('previous-new-beer');
Route::get('/nextnewbeer/{id}', [NewBeerController::class, 'showNextNewBeer'])->name('next-new-beer');

Route::get('/new-beer/edit/{newBeer:id}', [NewBeerController::class, 'editNewBeer'])->name('edit-new-beer');
Route::post('/new-beer/update/{newBeer:id}', [NewBeerController::class, 'updateNewBeer'])->name('update-new-beer');
Route::get('/new-beer/delete/{newBeer:id}', [NewBeerController::class, 'deleteNewBeer'])->name('delete-new-beer');

Route::get('/profile', [ProfileController::class, 'index'])
    ->name('profile')
    ->middleware('auth');

// login/register/logout
Route::get('/register', [SessionController::class, 'register'])->name('register');
Route::post('/register', [SessionController::class, 'handleRegister'])->name('handle-register');
Route::get('/login', [SessionController::class, 'login'])->name('login');
Route::post('/login-user', [SessionController::class, 'authenticate'])->name('login-user');
Route::get('/dashboard', [SessionController::class, 'dashboard'])->name('dashboard');
// Route::get('/dashboard', 'dashboard')->name('dashboard');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout');
