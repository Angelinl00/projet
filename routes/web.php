<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UtilisateurController;

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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/inscription' , [UtilisateurController::class , 'inscription'])->name('inscripton') ;
Route::get('/connection' , [UtilisateurController::class , 'connection'])->name('connection') ;
Route::post('/create' , [UtilisateurController::class , 'store'])->name('create.user') ;
Route::post('/connect' , [UtilisateurController::class , 'connect'])->name('connect.user') ;

Route::get('/' , [UtilisateurController::class , 'index']) ;

Route::middleware('admin')->group(function() {
    Route::get('admin' , [UtilisateurController::class , 'admin']) ;
}) ;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
