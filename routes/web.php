<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;


Route::get('/', [PageController::class, 'index'])->name('movies');

Route::get('/movies', [PageController::class, 'movies'])->name('movies');