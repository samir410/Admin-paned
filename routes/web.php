<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::controller(AdminController::class)->prefix('dashboard')->group(function () {
    Route::get('/', 'admin_dashboard')->name('dashboard');
    // Route::get('/logout', 'AdminLogout')->name('admin.logout');
    // Route::get('/change', 'ChangePassword')->name('admin.changepassword');
    // Route::post('/update/password', 'AdminUpdatePassword')->name('update.password');
    // Route::get('/profile', 'admin_profile')->name('admin.profile');
    // Route::post('/store/profile', 'store_profile')->name('admin.store.profile');
});