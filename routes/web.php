<?php
use App\Http\Controllers\Admin\ProductFilterController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\VetServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ImageController;

use App\Http\Controllers\Basic\ProductAllController;
use App\Http\Controllers\Basic\ProductOneController;
use App\Http\Controllers\Basic\MainController;
use App\Http\Controllers\Basic\SubcategoryViewController;


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
//--------ADMIN--------///
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/main/index', [AdminController::class, 'index'])->name('admin.main.index');
Route::get('admin/main/index', [AdminController::class, 'show'])->name('admin.main.index');
Route::get('admin/product/index', [ProductFilterController::class, 'index'])->name('admin.product.index');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/category/index', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('admin/category/create', [CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::post('admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::get('admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/subcategory/index/{id?}', [SubcategoryController::class, 'index'])->name('admin.subcategory.index');
Route::get('admin/subcategory/create', [SubcategoryController::class, 'create'])->name('admin.subcategory.create');
Route::post('admin/subcategory/create', [SubcategoryController::class, 'store'])->name('admin.subcategory.store');
Route::get('admin/subcategory/edit/{id}', [SubcategoryController::class, 'edit'])->name('admin.subcategory.edit');
Route::post('admin/subcategory/update/{id}', [SubcategoryController::class, 'update'])->name('admin.subcategory.update');
Route::get('admin/subcategory/destroy/{id}', [SubcategoryController::class, 'destroy'])->name('admin.subcategory.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/brand/index/{id?}', [BrandController::class, 'index'])->name('admin.brand.index');
Route::get('admin/brand/create', [BrandController::class, 'create'])->name('admin.brand.create');
Route::post('admin/brand/create', [BrandController::class, 'store'])->name('admin.brand.store');
Route::get('admin/brand/edit/{id}', [BrandController::class, 'edit'])->name('admin.brand.edit');
Route::post('admin/brand/update/{id}', [BrandController::class, 'update'])->name('admin.brand.update');
Route::get('admin/brand/destroy/{id}', [BrandController::class, 'destroy'])->name('admin.brand.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/slider/index', [SliderController::class, 'index'])->name('admin.slider.index');
Route::get('admin/slider/create', [SliderController::class, 'create'])->name('admin.slider.create');
Route::post('admin/slider/create', [SliderController::class, 'store'])->name('admin.slider.store');
Route::get('admin/slider/edit/{id}', [SliderController::class, 'edit'])->name('admin.slider.edit');
Route::post('admin/slider/update/{id}', [SliderController::class, 'update'])->name('admin.slider.update');
Route::get('admin/slider/destroy/{id}', [SliderController::class, 'destroy'])->name('admin.slider.destroy');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/image/index/{id?}', [ImageController::class, 'index'])->name('admin.image.index');
Route::get('admin/image/create', [ImageController::class, 'create'])->name('admin.image.create');
Route::post('admin/image/create', [ImageController::class, 'store'])->name('admin.image.store');
Route::get('admin/image/edit/{id}', [ImageController::class, 'edit'])->name('admin.image.edit');
Route::post('admin/image/update/{id}', [ImageController::class, 'update'])->name('admin.image.update');
Route::get('admin/image/destroy/{id}', [ImageController::class, 'destroy'])->name('admin.image.destroy');


//--------BASIC--------///
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('basic/main/index', [MainController::class, 'index'])->name('basic.main.index');

Route::get('basic/subcategory/index/{id?}', [SubcategoryViewController::class, 'index'])->name('basic.subcategory.index');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('basic/productAll/index/{id?}', [ProductAllController::class, 'index'])->name('basic.productAll.index');

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('basic/productOne/index', [ProductOneController::class, 'index'])->name('basic.productOne.index');
