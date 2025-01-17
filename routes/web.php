<?php

use Illuminate\Support\Arr;
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
    return view('posts', ["title" => "Blog", "posts" => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Haidir Aditya',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consequuntur perspiciatis nam ipsum eveniet
            repudiandae asperiores quae ea modi mollitia!'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Haidir Aditya',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur non quidem perspiciatis officia vero
        impedit saepe exercitationem neque repudiandae nisi, similique maxime amet tenetur fugit!'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    // dd($id);
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Haidir Aditya',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consequuntur perspiciatis nam ipsum eveniet
            repudiandae asperiores quae ea modi mollitia!'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Haidir Aditya',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur non quidem perspiciatis officia vero
        impedit saepe exercitationem neque repudiandae nisi, similique maxime amet tenetur fugit!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/about', function () {
    return view('about', ["title" => "About", "name" => "Haidir Aditya"]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
