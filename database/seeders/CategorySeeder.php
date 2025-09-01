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
            'slug' => 'web-design',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Front End',
            'slug' => 'front-end',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Back End',
            'slug' => 'back-end',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Full Stack',
            'slug' => 'full-stack',
            'color' => 'purple'
        ]);
    }
}
