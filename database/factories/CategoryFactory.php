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
        'Politik' => 'red',
        'Olahraga' => 'blue',
        'Ekonomi' => 'green',
        'Teknologi' => 'purple',
        'Sosial Budaya' => 'orange'
    ];

    protected $color = [];

    public function definition(): array
    {
        $categoryName = $this->faker->unique()->randomElement(array_keys($this->categories));
        $categoryColor = $this->categories[$categoryName];
        // $categoriesnya = $this->faker->unique()->randomElement($this->categories);
        // $color = $this->faker->unique()->randomElement($this->color);
        return [
            'name' => $categoryName,
            'slug' => Str::slug($categoryName),
            'color' => $categoryColor,
        ];
    }
}
