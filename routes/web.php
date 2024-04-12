<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProjectAdminController;
use App\Http\Controllers\ProjectController;
use App\Models\About;
use Illuminate\Support\Facades\Route;

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

Route::get('/project/add', [ProjectController::class, 'add' ])->name('project.add');

Route::get('/project', [ ProjectController::class, 'index' ])->name('project');

Route::get('/project/{project}',[ProjectController::class, 'show'])->name('project.show');


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
