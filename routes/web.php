<?php

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

//4- Route -> Controller -> View
Route::get( uri: '/test',action: [HomeController::class,'test'])->name('test');

//5- Route with parameters
Route::get( uri: '/param/{id}',action: [HomeController::class,'param'])->name('param');

//5,1- Route with parameters
Route::get( uri: '/param2/{id}/{number}',action: [HomeController::class,'param2'])->name('param2');

//6- Route with post
Route::post( uri: '/save',action: [HomeController::class,'save'])->name('save');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
