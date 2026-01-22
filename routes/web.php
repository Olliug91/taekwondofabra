<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PoomsaeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/conocenos', [PageController::class, 'conocenos'])->name('conocenos');
Route::get('/preguntas-frecuentes', [PageController::class, 'faq'])->name('faq');
Route::get('/{id}poomsae', [PoomsaeController::class, 'show'])->where('id', '[0-9]+')->name('poomsae.show');

// Static legal pages can also be handled by PageController or closures for simplicity
Route::view('/aviso-legal', 'pages.legal.aviso')->name('legal.aviso');
Route::view('/politica-privacidad', 'pages.legal.privacidad')->name('legal.privacidad');
Route::view('/politica-cookies', 'pages.legal.cookies')->name('legal.cookies');
