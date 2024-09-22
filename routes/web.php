<?php

use App\Http\Controllers\PracticeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/new', [PracticeController::class, 'index']);

Route::get('/json', [PracticeController::class, 'controllerMethod']);

//Route::any('{slug}', [PracticeController::class, 'missing_404']);

Route::get('/practice', function () {
    sleep(5); //this will show progress indicator but load for 5 sec 
    return Inertia::render('PracticeWelcome');
});

//there also alternative way to implement this one at 46 line
Route::get('/practice/data', function () {
    return inertia('Data', ['user' => 'Tristan']);
});

Route::inertia('/practice/data/alternative', 'Data', ['user' => 'Tristan Alternative']);
