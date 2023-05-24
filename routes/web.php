<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/Book/{id}', [BookController::class, 'detailBook'])->name('detailBook');
Route::get('/category/{id}', [BookController::class, 'detailCategory'])->name('detailCategory');
Route::get('/publisher', [BookController::class, 'publisher'])->name('publisher');
Route::get('/detailpublisher/{id}', [BookController::class, 'detailPublisher'])->name('detailPublisher');
Route::get('/contact', [BookController::class, 'contact'])->name('contact');
