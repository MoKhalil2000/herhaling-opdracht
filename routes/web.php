<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongContrller;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\BandsController;

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


Route::resource('bands', BandsController::class);
Route::resource('albums', AlbumsController::class);


Route::get('/', function () {
    return view('welcome');
});
Route::get('/song', [SongContrller::class,'index']);
Route::post('/song', [SongContrller::class,'store']);
Route::get('/song/create', [SongContrller::class,'create']);
Route::get('/song/{id}/edit', [SongContrller::class, 'edit'])->name('edit');
Route::put('/update/{id}', [SongContrller::class, 'update'])->name('update');
Route::get('/song/{id}', [SongContrller::class,'show'])->name('show');
Route::delete('/song/{id}', [SongContrller::class,'destroy'])->name('destroy');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
