<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserAuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('cms/library')->middleware('guest:admin,author')->group(function(){
    Route::get('{guard}/login' , [UserAuthController::class , 'showLogin'])->name('view.login');
    Route::post('{guard}/login' , [UserAuthController::class , 'login']);
});

Route::prefix('cms/library')->middleware('guest:admin,author')->group(function(){
    Route::get('logout' , [UserAuthController::class , 'logout'])->name('view.logout');

});

Route::prefix('cms/library')->middleware('auth:admin,author')->group(function(){
    // Route::view('', 'cms.parent');
    Route::view('', 'cms.home');
    Route::view('temp', 'cms.temp');

    Route::resource('countries' , CountryController::class);
    Route::post('countries_update/{id}' , [CountryController::class,'update'])->name('countries_update');

    Route::resource('cities' , CityController::class);
    Route::post('cities_update/{id}' , [CityController::class,'update'])->name('cities_update');

    Route::resource('admins' , AdminController::class);
    Route::post('admins_update/{id}' , [AdminController::class,'update'])->name('admins_update');

    Route::resource('authors' , AuthorController::class);
    Route::post('authors_update/{id}' , [AuthorController::class,'update'])->name('authors_update');

    Route::resource('categories' ,CategoryController::class);
    Route::post('categories_update/{id}' , [CategoryController::class,'update'])->name('categories_update');

    Route::resource('books' , BookController::class);
    Route::post('books_update/{id}' , [BookController::class , 'update'])->name('books_update');

    Route::resource('roles' ,RoleController::class);
    Route::post('roles_update/{id}' , [RoleController::class,'update'])->name('roles_update');

    Route::resource('permissions' ,PermissionController::class);
    Route::post('permissions_update/{id}' , [PermissionControllerr::class,'update'])->name('permissions_update');

    Route::resource('roles.permissions' , RolePermissionController::class);
});

