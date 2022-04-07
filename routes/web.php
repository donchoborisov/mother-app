<?php

use App\Http\Controllers\AdvertController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});

Route::post('contact',[ContactController::class,'contactPost'])->name('contact.store');
Route::get('/topics',[ContactController::class,'getTopics']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/advert/create',[AdvertController::class,'create'])->name('advert.create')->middleware('auth');
Route::post('/advert/store',[AdvertController::class,'store'])->name('advert.store')->middleware('auth');
Route::get('/advert/show/{id}',[AdvertController::class,'show'])->name('advert.show')->middleware('auth');
Route::get('/advert/edit/{id}',[AdvertController::class,'edit'])->name('advert.edit')->middleware('auth');
Route::put('/advert/update/{id}',[AdvertController::class,'update'])->name('advert.update')->middleware('auth');



