<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\MainController;

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

///////////////////////////////////////////////////////////////////////////////////////////////////////////// Get запросы вывести
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/main/index', [AdminController::class, 'main'])->name('admin.main.index');
Route::get('admin/subcategory/index', [AdminController::class, 'subcategory'])->name('admin.subcategory.index');
Route::get('admin/product/index', [AdminController::class, 'product'])->name('admin.product.index');
Route::get('admin/profile/index', [AdminController::class, 'profile'])->name('admin.profile.index');
Route::get('admin/service/index', [AdminController::class, 'service'])->name('admin.service.index');
Route::get('admin/analysis/index', [AdminController::class, 'analysis'])->name('admin.analysis.index');
Route::get('admin/allProduct/index', [AdminController::class, 'allProduct'])->name('admin.allProduct.index');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('basic/index', [BasicController::class, 'index'])->name('basic.index');
