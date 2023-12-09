<?php

use App\Http\Middleware\IsRevisor;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnounceController;

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

// HOME
Route::get('/',[PublicController::class,'home'])->name('home');

// TUTTI GLI ANNUNCI
Route::get('/announcements/all',[AnnounceController::class,'index'])->name('announcements.index');

// CREA NUOVO ANNUNCIO
Route::get('/announcements/create', [AnnounceController::class, 'create'])->name('announcement.create')->middleware('auth');

// DETTAGLI ANNUNCIO
Route::get('/announcements/show/{announce}', [AnnounceController::class, 'show'])->name('announcement.show');

// FILTRO CATEGORIA
Route::get('/announcements/categories/{category}', [AnnounceController::class, 'filterByCategory'])->name('announcement.filter');

// RICERCA ANNUNCIO
Route::get('/search/annoucement', [PublicController::class, 'searchAnnouncements'])->name('announcements.search');

// CAMBIO LINGUA
Route::post('/lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set_language_locale');


// HOME REVISORE
Route::get('/revisor/Home',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

// ACCETTA ANNUNCIO
Route::patch('/accept/{announce}', [RevisorController::class, 'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

// RIFIUTA ANNUNCIO
Route::patch('/reject/{announce}', [RevisorController::class, 'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

// LAVORA CON NOI
Route::get('/workwithus', [PublicController::class, 'workWithUs'])->middleware('auth')->name('workwithus');

// DIVENTA REVISORE
Route::get('/request/revisor', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

// RENDI UTENTE REVISORE
Route::get('/make/revisor/{user}', [RevisorController::class, 'makeRevisor'])->middleware('isAdmin')->name('make.revisor');
