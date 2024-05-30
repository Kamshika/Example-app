<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product-add', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product', [ProductController::class, 'store'])->name('product.add');
    Route::get('/productedit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/productedit-{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/product-{id}', [ProductController::class, 'destroy'])->name('product.destroy');

    Route::get('/employees', [EmployeeController::class, 'index'])->name('employee.view');
    Route::get('/employee-add', [EmployeeController::class, 'create'])->name('employee.add');
    Route::post('/employees', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employeeedit-{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::patch('/employeeupdate-{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route::get('/employeedelete-{id}', [EmployeeController::class, 'destroy'])->name('employee.delete');
});

require __DIR__.'/auth.php';
