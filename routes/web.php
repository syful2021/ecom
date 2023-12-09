<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ImageController;


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
    return view('frontend.home');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'admin'])->name('admin.dashboard');

    Route::group(['as' => 'user.', 'prefix' => 'user'], function() {
        Route::get('index',[AdminUserController::class, 'index'])->name('index');
        Route::get('create',[AdminUserController::class, 'create'])->name('create');
        Route::post('store',[AdminUserController::class, 'store'])->name('store');
        Route::get('edit/{id}',[AdminUserController::class, 'edit'])->name('edit');
        Route::get('status/{id}',[AdminUserController::class, 'status'])->name('status');

    } );


});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/dashboard',[UserController::class, 'user'])->name('user.dashboard');
});


        // Image Editing

// Route::get('/',[ImageCrudController::class, 'all_products'])->name('all.product');
// Route::get('/add-new-product',[ImageCrudController::class, 'add_new_product'])->name('add.product');
// Route::post('/store-product',[ImageCrudController::class, 'store_product'])->name('store.product');
// Route::get('/edit-product/{id}',[ImageCrudController::class, 'edit_product'])->name('edit.product');
// Route::post('/update-product/{id}',[ImageCrudController::class, 'update_product'])->name('update.product');
// Route::get('/delete-product/{id}',[ImageCrudController::class, 'delete_product'])->name('delete.product');

