<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Front;
use App\Http\Controllers\GallaryController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProductController;
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
// echo "<pre>";
// print_r($_POST);
// exit;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Front::class, 'index'])->name('home');
Route::get('/about', [Front::class, 'about'])->name('about');
Route::get('/products/{id?}', [Front::class, 'products'])->name('products');
Route::get('/productdetail/{id}', [Front::class, 'productdetail'])->name('productdetail');
Route::get('/gallarys', [Front::class, 'gallary'])->name('gallarys');
Route::get('/gallarydetail/{id}', [Front::class, 'gallarydetail'])->name('gallarydetail');
Route::get('/contactus', [Front::class, 'contactus'])->name('contactus');

Route::get('category', [CategoryController::class, 'index'])->middleware(['auth'])->name('category.index');
Route::get('category/add', [CategoryController::class, 'create'])->middleware(['auth'])->name('addcategory');
Route::post('category/store', [CategoryController::class, 'store'])->middleware(['auth'])->name('categorystore');
Route::get('category/edit/{id}', [CategoryController::class, 'show'])->middleware(['auth'])->name('editcategory');
Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->middleware(['auth'])->name('deletecategory');

Route::get('product', [ProductController::class, 'index'])->middleware(['auth'])->name('product.index');
Route::get('product/add', [ProductController::class, 'create'])->middleware(['auth'])->name('addproduct');
Route::post('product/store', [ProductController::class, 'store'])->middleware(['auth'])->name('productstore');
Route::get('product/edit/{id}', [ProductController::class, 'show'])->middleware(['auth'])->name('editproduct');
Route::get('product/delete/{id}', [ProductController::class, 'destroy'])->middleware(['auth'])->name('deleteproduct');

Route::get('gallary', [GallaryController::class, 'index'])->middleware(['auth'])->name('gallary.index');
Route::get('gallary/add', [GallaryController::class, 'create'])->middleware(['auth'])->name('addgallary');
Route::post('gallary/store', [GallaryController::class, 'store'])->middleware(['auth'])->name('gallarystore');
Route::get('gallary/edit/{id}', [GallaryController::class, 'show'])->middleware(['auth'])->name('editgallary');
Route::get('gallary/delete/{id}', [GallaryController::class, 'destroy'])->middleware(['auth'])->name('deletegallary');

Route::get('inquiry', [InquiryController::class, 'index'])->middleware(['auth'])->name('inquiry.index');
Route::get('inquiry/add', [InquiryController::class, 'create'])->middleware(['auth'])->name('addinquiry');
Route::post('inquiry/store', [InquiryController::class, 'store'])->middleware(['auth'])->name('inquirystore');
Route::get('inquiry/edit/{id}', [InquiryController::class, 'show'])->middleware(['auth'])->name('editinquiry');
Route::get('inquiry/delete/{id}', [InquiryController::class, 'destroy'])->middleware(['auth'])->name('deleteinquiry');

Route::get('/dashboard', [Dashboard::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::post('storeDirect', [InquiryController::class, 'storeDirect'])->name('storeDirect');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

require __DIR__ . '/auth.php';
