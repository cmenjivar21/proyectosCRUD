<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/create', [ProjectController::class, 'create'])->name('projects.create');
Route::get('/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::post('/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/show/{id}', [ProjectController::class, 'show'])->name('projects.show');
Route::put('/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('/projects_pdf', 'App\Http\Controllers\ProjectController@getPDF')->name('projects_pdf');

