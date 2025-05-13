<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/posts', function () {
    return view('posts', ["title" => "Blog", "posts" => [
        [
            'title' => 'Title Article 1',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ducimus asperiores laboriosam odit enim aperiam ipsum repellendus quas, corporis, non voluptates, est vel nemo impedit dolorem quisquam at blanditiis dolor.'
        ],
        [
            'title' => 'Title Article 2',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi et, exercitationem tempora reprehenderit quos corporis rem architecto ipsum tempore? Quasi dolore magnam fuga molestiae sit ratione dolorem ducimus ullam similique.'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
