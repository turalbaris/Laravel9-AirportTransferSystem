<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\AdminPanel\AdminUserController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\CommentController;
use App\Http\Controllers\AdminPanel\FaqController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\HomeController;
use App\Models\Setting;
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
//when we call any route, we call it with its name.


//*********************************** HOME PAGE ROUTES *************************************//
Route::get( uri: '/',action: [HomeController::class,'index'])->name('home');
Route::get( uri: '/about-us',action: [HomeController::class,'about'])->name('about');
Route::get( uri: '/references',action: [HomeController::class,'references'])->name('references');
Route::get( uri: '/contact-us',action: [HomeController::class,'contact'])->name('contact');
Route::post( uri: '/storemessage',action: [HomeController::class,'storemessage'])->name('storemessage');
Route::get( uri: '/faq',action: [HomeController::class,'faq'])->name('faq');
Route::post( uri: '/storecomment',action: [HomeController::class,'storecomment'])->name('storecomment');
Route::view('/user-login', 'home.login')->name('userlogin');
Route::view('/user-register', 'home.register')->name('registeruser');
Route::get( uri: '/user-logout',action: [HomeController::class,'logout'])->name('logoutuser');
Route::view('/admin-login', 'admin.login')->name('adminlogin');
Route::post( uri: '/admin-login-check',action: [HomeController::class,'adminlogincheck'])->name('adminlogincheck');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get( uri: '/product/{id}',action: [HomeController::class,'product'])->name('product');


//*********************************** ADMIN PANEL   ROUTES *************************************//
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
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

    //*********************************** ADMIN MESSAGE   ROUTES *************************************//
    Route::prefix('/message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
    });

    //*********************************** ADMIN COMMENT   ROUTES *************************************//
    Route::prefix('/comment')->name('comment.')->controller(CommentController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
    });


    //***********************************  ADMIN FAQ   ROUTES *************************************//
    Route::prefix('/faq')->name('faq.')->controller(FaqController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    //*********************************** ADMIN USER   ROUTES *************************************//
    Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/delete/{id}','destroy')->name('destroy');
        Route::post('/addrole/{id}','addrole')->name('addrole');
        Route::get('/destroyrole/{uid}/{rid}','destroyrole')->name('destroyrole');
    });

});




