<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all', [\App\Http\Controllers\ContactController::class, 'allData'])
    ->name('contact-data');

Route::get('/contact/all/{id}', [\App\Http\Controllers\ContactController::class, 'showOneMessage'])
    ->name('contact-data-one');

Route::get('/contact/all/{id}/update', [\App\Http\Controllers\ContactController::class, 'updateMessage'])
        ->name('contact-update');

Route::post('/contact/all/{id}/update', [\App\Http\Controllers\ContactController::class, 'updateMessageSubmit'])
        ->name('contact-update-submit');

Route::get('/contact/all/{id}/delete', [\App\Http\Controllers\ContactController::class, 'deleteMessage'])
    ->name('contact-delete');

Route::post('/contact/submit', [\App\Http\Controllers\ContactController::class, 'submit'])
    ->name('contact-form');
