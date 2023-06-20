<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TopicUserController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\TaglineController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\ACAController;
use App\Http\Controllers\TSCController;
use App\Http\Controllers\PostController;
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

Auth::routes();

Route::get('/', function () {
    // return view('welcome');
    return view('content.index');
});
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/doc', [HomeController::class, 'doc'])->name('doc');
Route::get('/topics', [HomeController::class, 'topics'])->name('topics');
Route::get('/post', [HomeController::class, 'post'])->name('post');

// Admin
Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::get('/theme-topic', [AdminController::class, 'themeTopic'])->name('themeTopic');
Route::resource('document', DocumentController::class);
Route::resource('theme', ThemeController::class);
Route::resource('topic', TopicController::class);
Route::resource('unit', UnitController::class);
Route::resource('timeline-short-course', TSCController::class);
Route::resource('about-id-academy', ACAController::class);
Route::resource('topic-user', TopicUserController::class);
Route::resource('progress', ProgressController::class);
Route::resource('user', UserController::class);
Route::resource('post', PostController::class);
Route::resource('tagline', TaglineController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
