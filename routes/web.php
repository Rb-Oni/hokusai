<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\ProfileController as AdminProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::view('profile', 'admin.user.profile')->name('profile');
    Route::put('profile', [AdminProfileController::class, 'update'])->name('profile.update');
});

require __DIR__ . '/auth.php';
