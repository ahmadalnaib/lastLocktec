<?php

use App\Http\Controllers\ActionController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MetaController;
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

Route::get('/change-language/{locale}',[LocaleController::class,'switch'])->name('change.language');



Route::middleware(['web'])->group(function(){



  // Route::get('/',[MainController::class,'index']);
  Route::get('/',[MainController::class,'actions']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



// Route::get('/actions',[ActionController::class,'getByCategory']);

Route::resource('/actions',ActionController::class)->middleware('auth');
Route::resource('/categories',CategoriesController::class)->middleware('auth');


// meta


Route::get('/meta',[MetaController::class,'index'])->name('meta.index')->middleware('auth');
Route::get('/meta/create',[MetaController::class,'create'])->name('meta.create')->middleware('auth');
Route::post('/meta',[MetaController::class,'store'])->name('meta.store')->middleware('auth');
Route::get('/meta/{meta}/edit',[MetaController::class,'edit'])->name('meta.edit')->middleware('auth');
Route::put('/update/{meta}',[MetaController::class,'update'])->name('meta.update')->middleware('auth');




});
