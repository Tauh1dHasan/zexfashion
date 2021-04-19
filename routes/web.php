<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoriesController;
// Authantigation
use App\Http\Controllers\HomeController;
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

// Pages controller
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);

// Categories controller
Route::get('/fleece-hoodies', [CategoriesController::class, 'fleece_hoodies']);
Route::get('/jeans', [CategoriesController::class, 'jeans']);
Route::get('/leggings', [CategoriesController::class, 'leggings']);
Route::get('/polo-shirts', [CategoriesController::class, 'polo_shirts']);
Route::get('/shorts-capri', [CategoriesController::class, 'shorts_capri']);
Route::get('/shorts-cargo', [CategoriesController::class, 'shorts_cargo']);
Route::get('/sweaters', [CategoriesController::class, 'sweaters']);
Route::get('/tank-top', [CategoriesController::class, 'tank_top']);
Route::get('/t-shirts', [CategoriesController::class, 't_shirts']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
