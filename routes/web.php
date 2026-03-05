<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\donorController;
use App\Http\Controllers\dashboardController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard.dashboard');
// });

Route::get('/master', function () {
    return view('admin.master');
});

Route::get('/add-donor', function() {
    return view('admin.donor.add-donor');
});

Route::get('/donor', [donorController::class, 'donorList']);
Route::post('/adddonor', [donorController::class, 'addDonor']);
Route::post('/editDonor', [donorController::class, 'editDonor']);
Route::post('/deleteDonor', [donorController::class, 'deleteDonor']);

Route::get('/dashboard', [dashboardController::class, 'dashboard']);