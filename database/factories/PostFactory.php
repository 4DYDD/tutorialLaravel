<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $keywords = [
        'viral',
        'heboh',
        'gegerkan',
        'netizen',
        'heboh',
        'trending',
        'sensasi',
        'terbaru',
        'mengejutkan',
        'unik',
        'aneh',
        'lucu',
        'sedih',
        'marah',
        'cinta',
        'benci',
        'politik',
        'selebriti',
        'olahraga',
        'teknologi'
    ];
    protected $structures = [
        'Viral! ...',
        '... gegerkan publik',
        '... bikin heboh',
        '... terbaru!',
        '... mengejutkan!',
        '... tak terduga!'
    ];


    public function definition(): array
    {
        $structure = $this->faker->randomElement($this->structures);
        $title = str_replace('...', $this->faker->randomElement($this->keywords) . ' ' . fake()->words(2, true), $structure);

        return [
            'title' => $title,
            'author' => fake()->name(),
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text(),
        ];
    }
}
