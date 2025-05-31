<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OfferType>
 */
class OfferTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(2, true);

        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'value' => Str::snake($name),
            'has_label' => $this->faker->boolean,
            'link' => $this->faker->optional()->url,
            'bg_color' => $this->faker->safeHexColor,
            'color' => $this->faker->safeHexColor,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
