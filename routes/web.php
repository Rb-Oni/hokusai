<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\admin\GenreController as AdminGenreController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\user\ProfileController as AdminProfileController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;

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
Route::get('/mangas', [ProductController::class, 'show'])->name('mangas');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::view('profile', 'admin.user.profile')->name('profile');
    Route::put('profile', [AdminProfileController::class, 'update'])->name('profile.update');

    Route::resource('products', AdminProductController::class, ['names' => [
        'index' => 'admin.products.index',
        'create' => 'admin.products.create',
        'edit' => 'admin.products.edit'
    ]]);

    Route::resource('categories', AdminCategoryController::class, ['names' => [
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'edit' => 'admin.categories.edit'
    ]]);
    Route::resource('genres', AdminGenreController::class, ['names' => [
        'index' => 'admin.genres.index',
        'create' => 'admin.genres.create',
        'edit' => 'admin.genres.edit'
    ]]);
});

require __DIR__ . '/auth.php';
