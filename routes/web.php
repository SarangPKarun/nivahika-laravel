<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/add', [ProjectController::class, 'add'])->name('project.add');
Route::post('/project', [ProjectController::class, 'store'])->name('project.store');
Route::get('/project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/project/{project}/update', [ProjectController::class, 'update'])->name('project.update');
Route::delete('/project/{project}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');
