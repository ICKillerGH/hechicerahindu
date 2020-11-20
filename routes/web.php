<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\ListUsers;
use App\Http\Livewire\Admin\CreateUser;
use App\Http\Controllers\AuthController;
use App\Http\Livewire\Admin\ListHoroscopes;
use App\Http\Controllers\Web\HomeController;
use App\Http\Livewire\Admin\CreateHoroscope;
use App\Http\Livewire\Admin\ListContactMessages;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/horoscopos/{zodiacSign}', [HomeController::class, 'horoscopes'])->name('horoscopes');

Route::get('/login', [AuthController::class, 'showForm'])->name('showForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function() {
    Route::redirect('/', 'admin/usuarios');

    Route::prefix('/usuarios')->name('users.')->group(function() {
        Route::get('/', ListUsers::class)->name('index')->middleware('can:viewAny,App\User');
        Route::get('/crear', CreateUser::class)->name('create')->middleware('can:create,App\User');
    });

    Route::prefix('/mensajes-de-contacto')->name('contactMessages.')->group(function() {
        Route::get('/', ListContactMessages::class)->name('index');
    });

    Route::prefix('/horoscopos')->name('horoscopes.')->group(function() {
        Route::get('/', ListHoroscopes::class)->name('index');
        Route::get('/create', CreateHoroscope::class)->name('create');
    });
});
