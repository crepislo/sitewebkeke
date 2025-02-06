<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;

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

Route::get('lang/change/{lang}', [LangController::class, 'change'])->name('changeLang');
Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('travailler', [HomeController::class, 'travailler'])->name('travailler');
Route::get('apropos', [HomeController::class, 'apropos'])->name('apropos');


Route::get('politiques', function () {
    return view('politiques');
})->name('politiques');
Route::get('conditions', function () {
    return view('conditions');
})->name('conditions');
