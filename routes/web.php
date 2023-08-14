<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\EventListener\ProfilerListener;

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

Route::get('/', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/responden', [RespondenController::class, 'index']);
    Route::get('/responden/show/{id}', [RespondenController::class, 'show']);
    Route::get('/export', [RespondenController::class, 'export']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile/update/{id}', [ProfileController::class, 'update']);
    Route::get('/destroy', [ProfileController::class, 'destroy']);

    Route::post('/responden/destroy/{id}', [RespondenController::class, 'destroy']);
});
