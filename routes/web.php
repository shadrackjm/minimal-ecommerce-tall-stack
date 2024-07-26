<?php

use App\Livewire\AddProductForm;
use App\Livewire\AdminDashboard;
use App\Livewire\ManageOrders;
use App\Livewire\ManageProduct;
use App\Livewire\ProductDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/details',ProductDetails::class);

Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard', AdminDashboard::class)->name('dashboard');

    Route::get('/products',ManageProduct::class)->name('products');

    Route::get('/orders',ManageOrders::class)->name('orders');

    Route::get('/add/product', AddProductForm::class);
});
