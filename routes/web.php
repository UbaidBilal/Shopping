<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\crudController;
use App\Http\Controllers\orderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [crudController::class,'show'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [crudController::class,'index'])->name('index');
Route::get('/single/{id}', [crudController::class,'single'])->name('view.single');
Route::post('/order', [orderController::class,'addorder'])->name('order');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/add',[crudController::class,'add'])->name('add');
    Route::get('/form',[crudController::class,'form'])->name('form');
    Route::get('/delete/{id}',[crudController::class,'delete'])->name('delete');
    Route::get('/edit/{id}',[crudController::class,'edit'])->name('edit');
    Route::post('/update',[crudController::class,'update'])->name('update');
});

require __DIR__.'/auth.php';
