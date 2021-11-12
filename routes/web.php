<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;

//Route::get(uri:'/', action:'App\Http\Controllers\PagesController@index');
Route::get('/', [BlogsController::class, 'index']);
Route::get('/blog/{title}', [BlogsController::class, 'show']);