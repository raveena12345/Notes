<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoteController;

// Signup Routes
Route::get('/signup', [UserController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [UserController::class, 'store'])->name('signup.store');

// Login Routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [UserController::class, 'authenticate'])->name('login.authenticate');


// Notes routes
Route::get('/dashboard', [NoteController::class, 'index'])->name('dashboard');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::get('/notes/{id}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::post('/notes/{id}', [NoteController::class, 'update'])->name('notes.update');
Route::post('/notes/{id}/delete', [NoteController::class, 'destroy'])->name('notes.delete');

// **Define Logout Route**
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
