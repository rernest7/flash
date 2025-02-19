<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DecksController;

Route::get('/decks', [DecksController::class, 'index']);
Route::post('/decks', [DecksController::class, 'store']);
