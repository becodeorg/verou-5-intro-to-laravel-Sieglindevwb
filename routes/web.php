<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReviewController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

// Using the index() method in the HomeController class 
/*Route::get('/', function() {
    return view("welcome");
});
*/

Route::get('/', [HomeController::class, 'index']) -> name('home');
Route::get('/post', [HomeController::class, 'show']) -> name('post');

Route::get('/users', [UserController::class, 'index']) -> name('showUsers');
Route::get('/users/{id}', [UserController::class, 'show']) -> name ('showUser');

Route::get('/reviews', [ReviewController::class, 'index']) -> name ('reviews.index');
Route::get('//reviews/{id}', [ReviewController::class, 'show'])-> name ('reviews.show'); 
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');