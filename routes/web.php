<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\TopicUserController;
use App\Http\Controllers\TSCController;
use App\Http\Controllers\ACAController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\TaglineController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UnitController;

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
    // return view('welcome');
    return view('content.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/doc', [HomeController::class, 'doc'])->name('doc');
Route::get('/topics', [HomeController::class, 'topics'])->name('topics');
Route::get('/posts', [HomeController::class, 'index'])->name('posts');

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

Route::get('/scrape', [DocumentController::class, 'scrape'])->name('scrape');
Route::get('/cominfo-ptk', [DocumentController::class, 'cominfoPtk'])->name('cominfoPtk');
Route::get('/scrape-organic-usda', [DocumentController::class, 'usdaOrganic'])->name('usdaOrganic');
Route::get('/scrape-berita-negara', [DocumentController::class, 'scrapeBeritaNegara'])->name('scrapeBeritaNegara');
Route::get('/scrape-blazor', [DocumentController::class, 'scrapeBlazorWebsite'])->name('scrapeBlazorWebsite');

Route::get('/scrapeCoffeeData', [DocumentController::class, 'scrapeCoffeeData'])->name('scrapeCoffeeData');
Route::get('/scrapeCoffeeData2', [DocumentController::class, 'scrapeCoffeeData2'])->name('scrapeCoffeeData2');

require __DIR__ . '/auth.php';
