<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BautController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OliController;
use App\Http\Controllers\ProductController;
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

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('detail.product');
Route::get('/product', [ProductController::class, 'product'])->name('product');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register-proses', [LoginController::class, 'register_proses'])->name('register-proses');

Route::get('/test', [HomeController::class, 'dashboard']);


Route::group(['prefix' => 'admin', 'middleware' =>['auth'], 'as' => 'admin.'], function(){
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

    Route::get('/oli', [OliController::class, 'index'])->name('oli.index');
    Route::get('/oli/create', [OliController::class, 'create'])->name('oli.create');
    Route::post('/oli/store', [OliController::class, 'store'])->name('oli.store');
    Route::get('/oli/edit/{id}', [OliController::class, 'edit'])->name('oli.edit');
    Route::put('/oli/update/{id}', [OliController::class, 'update'])->name('oli.update');
    Route::delete('/oli/delete/{id}', [OliController::class, 'delete'])->name('oli.delete');

    Route::get('/baut', [BautController::class, 'index'])->name('baut.index');
    Route::get('/baut/create', [BautController::class, 'create'])->name('baut.create');
    Route::post('/baut/store', [BautController::class, 'store'])->name('baut.store');
    Route::get('/baut/edit/{id}', [BautController::class, 'edit'])->name('baut.edit');
    Route::put('/baut/update/{id}', [BautController::class, 'update'])->name('baut.update');
    Route::delete('/baut/delete/{id}', [BautController::class, 'delete'])->name('baut.delete');
});