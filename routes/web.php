<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    DashboardController::class, 'home'
]);

Route::get('/about', [
    DashboardController::class, 'about'
]);

Route::get('/portofolio', [
    DashboardController::class, 'portofolio'
]);

Route::get('/interest', [
    DashboardController::class, 'interest'
]);

Route::get('/contact', [
    DashboardController::class, 'contact'
]);
