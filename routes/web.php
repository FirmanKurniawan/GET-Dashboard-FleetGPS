<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PythonController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/data', [DashboardController::class, 'data']);
Route::get('/data-dht22', [DashboardController::class, 'dht22']);
Route::get('/data-mq2', [DashboardController::class, 'mq2']);
Route::get('/data-mq135', [DashboardController::class, 'mq135']);

Route::get('/script', [PythonController::class, 'runScript']);

Route::get('/temperature', [DashboardController::class, 'temperature']);
Route::get('/humidity', [DashboardController::class, 'humidity']);
Route::get('/heat_index', [DashboardController::class, 'heat_index']);
Route::get('/time', [DashboardController::class, 'time']);
