<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{

    protected $categories = [
        'Politik',
        'Olahraga',
        'Ekonomi',
        'Teknologi',
        'Sosial Budaya'
    ];

    public function definition(): array
    {
        $categoriesnya = $this->faker->unique()->randomElement($this->categories);
        return [
            'name' => $categoriesnya,
            'slug' => Str::slug($categoriesnya)
        ];
    }
}
