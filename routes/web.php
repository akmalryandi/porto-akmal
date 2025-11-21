<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;


Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::resource('profiles', ProfileController::class);
Route::resource('projects', ProjectController::class);
Route::resource('resumes', ResumeController::class);
Route::resource('tools', ToolController::class);
