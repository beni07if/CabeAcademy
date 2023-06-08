<?php

use App\Http\Controllers\HomeController;
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
    // return view('welcome');
    return view('content.index');
});
Route::get('/home', [HomeController::class, 'index'])->name('index');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/doc', [HomeController::class, 'doc'])->name('doc');
Route::get('/topic', [HomeController::class, 'topic'])->name('topic');
