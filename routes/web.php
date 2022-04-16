<?php

use App\Http\Controllers\AdminPanel\CategoryController;
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

//I'll delete any unnecessary routes later
//I'll delete any unnecessary routes later


//1-Do something in route
Route::get('/hello', function () {
    return 'Hello World';
});

//2-Call view in route
Route::get('/welcomee', function () {
    return view('welcome');
});

//3-Call controller function
Route::get( uri: '/',action: [HomeController::class,'index'])->name('home');

////4- Route -> Controller -> View  //I deleted this one's page.
//Route::get( uri: '/test',action: [HomeController::class,'test'])->name('test');
//
////5- Route with parameters
//Route::get( uri: '/param/{id}',action: [HomeController::class,'param'])->name('param');
//
////5,1- Route with parameters
//Route::get( uri: '/param2/{id}/{number}',action: [HomeController::class,'param2'])->name('param2');
//
////6- Route with post
//Route::post( uri: '/save',action: [HomeController::class,'save'])->name('save');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//*********************************** ADMIN PANEL   ROUTES *************************************//

Route::get( uri: '/admin',action: [AdminHomeController::class,'index'])->name('admin');


//*********************************** ADMIN CATEGORY   ROUTES *************************************//
Route::get( uri: '/admin/category',action: [CategoryController::class,'index'])->name('admin_category');
Route::get( uri: '/admin/category/create',action: [CategoryController::class,'create'])->name('admin_category_create');
Route::post( uri: '/admin/category/store',action: [CategoryController::class,'store'])->name('admin_category_store');




