<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
Route::post('/register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('/admin/insert/customers', [AdminController::class, 'insert_customers'])->name('insert.customers');
Route::post('/admin/insert/customers', [AdminController::class, 'insert_customers_post'])->name('insert.customers.post');
Route::get('/admin/insert/items', [AdminController::class, 'insert_items'])->name('insert.items');
Route::post('/admin/insert/items', [AdminController::class, 'insert_items_post'])->name('insert.items.post');
Route::get('/admin/insert/orders', [AdminController::class, 'insert_orders'])->name('insert.orders');
Route::post('/admin/insert/orders', [AdminController::class, 'insert_orders_post'])->name('insert.orders.post');
Route::get('/admin/insert/payments', [AdminController::class, 'insert_payments'])->name('insert.payments');
Route::post('/admin/insert/payments', [AdminController::class, 'insert_payments_post'])->name('insert.payments.post');
Route::get('/admin/insert/serviceprices', [AdminController::class, 'insert_serviceprices'])->name('insert.serviceprices');
Route::post('/admin/insert/serviceprices', [AdminController::class, 'insert_serviceprices_post'])->name('insert.serviceprices.post');
Route::get('/admin/insert/services', [AdminController::class, 'insert_services'])->name('insert.services');
Route::post('/admin/insert/services', [AdminController::class, 'insert_services_post'])->name('insert.services.post');
