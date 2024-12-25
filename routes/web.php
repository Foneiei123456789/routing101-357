<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// call back function
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/user', [UserController::class, 'index']);


// เก็บที่ตัวแปรที่ชื่อว่า ID เอาตัวแปรตัวนั้นปริ้นค่าได้
// Route::get('/user/{id}', function (string $id) {
//     return 'User '.$id;
// });
Route::get('/users/{user}', [UserController::class, 'show']);

Route::get('/products', [ProductController::class, 'index'])->name('products.index')->middleware(['auth', 'verified']);
Route::get('/products/{id}', [ProductController::class, 'show'])->middleware(['auth', 'verified']);


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';