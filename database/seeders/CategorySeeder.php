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
        //
        // Category::create([
        //     'name' => 'Politik',
        //     'slug' => 'politik'
        // ]);
        // Category::create([
        //     'name' => 'Olahraga',
        //     'slug' => 'olahraga'
        // ]);
        // Category::create([
        //     'name' => 'Ekonomi',
        //     'slug' => 'ekonomi'
        // ]);
        // Category::create([
        //     'name' => 'Teknologi',
        //     'slug' => 'teknologi'
        // ]);
        // Category::create([
        //     'name' => 'Sosial Budaya',
        //     'slug' => 'sosial-budaya'
        // ]);

        Category::factory(3)->create();
    }
}
