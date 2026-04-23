<?php

// :after controllerName means Give me the full class name as a string (with namespace it points to "App\\Http\\Controllers\\NoteController"
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// WelcomeController is the className and welcome is the method name 
Route::get('/', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/note', [NoteController::class, 'index'])->name('note.index');

Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');

Route::post("/note", [NoteController::class, 'store'])->name('note.store');

Route::get('/note/{id}', [NoteController::class, 'edit'])->name('note.show');
