<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\CartProductController;
use App\Http\Controllers\admin\CartController  as AdminCartController;
use App\Http\Controllers\admin\GenreController as AdminGenreController;
use App\Http\Controllers\admin\ProductController as AdminProductController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\user\ProfileController as AdminProfileController;

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
Route::get('/mangas', [ProductController::class, 'index'])->name('mangas.index');
Route::get('/mangas/{name}', [ProductController::class, 'show'])->name('mangas.show');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('contact');
Route::get('/calendrier', [CalendarController::class, 'show'])->name('calendar');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [UserController::class, 'edit'])->name('profile');
    Route::put('/profile', [UserController::class, 'update'])->name('profile.update');

    Route::get('/cart', [CartController::class, 'show'])->name('cart');
    Route::post('/cart/store', [CartProductController::class, 'store'])->name('cart.store');
    Route::put('/cart/update/{cartProduct}', [CartProductController::class, 'update'])->name('cart.update');
    Route::delete('/cart/destroy/{cartProduct}', [CartProductController::class, 'destroy'])->name('cart.destroy');
});


Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products/create', [AdminProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}/edit', [AdminProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{product}', [AdminProductController::class, 'update'])->name('products.update');
    Route::get('/products/archive', [AdminProductController::class, 'archive'])->name('admin.products.archive');
    Route::post('/products/{product}/restore', [AdminProductController::class, 'restore'])->name('products.restore')->withTrashed();
    Route::delete('/products/{product}', [AdminProductController::class, 'destroy'])->name('products.destroy')->withTrashed();

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

    Route::get('/carts', [AdminCartController::class, 'index'])->name('admin.carts.index');
});

require __DIR__ . '/auth.php';
