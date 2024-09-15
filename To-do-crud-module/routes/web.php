<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 

// Route::get('/', function () {
//     return view(view: 'welcome');
// });

Route::get( '/', HomeController::class )->name('home');

Route::resource(name: 'products', controller: ProductController::class);