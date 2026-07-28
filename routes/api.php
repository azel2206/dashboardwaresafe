<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\SensorController;

Route::get('/zones', [ZoneController::class, 'index']);
Route::post('/zones', [ZoneController::class, 'store']);
Route::put('/zones/{id}', [ZoneController::class, 'update']);
Route::delete('/zones/{id}', [ZoneController::class, 'destroy']);

Route::get('/dashboard', [DashboardController::class, 'summary']);  

Route::get('/sensors/office', [SensorController::class,'office']);
Route::get('/sensors/warehouse', [SensorController::class,'warehouse']);

Route::post("/login",[AuthController::class,"login"]);
Route::post("/logout",[AuthController::class,"logout"]);
Route::get("/me",[AuthController::class,"me"]);