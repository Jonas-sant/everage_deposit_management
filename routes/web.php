<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.main');
});

Route::get('/inicioDashboard',function(){
    return view('dashboard.dashboard');
});

Route::get('/clients',function(){
    return view('dashboard.register.clients');
});

Route::get('/suppliers',function(){
    return view('dashboard.register.supplier');
});

Route::get('/employees',function(){
    return view('dashboard.register.employees');
});

Route::get('/products',function(){
    return view('dashboard.register.products');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
