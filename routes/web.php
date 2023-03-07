<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', [DashboardController::class, 'index'])->name('mentors.index');
Route::get('/create', [DashboardController::class, 'create']);
Route::post('/store', [DashboardController::class, 'store'])->name('mentors.store');
Route::delete('/delete/{id_mentor}', [DashboardController::class, 'destroy'])->name('mentors.destroy');

