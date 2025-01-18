<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    protected $heroes = [
        'Alucard',
        'Akai',
        'Argus',
        'Aurora',
        'Badang',
        'Balmond',
        'Benedetta',
        'Bruno',
        'Chou',
        'Clint',
        'Kaja',
        'Martis',
        'Jawhead',
        'Leomord',
        'Guinevere',
        'Badang',
        'X Borg',
        'Terizla',
        'Dyrroth',
        'Gatotkaca',
        'Lapu-lapu',
        'Sun',
        'Alpha',
        'Freya',
        'Chou',
        'Roger',
        'Hilda',
        'Balmond',
        'Bane',
        'Zilong',
        'Alucard',
        'Aulus',
        'Yin',
        'Julian',
        'Fredrinn',
        'Arlott',
        'Cici',
        'Baxia',
        'Belerick',
        'Estes',
        'Franco',
        'Hylos',
        'Khufra',
        'Tigreal',
        'Uranus',
        'Atlas',
        'Masha',
    ];

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 'name' => $this->faker->unique()->randomElement($this->heroes),

        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
