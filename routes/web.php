<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/finance', function () {
    return view('finance');
});

Route::get('/lang/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('home');
})->name('locale');

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/directory', [HomeController::class, 'directory'])->name('directory');
Route::get('/directory/detail/{name?}', [HomeController::class, 'directory'])->name('details');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Projects routes ...
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('/projects/show', [ProjectsController::class, 'show'])->name('projects.show');

