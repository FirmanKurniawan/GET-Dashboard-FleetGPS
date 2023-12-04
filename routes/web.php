<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PythonController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/obd2', [DashboardController::class, 'obd2']);
Route::get('/gps', [DashboardController::class, 'gps']);

Route::get('/script', [PythonController::class, 'runScript']);

Route::get('/location', [DashboardController::class, 'getLocation']);
Route::get('/getObd2', [DashboardController::class, 'getObd2']);
Route::get('/obd2/{id}', [DashboardController::class, 'obd2ID']);
Route::get('/getObd2Latest', [DashboardController::class, 'getObd2Latest']);
Route::get('/getDistance', [DashboardController::class, 'getDistance']);
