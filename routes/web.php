<?php

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


/* Marketing Manager */
Route::get('/marketing-manager/login', [MarketingManagerController::class, 'login_view'])->name('manager_login'); // login


//test
Route::get('/home', function () {
    return view('admin.home');
});

Route::get('/manage', function () {
    return view('admin.action.index');
});
Route::get('/add', function () {
    return view('admin.action.add');
});
Route::get('/edit', function () {
    return view('admin.action..edit');
});

Route::get('/coordinatorLogin', function () {
    return view('coordinator/auth.login');
});
Route::get('/marketingManagerLogin', function () {
    return view('marketingManager/auth.login');
});
Route::get('/studentLogin', function () {
    return view('student/auth.login');
});