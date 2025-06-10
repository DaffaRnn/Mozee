<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'name' => 'Front End',
            'slug' => 'front-end'
        ]);

        Category::create([
            'name' => 'Back End',
            'slug' => 'back-end'
        ]);

        Category::create([
            'name' => 'Full Stack',
            'slug' => 'full-stack'
        ]);
    }
}
