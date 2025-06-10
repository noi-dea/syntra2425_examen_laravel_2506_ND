<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;


Route::get('/trips', [TripController::class, 'index']);
