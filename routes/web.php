<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

// home
// blog
// about
// contact

Route::get('/home', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog", "posts" => Post::all()]);
});

Route::get('/authors/{user:username}', function (User $user) {
    return view('posts', ['title' => count($user->posts) . " Article by $user->name", 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', ['title' => "Articles in : $category->name", 'posts' => $category->posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/about', function () {
    return view('about', ["title" => "About", "name" => "Haidir Aditya"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
