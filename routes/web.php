<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\donorController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\webController;


Route::get('/master', function () {
    return view('admin.master');
});

Route::get('/add-donor', function() {
    return view('admin.donor.add-donor');
});

Route::get('/admin/donor', [donorController::class, 'donorList'])->name('admin.donor');
Route::post('/adddonor', [donorController::class, 'addDonor']);
Route::post('/editDonor', [donorController::class, 'editDonor']);
Route::post('/deleteDonor', [donorController::class, 'deleteDonor']);

Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/', [webController::class, 'home'])->name('home');

Route::get('/about', function () {
    return view('web.about');
})->name('about');

Route::get('/donor', [function () {
    return view('web.donor');
}])->name('donor');

Route::get('/request-blood', [webController::class, 'request'])->name('request');

Route::get('/profile/{id}', [donorController::class, 'show']);