<?php

use Illuminate\Support\Arr;
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
            'id' => 1,
            'slug' => 'title-article-1',
            'title' => 'Title Article 1',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ducimus asperiores laboriosam odit enim aperiam ipsum repellendus quas, corporis, non voluptates, est vel nemo impedit dolorem quisquam at blanditiis dolor.'
        ],
        [
            'id' => 2,
            'slug' => 'title-article-2',
            'title' => 'Title Article 2',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi et, exercitationem tempora reprehenderit quos corporis rem architecto ipsum tempore? Quasi dolore magnam fuga molestiae sit ratione dolorem ducimus ullam similique.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'title-article-1',
            'title' => 'Title Article 1',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic ducimus asperiores laboriosam odit enim aperiam ipsum repellendus quas, corporis, non voluptates, est vel nemo impedit dolorem quisquam at blanditiis dolor.'
        ],
        [
            'id' => 2,
            'slug' => 'title-article-2',
            'title' => 'Title Article 2',
            'author' => 'Daffa Rinaldi',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi et, exercitationem tempora reprehenderit quos corporis rem architecto ipsum tempore? Quasi dolore magnam fuga molestiae sit ratione dolorem ducimus ullam similique.'
        ]
        ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
