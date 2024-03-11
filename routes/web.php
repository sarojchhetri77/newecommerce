<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChildCategoryController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

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
Route::get('/stores/approve/{store}', [StoreController::class, 'approveStore'])->name('stores.approve');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');

    // for store 
    Route::resource('stores', StoreController::class);

    // For the main category
    Route::prefix('category')->name('category.')->group(function () {
        Route::post('store', [CategoryController::class, 'store'])->name('store');
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::delete('delete{category}', [CategoryController::class, 'destroy'])->name('destroy');
    });
    // for product 
    Route::prefix('store')->name('store.')->group(function () {


        Route::resource('product', ProductController::class);

        // for the file 
        Route::resource('file', FileController::class);

        // to display the dashboard of the store
        Route::get('dashboard/{store}', [StoreController::class, 'dashboard'])->name('home');



        // for the child category 
        Route::prefix('category')->name('category.')->group(function () {
            Route::get('/', [ChildCategoryController::class, 'index'])->name('index');
            Route::post('store', [ChildCategoryController::class, 'store'])->name('store');
            Route::delete('delete/{childcategory}', [ChildCategoryController::class, 'destroy'])->name('destroy');
        });
    });
});
