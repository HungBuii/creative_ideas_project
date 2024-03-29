<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\MarketingManager\MarketingManagerController;
use App\Http\Controllers\MarketingManager\MarketingManangerController;

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
    return view('index');
})->name('index');

/* Admin */
Route::get('/admin/login', [AdminController::class, 'login_view'])->name('admin_login'); // login
Route::post('/admin/login-submit', [AdminController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/register-submit', [AdminController::class, 'register_submit'])->name('admin_register_submit'); // Register
Route::get('/admin/home', [AdminController::class, 'home'])->name('admin_home'); // Homepage
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin_dashboard'); // Dashboard
Route::get('/admin/list-accounts', [AdminController::class, 'list_accounts'])->name('admin_list_accounts'); // List Account
Route::get('/admin/events', [AdminController::class, 'events'])->name('admin_events'); // Events
Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin_profile');


/* Marketing Manager */
Route::get('/marketing-manager/login', [MarketingManagerController::class, 'login_view'])->name('manager_login'); // login