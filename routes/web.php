<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
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



Route::get( uri: '/product/{id}',action: [HomeController::class,'product'])->name('product');


//*********************************** ADMIN PANEL   ROUTES *************************************//
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[AdminHomeController::class,'index'])->name('index');

//*********************************** GENERAL   ROUTES *************************************//
    Route::get('/setting',[AdminHomeController::class,'setting'])->name('setting');
    Route::post('/setting',[AdminHomeController::class,'settingUpdate'])->name('setting.update');
//*********************************** ADMIN CATEGORY   ROUTES *************************************//
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });
    //*********************************** ADMIN PRODUCT   ROUTES *************************************//
    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    //*********************************** ADMIN PRODUCT IMAGE GALLERY   ROUTES *************************************//
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}','index')->name('index');
        Route::get('/create/{pid}','create')->name('create');
        Route::post('/store/{pid}','store')->name('store');
        Route::post('/update/{pid}/{id}','update')->name('update');
        Route::get('/delete/{pid}/{id}','destroy')->name('destroy');
    });

});




