<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [HomeController::class, 'dashboard']);

// Route::get('/admin', [AdminController::class, 'index'])->name('index');
// Route::get('/create', [AdminController::class, 'create'])->name('user.create');
// Route::post('/store', [AdminController::class, 'store'])->name('user.store');
// Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('user.edit');
// Route::put('/update/{id}', [AdminController::class, 'update'])->name('user.update');
// Route::delete('/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/user/create', [AdminController::class, 'create'])->name('user.create');
    Route::post('/user/store', [AdminController::class, 'store'])->name('user.store');
    Route::get('/user/edit/{id}', [AdminController::class, 'edit'])->name('user.edit');
    Route::put('/user/update/{id}', [AdminController::class, 'update'])->name('user.update');
    Route::delete('/user/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');

    Route::get('/cabang', [CabangController::class, 'index'])->name('cabang.index');
    Route::get('/cabang/create', [CabangController::class, 'create'])->name('cabang.create');
    Route::post('/cabang/store', [CabangController::class, 'store'])->name('cabang.store');
    Route::get('/cabang/edit/{id}', [CabangController::class, 'edit'])->name('cabang.edit');
    Route::put('/cabang/update/{id}', [CabangController::class, 'update'])->name('cabang.update');
    Route::delete('/cabang/delete/{id}', [CabangController::class, 'delete'])->name('cabang.delete');
});

