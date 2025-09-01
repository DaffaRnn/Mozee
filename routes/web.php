<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about', ["title" => "About"]);
});

Route::get('/posts', function () {

    return view('posts', ["title" => "Blog", "posts" => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function(Post $post){
   
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]);

});

Route::get('/authors/{user:username}', function(User $user){
   
    // $posts = $user->posts->load('category', 'author');

    return view('posts', ['title' => 'Articles by ' . $user->name, 'posts' => $user->posts]);

});

Route::get('/categories/{category:slug}', function(Category $category){
   
    // $post = Post::find($slug);
    // $posts = $category->posts->load('category', 'author');

    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);

});

Route::get('/contact', function () {
    return view('contact', ["title" => "Contact"]);
});
