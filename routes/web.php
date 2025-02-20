<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ClientController;

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
// Route::get('/home', [AgentController::class, 'index'])->name('wassim');
Route::get('/agent.dashboard', [AgentController::class, 'index'])->name('dashboard');
Route::get('/client.dashboard', [ClientController::class, 'index'])->name('dashboard');
Route::get('/admin.dashboard', [AdminController::class, 'index'])->name('dashboard');


// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// });

// Route::middleware(['auth', 'role:agent'])->group(function () {
//     Route::get('/dashboard', [AgentController::class, 'index'])->name('agent.dashboard');
// });

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/dashboard', [ClientController::class, 'index'])->name('client.dashboard');
// });

Route::middleware('auth', )->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
