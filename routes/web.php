<?php

use App\Http\Controllers\admin\CategoryController;
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
    return view('frontend.index');
});

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('layouts.admin.index');
    }
    )->name('admin.index');

    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('create', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('edit/{id}', [CategoryController::class, 'update'])->name('categories.update');
});
