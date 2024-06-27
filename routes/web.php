<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\MenteeController;
use App\Http\Controllers\BackendController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::middleware(['auth', 'role:admin,manager'])->controller(AdminController::class)->prefix('/admin')->group(function () {
    Route::get('/dashboard', 'admin_dashboard')->name('admin.dashboard');
    Route::get('/logout', 'AdminLogout')->name('admin.logout');
    Route::get('/change', 'ChangePassword')->name('admin.changepassword');
    Route::post('/update/password', 'AdminUpdatePassword')->name('update.password');
    Route::get('/profile', 'admin_profile')->name('admin.profile');
    Route::post('/store/profile', 'store_profile')->name('admin.store.profile');
});

Route::middleware(['auth', 'role:mentor'])->controller(MentorController::class)->prefix('/mentor')->group(function () {
    Route::get('/dashboard', 'mentor_dashboard')->name('mentor.dashboard');
    Route::get('/logout', 'MentorLogout')->name('mentor.logout');
    // Route::get('/change', 'ChangePassword')->name('admin.changepassword');
    // Route::post('/update/password', 'AdminUpdatePassword')->name('update.password');
    // Route::get('/profile', 'admin_profile')->name('admin.profile');
    // Route::post('/store/profile', 'store_profile')->name('admin.store.profile');
});
Route::middleware(['auth', 'role:mentee'])->controller(MenteeController::class)->prefix('/mentee')->group(function () {
    Route::get('/dashboard', 'mentee_dashboard')->name('mentee.dashboard');
    // Route::get('/logout', 'AdminLogout')->name('admin.logout');
    // Route::get('/change', 'ChangePassword')->name('admin.changepassword');
    // Route::post('/update/password', 'AdminUpdatePassword')->name('update.password');
    // Route::get('/profile', 'admin_profile')->name('admin.profile');
    // Route::post('/store/profile', 'store_profile')->name('admin.store.profile');
});
Route::middleware(['auth', 'role:agent'])->controller(AgentController::class)->prefix('/agent')->group(function () {
    Route::get('/dashboard', 'agent_dashboard')->name('agent.dashboard');
    // Route::get('/logout', 'AdminLogout')->name('admin.logout');
    // Route::get('/change', 'ChangePassword')->name('admin.changepassword');
    // Route::post('/update/password', 'AdminUpdatePassword')->name('update.password');
    // Route::get('/profile', 'admin_profile')->name('admin.profile');
    // Route::post('/store/profile', 'store_profile')->name('admin.store.profile');
});
Route::controller(BackendController::class)->prefix('/dashboard')->group(function () {
    Route::get('/administrator', 'administrator')->name('administrator');
    Route::get('/mentors', 'mentors')->name('mentors');
    Route::get('/pendingmentors', 'pendingmentors')->name('pendingmentors');
    Route::get('/mentee', 'mentee')->name('mentee');
    Route::get('/pendingmentee', 'pendingmentee')->name('pendingmentee');
    Route::get('/users', 'users')->name('users');
    Route::get('/approvedmeeting', 'approvedmeeting')->name('approvedmeeting');
    Route::get('/pendingmeeting', 'pendingmeeting')->name('pendingmeeting');
    Route::get('/rejectedmeeting', 'rejectedmeeting')->name('rejectedmeeting');
    Route::get('/completedmeeting', 'completedmeeting')->name('completedmeeting');
    Route::get('/allmeeting', 'allmeeting')->name('allmeeting');
    Route::get('/allticket','allticket')->name('allticket');
    Route::get('/pendingticket','pendingticket')->name('pendingticket');
    Route::get('/completedticket','completedticket')->name('completedticket');
    Route::get('/contactmassage','contactmassage')->name('contactmassage');
    Route::get('/subscribermanager','subscribermanager')->name('subscribermanager');
    Route::get('/allwithdraw','allwithdraw')->name('allwithdraw');
    Route::get('/pendingwithdraw','pendingwithdraw')->name('pendingwithdraw');
    Route::get('/completedwithdraw','completedwithdraw')->name('completedwithdraw');
    Route::get('/rejectedwithdraw','rejectedwithdraw')->name('rejectedwithdraw');
    // Route::get('/logout', 'AdminLogout')->name('admin.logout');
    // Route::get('/change', 'ChangePassword')->name('admin.changepassword');
    // Route::post('/update/password', 'AdminUpdatePassword')->name('update.password');
    // Route::get('/profile', 'admin_profile')->name('admin.profile');
    // Route::post('/store/profile', 'store_profile')->name('admin.store.profile');
});