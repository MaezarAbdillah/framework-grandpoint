<?php

use App\Models\Order;
use App\Models\Lapangan;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
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

Route::get('/auth/signIn', function () {
    return view('auth.signIn');
})->name('login');

Route::post('/login/action', [
    AuthController::class, 'loginAction'
])->name('login.action');

Route::get('/auth/signUp', function () {
    return view('auth.signUp');
})->name('register');

Route::post('/register/action', [
    AuthController::class, 'registerAction'
])->name('register.action');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/admin/order', function () {
        return view('admin.order',['order'=> Order::all()]);
    })->name('admin.order');

    Route::get('/admin/lapangan', function () {
        return view('admin.lapangan',['lapangan'=> Lapangan::all()]);
    })->name('admin.lapangan');

    Route::controller(AdminController::class)->group(function(){
        //Tambah Data Lapangan
        Route::get('/admin/lapangan/tambahlapangan', 'tambahlapangan')->name('admin.create');
        Route::post('/admin/lapangan/tambahlapangan/action','storelapangan')->name('admin.storelapangan');

        //Edit Data Lapangan
        Route::get('/admin/lapangan/editlapangan/{id}', 'editlapangan')->name('admin.edit');
        Route::post('/admin/lapangan/updatelapangan/{id}/action','updatelapangan')->name('admin.updatelapangan');

        // Hapus Data Lapangan
        Route::post('/admin/lapangan/deletelapangan/{id}/action', 'deletelapangan')->name('admin.deletelapangan');

        //Tambah Data Order
        Route::get('/admin/order/tambahorder', 'tambahorder')->name('admin.tambahorder');
        Route::post('/admin/order/tambahorder/action','storeorder')->name('admin.storeorder');

        //Edit Data Order
        Route::get('/admin/order/editorder/{id}', 'editorder')->name('admin.editorder');
        Route::post('/admin/order/updateorder/{id}/action','updateorder')->name('admin.updateorder');

        // Hapus Data Order
        Route::post('/admin/order/deleteorder/{id}/action', 'deleteorder')->name('admin.deleteorder');
    });
});






