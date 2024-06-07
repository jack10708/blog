<?php
use App\Http\Controllers\admin\Admincontroller;
use App\Http\Controllers\admin\DashAdmincontroller;
use App\Http\Controllers\Dashboardcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Logincontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

//Route::get('/forgetpass', [HomeController::class, 'forgetpass'])->name('forgetpass');

Route::get('clients/register', [LoginController::class, 'register'])->name('clients.register');
Route::post('clients/register_user', [LoginController::class, 'register_user'])->name('clients.register_user');
Route::get('clients/login', [LoginController::class, 'login'])->name('clients.login');
Route::post('clients/login_user', [Logincontroller::class, 'login_user'])->name('clients.login_user');
Route::get('clients/dashboard', [Dashboardcontroller::class, 'dashboard'])->name('clients.dashboard');
Route::get('clients/logout', [LoginController::class, 'logout'])->name('clients.logout');


Route::get('admin/login', [Admincontroller::class, 'login'])->name('admin.login');
Route::post('admin/login_user', [Admincontroller::class, 'login_user'])->name('admin.login_user');
Route::get('admin/dashboard', [DashAdmincontroller::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/logout', [Admincontroller::class, 'logout'])->name('admin.logout');







