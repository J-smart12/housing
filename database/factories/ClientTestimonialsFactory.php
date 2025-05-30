<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientTestimonialsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'company' => $this->faker->company,
            'name' => $this->faker->name,
            'position' => $this->faker->jobTitle,
            'image' => $this->faker->imageUrl(200, 200, 'people'),
            'testimonial' => $this->faker->paragraph,
        ];
    }
}