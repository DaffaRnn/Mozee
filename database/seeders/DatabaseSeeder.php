<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design'
        // ]);

        // Post::create([
        //     'title' => 'Title Article 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'title-article-1',
        //     'body' => 'A website is a collection of pages that can be accessed via the internet using a web browser such as Google Chrome, Mozilla Firefox, or other browsers. Each page on the website is connected to each other via links and can contain various types of information. Websites can be used for many purposes, from sharing information, running a business, to providing online services. On a website, you can find various content such as text, images, videos, to interactive elements that allow users to interact with the system. For example, when you open an online store, you not only see a list of products but can also shop online.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class]);
        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
