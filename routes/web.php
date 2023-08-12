<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FakeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Testing\Fakes\Fake;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('Admin', [FakeController::class, 'Index']);
Route::resource('About-create', AboutController::class);
Route::get('About', [FakeController::class, 'About']);
Route::get('welcome', [WelcomeController::class, 'Welcome']);
Route::resource('resume', ResumeController::class);
Route::get('resume-create', [FakeController::class, 'ShowResume']);
Route::post('/form-post', [FakeController::class, 'FormPost']);
