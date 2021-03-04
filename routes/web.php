<?php

use App\Http\Controllers\BlogController;
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

Route::group(['prefix' => 'blogs'], function() {
	Route::get('/', [BlogController::class, 'index'])->name('backend.blogs.index');
	Route::get('/{id}', [BlogController::class, 'show'])->name('backend.blogs.show');
	Route::post('/', [BlogController::class, 'store'])->name('backend.blogs.store');
	Route::delete('/{id}', [BlogController::class, 'destroy'])->name('backend.blogs.destroy');
	Route::put('/{id}', [BlogController::class, 'update'])->name('backend.blogs.update');
});