<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/category', [CategoryController::class, 'options'])->name('category.options');
Route::get('/category/display', [CategoryController::class, 'display'])->name('category.display');
Route::get('/category/creation', [CategoryController::class, 'creation'])->name('category.creation');
Route::post('/category/creation', [CategoryController::class, 'create'])->name('category.create');

Route::get('/movie', [MovieController::class, 'options'])->name('movie.options');
Route::get('/movie/display', [MovieController::class, 'display'])->name('movie.display');

Route::get('/actor', [ActorController::class, 'options'])->name('actor.options');
Route::get('/actor/display', [ActorController::class,'display'])->name('actor.display');
