<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TypesController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('esercizio' ,function (){
    return view ('esercizio');
});

Route::resource('products', ProductController::class)
 ->middleware(['auth','verified']) ;
 
Route::resource('types', TypesController::class)
 ->middleware(['auth','verified']) ;

Route::resource('categories', CategoryController::class)
 ->middleware(['auth','verified']) ;
require __DIR__.'/auth.php';
