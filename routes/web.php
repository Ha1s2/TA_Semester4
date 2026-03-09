<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Models\UserMongo;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


// =============================
// AUTH ROUTES
// =============================

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');

// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');


// =============================
// TEST MONGODB
// =============================

Route::get('/cobamongo', function () {

    UserMongo::create([
        'name' => 'Iqbal',
        'email' => 'iqbal@test.com',
        'password' => bcrypt('123456'),
        'role' => 'user'
    ]);

    return "Data berhasil masuk MongoDB!";
});
