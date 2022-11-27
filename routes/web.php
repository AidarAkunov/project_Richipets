<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VetServiceController;

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


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('basic/index', [BasicController::class, 'index'])->name('basic.index');
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
// Route::get('admin/category/index', [AdminController::class, 'category'])->name('admin.category.index');
// Route::get('admin/subcategory/index', [AdminController::class, 'subcategory'])->name('admin.subcategory.index');
// Route::get('admin/brand/index', [AdminController::class, 'brand'])->name('admin.brand.index');
// Route::get('admin/product/index', [AdminController::class, 'product'])->name('admin.product.index');
// Route::get('admin/profile/index', [AdminController::class, 'profile'])->name('admin.profile.index');
// Route::get('admin/service/index', [AdminController::class, 'service'])->name('admin.service.index');
// Route::get('admin/analysis/index', [AdminController::class, 'analysis'])->name('admin.analysis.index');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/category/index', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('admin/category/create', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::get('admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Route::get('admin/subcategory/index', [SubcategoryController::class, 'index'])->name('admin.subcategory.index');
Route::get('admin/subcategory/index/{id?}', [SubcategoryController::class, 'index'])->name('admin.subcategory.index');
Route::get('admin/subcategory/create', [SubcategoryController::class, 'create'])->name('admin.subcategory.create');
Route::post('admin/subcategory/create', [SubcategoryController::class, 'store'])->name('admin.subcategory.store');
Route::get('admin/subcategory/edit/{id}', [SubcategoryController::class, 'edit'])->name('admin.subcategory.edit');
Route::post('admin/subcategory/update/{id}', [SubcategoryController::class, 'update'])->name('admin.subcategory.update');
Route::get('admin/subcategory/destroy/{id}', [SubcategoryController::class, 'destroy'])->name('admin.subcategory.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Route::get('admin/brand/index', [BrandController::class, 'index'])->name('admin.brand.index');
Route::get('admin/brand/index/{id?}', [BrandController::class, 'index'])->name('admin.brand.index');
Route::get('admin/brand/create', [BrandController::class, 'create'])->name('admin.brand.create');
Route::post('admin/brand/create', [BrandController::class, 'store'])->name('admin.brand.store');
Route::get('admin/brand/edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
Route::post('admin/brand/update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
Route::get('admin/brand/destroy/{id}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Route::get('admin/product/index', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('admin/product/index/{id?}', [ProductController::class, 'index'])->name('admin.product.index');
Route::get('admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
Route::post('admin/product/create', [ProductController::class, 'store'])->name('admin.product.store');
Route::get('admin/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
Route::post('admin/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
Route::get('admin/product/destroy/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/vetservice/index', [VetServiceController::class, 'index'])->name('admin.vetservice.index');
Route::get('admin/vetservice/create', [VetServiceController::class, 'create'])->name('admin.vetservice.create');
Route::post('admin/vetservice/create', [VetServiceController::class, 'store'])->name('admin.vetservice.store');
Route::get('admin/vetservice/edit/{id}', [VetServiceController::class, 'edit'])->name('admin.vetservice.edit');
Route::post('admin/vetservice/update/{id}', [VetServiceController::class, 'update'])->name('admin.vetservice.update');
Route::get('admin/vetservice/destroy/{id}', [VetServiceController::class, 'destroy'])->name('admin.vetservice.destroy');
