<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});


route::get('admin',[AdminController::class,'index']);

