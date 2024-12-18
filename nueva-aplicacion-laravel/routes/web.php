<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');

})->name('home');
Route::view('about','about')->name('about');
Route::view( 'blog','blog')->name('blog');
Route::view( 'contact','contact')->name('contact');
 