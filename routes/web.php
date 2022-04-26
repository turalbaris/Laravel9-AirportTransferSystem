<?php

use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Call controller function
Route::get( uri: '/',action: [HomeController::class,'index'])->name('home');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//*********************************** ADMIN PANEL   ROUTES *************************************//
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get( uri: '',action: [AdminHomeController::class,'index'])->name('index');
//*********************************** ADMIN CATEGORY   ROUTES *************************************//
    Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get( uri: '',action: [AdminCategoryController::class,'index'])->name('index');
        Route::get( uri: '/create',action: [AdminCategoryController::class,'create'])->name('create');
        Route::post( uri: '/store',action: [AdminCategoryController::class,'store'])->name('store');
        Route::get( uri: '/edit/{id}',action: [AdminCategoryController::class,'edit'])->name('edit');
        Route::post( uri: '/update/{id}',action: [AdminCategoryController::class,'update'])->name('update');
        Route::get( uri: '/delete/{id}',action: [AdminCategoryController::class,'destroy'])->name('destroy');
        Route::get( uri: '/show/{id}',action: [AdminCategoryController::class,'show'])->name('show');
    });
});




