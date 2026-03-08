<?php

use App\Filament\Pages\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/admin/register', [Register::class, '__invoke'])
//     ->name('filament.admin.auth.register');
// Route::get('/register', Register::class)->name('donor.register');