<?php

use App\Livewire\AdminDashboard;
use App\Livewire\ProductDetails;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/details',ProductDetails::class);

Route::get('/admin/dashboard',AdminDashboard::class)
->middleware('admin');