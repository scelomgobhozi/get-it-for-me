<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PreferenceController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Route::get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard',[dashboardController::class, 'index'])
 ->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(PreferenceController::class)->group(function(){
    Route::get('/likes','index');
})->middleware(['auth','verified']);



Route::get('/message', function () {
    return Inertia::render('Message');
})->middleware(['auth', 'verified'])->name('Message');

Route::get('/room', function () {
    return Inertia::render('Admin');
})->middleware(['auth', 'verified'])->name('room');

Route::get('/create-group', function () {
    return Inertia::render('CreateGroup');
})->middleware(['auth', 'verified'])->name('create-group');

Route::get('/requests', function () {
    return Inertia::render('GroupRequest');
})->middleware(['auth', 'verified'])->name('request');

Route::get('/likes', function () {
    return Inertia::render('Likes');
})->middleware(['auth', 'verified'])->name('likes');

Route::get('/join-group', function () {
    return Inertia::render('JoinGroup');
})->middleware(['auth', 'verified'])->name('join-group');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
