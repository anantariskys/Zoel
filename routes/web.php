<?php

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [DashboardController::class,'index']);

Route::resource('/admin', ProductController::class)->names('admin');
