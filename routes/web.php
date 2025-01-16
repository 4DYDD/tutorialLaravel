<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// home
// blog
// about
// contact

Route::get('/home', function () {
    return view('home', ["title" => "home"]);
});

Route::get('/blog', function () {
    return view('blog', ["title" => "blog"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "about", "name" => "Haidir Aditya"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "contact"]);
});
