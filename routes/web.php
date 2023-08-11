<?php

use App\Http\Controllers\dashboardController;

use App\Http\Controllers\JoinRoomController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PreferenceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\RoomController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

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



Route::get('/dashboard',[dashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

//Route::controller(PreferenceController::class)->group(function () {
//    Route::get('/preferences', 'index')->name('preferences');
//    Route::post('/preferences/store', 'store')->name('preference.store');
//    Route::get('/preferences/{id}','')->name('preference.destroy');
//})->middleware(['auth', 'verified']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/preferences', [PreferenceController::class, 'index'])->name('preferences');
    Route::post('/preferences/store', [PreferenceController::class, 'store'])->name('preferences.store');
    Route::get('/preferences/{id}', [PreferenceController::class, 'destroy'])->name('preferences.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/group-request', [RequestsController::class, 'index'])->name('request.show');

});


Route::middleware(['auth', 'verified'])->group(function () {
;
    Route::get('/join-room/{key}', [JoinRoomController::class, 'show'])->name('join-room.show');
    Route::post('/join-room/store', [JoinRoomController::class, 'store'])->name('join-room.store');
  ;
});





















Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/create-room', [RoomController::class, 'index'])->name('create-room');
    Route::post('/create-room/store', [RoomController::class, 'store'])->name('create-room.store');
    Route::get('/create-room/{id}', [RoomController::class, 'destroy'])->name('create-room.destroy');
});

//Route::middleware(['auth','verified'])->group(function(){
//    Route::get('messages/{id}',[messagesController::class, 'show'])->name('messages.show');
//});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/messages/{id}', [MessagesController::class, 'show'])->name('messages.view');
    Route::get('/create-message', [MessagesController::class, 'index'])->name('messages.create');
    Route::post('/create-message/store', [MessagesController::class, 'store'])->name('messages.store');

});



Route::get('/message', function () {
    return Inertia::render('Message');
})->middleware(['auth', 'verified'])->name('Message');

Route::get('/room', function () {
    return Inertia::render('Admin');
})->middleware(['auth', 'verified'])->name('room');

Route::get('/create-group', function () {
    return Inertia::render('CreateGroup');
})->middleware(['auth', 'verified'])->name('create-group');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
