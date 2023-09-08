<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\EnsureUserIsLogin;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.show');
Route::post('/subscribe', [HomeController::class, 'store'])->name('home.store');
Route::get('/services', [ServicesController::class, 'index'])->name('services');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Blog Routes
Route::get('blogs',[BlogController::class,'index'])->name('blogs');




//Course Routes
Route::get('courses',[CourseController::class,'index'])->name('courses');
Route::get('courses/{id}',[CourseController::class,'show'])->name('courses.show');



Route::middleware([EnsureUserIsLogin::class])->group(function () {

    //Wishlist Routes
    Route::get('wishlist',[WishlistController::class,'index'])->name('wishlist');
    Route::post('wishlist',[WishlistController::class,'store'])->name('wishlist.store');
});