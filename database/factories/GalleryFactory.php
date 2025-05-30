<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Properties;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Galleries>
 */
class GalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'property_id' => Properties::inRandomOrder()->value('id') ?? Properties::factory(),
            'image' => $this->faker->imageUrl(800, 600, 'house'),
            'alt' => $this->faker->sentence(3),
        ];
    }
}
