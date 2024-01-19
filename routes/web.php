<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/projects', [ProjectController::class, 'index'])->middleware(['auth', 'verified'])->name('projects');
Route::post('/projects/add', [ProjectController::class, 'store'])->middleware(['auth', 'verified'])->name('projects.add');
Route::post('/projects/delete/{id}', [ProjectController::class, 'destroy'])->middleware(['auth', 'verified'])->name('projects.delete');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->middleware(['auth', 'verified'])->name('projects.show');

Route::get('/clients', [ClientController::class, 'index'])->middleware(['auth', 'verified'])->name('clients');
Route::post('/clients/add', [ClientController::class, 'store'])->middleware(['auth', 'verified'])->name('clients.add');
Route::post('/clients/delete/{id}', [ClientController::class, 'destroy'])->middleware(['auth', 'verified'])->name('clients.delete');

require __DIR__.'/auth.php';
