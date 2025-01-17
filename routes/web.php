<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserviewController;
use App\Http\Controllers\CallVisit_ct;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('callvisits', CallVisit_ct::class);
    Route::get('callvisits/{callvisit}/edit',[CallVisit_ct::class, 'edit']);

    Route::view('user-list', 'admin.user-list')->name('user-list');
    Route::get('/user-view/{id}', [UserviewController::class, 'mount']);

    Route::view('cv_edit', 'pse.cv_edit')->name('cv_edit');
    Route::view('cv_new', 'pse.cv_new')->name('cv_new');
    Route::view('cv_list', 'pse.cv_list')->name('cv_list');

    Route::get('/autocomplete-customers', [CallVisit_ct::class, 'autocomplete'])->name('autocomplete.customers');
    Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);
});

Route::middleware('sa')->group(function () {
    Route::view('register', 'auth.register')->name('register');
});

require __DIR__ . '/auth.php';
