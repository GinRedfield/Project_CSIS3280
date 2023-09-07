<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', 'App\Http\Controllers\Controller@welcome');


// regular dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// admin routes
Route::get('/admin', function () {
    return view('admin');
})->middleware(['auth', 'admin'])->name('admin');

Route::resource('users','App\Http\Controllers\UserController')->middleware(['auth', 'admin']);


// ticket routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('tickets','App\Http\Controllers\TicketsController')->middleware(['auth', 'verified']);


// notice routes
Route::resource('notices', 'App\Http\Controllers\NoticeController')->middleware(['auth', 'verified']);


require __DIR__.'/auth.php';




// Route::get('/tickets', function () {
//     return view('tickets');
// })->middleware(['auth', 'verified'])->name('tickets');

