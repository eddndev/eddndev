<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project;

Route::get('/', function () {
    // Fetch projects, perhaps ordered by specific logic or just all
    $projects = Project::all(); 
    return view('welcome', compact('projects'));
})->name('home');

Route::get('/work', [App\Http\Controllers\ProjectController::class, 'index'])->name('work.index');
Route::get('/work/{project:slug}', [App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile.index');

Route::get('demo/maquinaria', function () {
    return view('demo.maquinaria');
});

Route::get('demo/licencias', function () {
    return view('demo.licencias');
});