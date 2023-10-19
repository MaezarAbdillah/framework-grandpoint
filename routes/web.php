<?php

use Illuminate\Support\Facades\Route;
use App\Models\Order;
use App\Models\Lapangan;
use App\Models\Pengguna;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/auth', function () {
    return view('auth.signIn');
})->name('login');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/order', function () {
    return view('admin.order',['order'=> Order::all()]);
})->name('admin.order');

Route::get('/admin/lapangan', function () {
    return view('admin.lapangan',['lapangan'=> Lapangan::all()]);
})->name('admin.lapangan');

