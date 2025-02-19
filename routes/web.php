<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\AnimationController;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('about');

Route::get('/resume', function () {
    return Inertia::render('Resume');
})->name('resume');

Route::get('/download-cv', function () {
    $file = public_path('cv/Resume_Tristan_Vegas.pdf');
    return response()->download($file);
})->name('download.cv');



// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard', ['users' => User::paginate(5)]);
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function (Request $request) {
    return Inertia::render('Dashboard', [
        'users' => User::when($request->search, function ($query) use ($request) {
            $query
                ->where('name', 'like', '%' . $request->search . '%')
                ->OrWhere('email', 'like', '%' . $request->search . '%');
        })->paginate(5)->withQueryString(),

        'searchTerm' => $request->search,

        'canDelete' => [
            'delete_user' => Auth::user() ? Auth::user()->can('delete', User::class) : null
        ]
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/workspace/animation/boxes', [AnimationController::class, 'index_boxes']);
Route::get('/workspace/animation/boxes-2', [AnimationController::class, 'index_boxes_2']);
Route::get('/workspace/animation/raindrop', [AnimationController::class, 'index_raindrop']);
Route::get('/workspace/animation/bubble', [AnimationController::class, 'index_bubble']);
Route::get('/workspace/animation/test', [AnimationController::class, 'index_test']);

require __DIR__ . '/auth.php';

// Route::get('/new', [PracticeController::class, 'index']);

// Route::get('/json', [PracticeController::class, 'controllerMethod']);

//Route::any('{slug}', [PracticeController::class, 'missing_404']);

// Route::get('/practice', function () {
//     sleep(.5); //this will show progress indicator but load for 5 sec 
//     return Inertia::render('PracticeWelcome');
// })->name('practice');

//there also alternative way to implement this one at 46 line
// Route::get('/practice/data', function () {
//     return inertia('Data', ['user' => 'Tristan']);
// })->name('data');

// Route::inertia('/practice/data/alternative', 'Data', ['user' => 'Tristan Alternative'])->name('alternative');
