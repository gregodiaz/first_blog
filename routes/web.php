<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::controller(PostController::class)->group(function () {

    Route::get('/',                 'home')->name('home');
    Route::get('blog',              'blog')->name('blog');
    Route::get('blog/{post:slug}',  'post')->name('post');

});
