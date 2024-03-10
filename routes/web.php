<?php

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
    Route::resource('stores',StoreController::class);
    Route::resource('product',ProductController::class);
    Route::resource('file',FileController::class);
    Route::get('store/{store}',[StoreController::class,'dashboard'])->name('storehome');
});
