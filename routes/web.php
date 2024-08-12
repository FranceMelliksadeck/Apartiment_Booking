<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomsController;

Route::get('/', [HomeController::class, 'home'])->name('home.index'); // Adding the route name here

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard', [HomeController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard'); // Adding a name for the admin dashboard route

    Route::get('/create_apartiment', [HomeController::class, 'create_apartiment']);
    Route::post('/add_apartiment', [HomeController::class, 'add_apartiment']);
    Route::get('/view_apartiment', [HomeController::class, 'view_apartiment']);
    Route::get('/apartiment_delete/{id}', [HomeController::class, 'apartiment_delete']);
    Route::get('/apartiment_update/{id}', [HomeController::class, 'apartiment_update']);
    Route::post('/edit_apartiment/{id}', [HomeController::class,'edit_apartiment']); 
    
    Route::get('/apartiment_details/{id}', [RoomsController::class, 'apartiment_details']);
    Route::post('/add_booking/{id}', [RoomsController::class, 'add_booking']);
    Route::get('/bookings', [HomeController::class, 'bookings']);
    Route::get('/delete_booking/{id}', [HomeController::class, 'delete_booking']);
    Route::get('/approve_book/{id}', [HomeController::class, 'approve_book']);
    Route::get('/reject_book/{id}', [HomeController::class, 'reject_book']);  
    Route::get('/view_gallary', [HomeController::class, 'view_gallary']);  
    Route::post('/upload_gallary', [HomeController::class, 'upload_gallary']);