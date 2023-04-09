<?php

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



Route::get('/', [\App\Http\Controllers\MainController::class, 'homepage'])->name('home');
Route::get('/single', [\App\Http\Controllers\MainController::class, 'singlePage'])->name('singlePage');
Route::get('/account', [\App\Http\Controllers\MainController::class, 'authPage'])->name('authPage');
Route::get('/category', [\App\Http\Controllers\MainController::class, 'categoryPage'])->name('categoryPage');
Route::get('/contact', [\App\Http\Controllers\MainController::class, 'contactPage'])->name('contactPage');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'aboutPage'])->name('aboutPage');
Route::get('/my-account', [\App\Http\Controllers\MainController::class, 'myAccountPage'])->name('myAccountPage');


Route::get('/admin/dashboard', [\App\Http\Controllers\MainController::class, 'adminDashbord'])->name('adminDashbord');
Route::get('/admin/customers', [\App\Http\Controllers\MainController::class, 'customersPage'])->name('customersPage');
Route::get('/admin/suppliers', [\App\Http\Controllers\MainController::class, 'suppliersPage'])->name('suppliersPage');
Route::get('/admin/pending-products', [\App\Http\Controllers\MainController::class, 'pendingProductsPage'])->name('pendingProductsPage');
Route::get('/admin/Manage-products', [\App\Http\Controllers\MainController::class, 'manageProductsPage'])->name('manageProductsPage');
Route::get('/admin/Orders', [\App\Http\Controllers\MainController::class, 'ordersPage'])->name('ordersPage');
