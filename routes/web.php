<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TotalusiasekolahController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/getData', [ItemController::class, 'getData'])->name('items.getData');

Route::get('totalusiasekolah', [TotalusiasekolahController::class, 'index'])->name('totalusiasekolah.index');
Route::get('totalusiasekolah/list', [TotalusiasekolahController::class, 'getTotalusiasekolah'])->name('totalusiasekolah.list');
