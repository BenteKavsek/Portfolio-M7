<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectAdminController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Models\About;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/projects/add', [ProjectController::class, 'add' ])->name('projects.add');

Route::get('/projects', [ ProjectController::class, 'index' ])->name('projects');

Route::get('/projects/{project}',[ProjectController::class, 'show'])->name('projects.show');


Route::prefix('/dashboard')
    ->middleware(['auth', 'verified'])
    ->group( function(){

    Route::get(
        '/',
        function () {
            return view('dashboard');
        })->name('dashboard');

    Route::resources(
        [
            'project' => ProjectAdminController::class,
        ]);
});


require __DIR__.'/auth.php';