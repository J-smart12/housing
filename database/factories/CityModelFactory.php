<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CityModel>
 */
class CityModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cityName = $this->faker->city;

        return [
            'city' => $cityName,
            'image' => $this->faker->imageUrl(640, 480, 'city'),
            'slug' => Str::slug($cityName . '-' . Str::random(5)),
            'date' => $this->faker->date(),
        ];
    }
}
