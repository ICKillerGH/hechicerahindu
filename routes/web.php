<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\ListUsers;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\Admin\ListContactMessages;

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
    return view('home');
});

Route::get('/login', [AuthController::class, 'showForm'])->name('showForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function() {
    Route::redirect('/', 'admin/usuarios');

    Route::prefix('/usuarios')->name('users.')->group(function() {
        Route::get('/', ListUsers::class)->name('index');
    });

    Route::prefix('/mensajes-de-contacto')->name('contactMessages.')->group(function() {
        Route::get('/', ListContactMessages::class)->name('index');
    });
});
