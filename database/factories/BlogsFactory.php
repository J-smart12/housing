<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogsFactory extends Factory
{
    public function definition(): array
    {
        $title = $this->faker->sentence;
        
        return [
            'title' => $title,
            'slug' => Str::slug($title . '-' . Str::random(5)),
            'date' => $this->faker->date(),
            'category' => $this->faker->randomElement(['Tech', 'Business', 'Lifestyle', 'News']),
            'author' => $this->faker->name,
            'author_image' => $this->faker->imageUrl(100, 100, 'people'),
            'author_quote' => $this->faker->sentence,
            'body' => $this->faker->paragraphs(5, true),
        ];
    }
}
