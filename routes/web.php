<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\ImplicitController;
use App\Http\Controllers\DpController;


Route::get('/', function () {
    return view('home');
});


route::get('admin', [AdminController::class, 'index']);
route::get('password', [PasswordController::class, 'index']);
route::get('picture', [DpController::class, 'index']);


// Route::resources(
//     [
//         'password' => 'PasswordController',
//         'picture' => 'DpController'
//     ]
// );

// in routes/greeting.php

Route::get('/greeting', function () {
    return view('greeting', ['name' => 'Alex']);
});

