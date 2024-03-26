<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
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

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::get('/user/delete/{id}', [UserController::class, 'delete']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
Route::post('/level', [LevelController::class, 'store']);
Route::get('/level/edit/{id}', [levelController::class, 'edit']);
Route::put('/level/{id}', [LevelController::class, 'update']);
Route::get('/level/delete/{id}', [LevelController::class, 'delete']);

Route::resource('m_user', POSController::class);
// Route::get('/m_user/create', [POSController::class, 'create'])->name('m_user.create');
// Route::put('/m_user/show/{id}', [POSController::class, 'show'])->name('m_user.show');
// Route::post('/m_user', [POSController::class, 'store']);
// Route::get('/m_user/edit/{id}', [POSController::class, 'edit'])->name('m_user.edit');
// Route::put('/m_user/{id}', [POSController::class, 'update']);
// Route::get('/m_user/delete/{id}', [POSController::class, 'delete']);
// Route::get('/m_user/destroy/{id}', [POSController::class, 'destroy'])->name('m_user.destroy');
