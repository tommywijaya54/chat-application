<?php

use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CustomerParentController;
use App\Http\Controllers\CustomerStudentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Advisor;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::resource('user', UserController::class, [
    'only' => ['index', 'edit', 'update']
]);
Route::resource('parent', CustomerParentController::class, [
    'only' => ['index', 'edit', 'update']
]);
Route::resource('student', CustomerStudentController::class, [
    'only' => ['index']
]);
Route::resource('employee', EmployeeController::class, [
    'only' => ['index']
]);
Route::resource('teacher', TeacherController::class, [
    'only' => ['index']
]);
Route::resource('advisor', AdvisorController::class, [
    'only' => ['index']
]);

Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');

require __DIR__ . '/auth.php';
