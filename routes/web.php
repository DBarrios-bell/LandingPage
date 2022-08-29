<?php

use App\Http\Controllers\ExportController;
use App\Http\Livewire\AdministratorsController;
use App\Http\Livewire\UsersController;
use App\Http\Livewire\WinnersController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', WinnersController::class)->name('ganador');
Route::get('/registro', UsersController::class)->name('user');
Route::get('/administrador', AdministratorsController::class)->name('admin');
Route::get('/exportar', [ExportController::class, 'export'])->name('exportar');
