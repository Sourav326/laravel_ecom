<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
