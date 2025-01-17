<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::view("/", "home")->name("home");

Route::view("/about", "aboutUs")->name("about");

Route::get('blog',function(){
    $posts = [
        ['title' => 'First post'],
        ['title' => 'Second post'],
        ['title' => 'Third post'],
        ['title' => 'Fourth post'],
    ];
    
    return view('blog',['posts'=>$posts]);
})->name("blog");
Route::get('blog/create',[PostController::class,'create'])->name('post.create');
Route::get('/blog/{post}',[PostController::class,'show']);

Route::get('blog',[PostController::class,'index'])->name('blog');

Route::view("/contact", "contact")->name("contact");

Route::get('blog/create',[PostController::class,'create'])->name('post.create');
Route::post('/posts',[PostController::class,'store'])->name('post.store');