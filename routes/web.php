<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ProfileController;

//Route::get(uri:'/', action:'App\Http\Controllers\PagesController@index');
Route::get('/', [BlogsController::class, 'index']);
Route::get('/blog/{title}', [BlogsController::class, 'show']);

Auth::routes();
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');