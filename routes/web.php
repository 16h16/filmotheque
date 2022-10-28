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

// HOME
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// CATEGORY
Route::get('/category', [CategoryController::class, 'options'])->name('category.options');
Route::get('/category/display', [CategoryController::class, 'display'])->name('category.display');
Route::get('/category/creation', [CategoryController::class, 'creation'])->name('category.creation');
Route::post('/category/creation', [CategoryController::class, 'create'])->name('category.create');
Route::get('/category/updation', [CategoryController::class, 'updation'])->name('category.updation');
Route::post('/category/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/deletion', [CategoryController::class, 'deletion'])->name('category.deletion');
Route::post('/category/delete', [CategoryController::class, 'delete'])->name('category.delete');

// MOVIE
Route::get('/movie', [MovieController::class, 'options'])->name('movie.options');
Route::get('/movie/display', [MovieController::class, 'display'])->name('movie.display');
Route::get('/movie/creation', [MovieController::class, 'creation'])->name('movie.creation');
Route::post('/movie/creation', [MovieController::class, 'create'])->name('movie.create');
Route::get('/movie/updation', [MovieController::class, 'updation'])->name('movie.updation');
Route::post('/movie/update', [MovieController::class, 'update'])->name('movie.update');
Route::get('/movie/deletion', [MovieController::class, 'deletion'])->name('movie.deletion');
Route::post('/movie/delete', [MovieController::class, 'delete'])->name('movie.delete');

// ACTOR
Route::get('/actor', [ActorController::class, 'options'])->name('actor.options');
Route::get('/actor/display', [ActorController::class,'display'])->name('actor.display');
Route::get('/actor/creation', [ActorController::class, 'creation'])->name('actor.creation');
Route::post('/actor/creation', [ActorController::class, 'create'])->name('actor.create');
Route::get('/actor/updation', [ActorController::class, 'updation'])->name('actor.updation');
Route::post('/actor/update', [ActorController::class, 'update'])->name('actor.update');
Route::get('/actor/deletion', [ActorController::class, 'deletion'])->name('actor.deletion');
Route::post('/actor/delete', [ActorController::class, 'delete'])->name('actor.delete');
