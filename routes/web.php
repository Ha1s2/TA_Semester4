<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Models\UserMongo;

Route::get('/cobamongo', function () {
    UserMongo::create([
        'name' => 'Iqbal',
        'email' => 'iqbal@test.com',
        'password' => bcrypt('123456'),
        'role' => 'user'
    ]);

    return "Data berhasil masuk MongoDB!";
});