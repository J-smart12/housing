<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $name = $this->faker->streetName;

        return [
            'name' => $name,
            'slug' => Str::slug($name . '-' . Str::random(5)),
            'user_id' => 1, // overwritten in seeder
            'excerpt' => $this->faker->sentence,
            'link' => $this->faker->url,
            'image_srcset' => $this->faker->imageUrl,
            'image' => $this->faker->imageUrl,
            'address' => $this->faker->address,
            'neighborhood' => $this->faker->word,
            'street' => $this->faker->streetName,
            'details' => $this->faker->paragraph,
            'date_listed' => $this->faker->date(),
            'days_ago' => $this->faker->numberBetween(1, 30) . ' days ago',
            'type' => $this->faker->randomElement(['Apartment', 'Duplex', 'Villa']),
            'label' => $this->faker->word,
            'plan1' => $this->faker->word,
            'plan2' => $this->faker->word,
            'city' => $this->faker->city,
            'is_featured' => $this->faker->boolean,
            'status' => $this->faker->randomElement(['available', 'sold', 'pending']),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid']),
            'attribute_classes' => implode(' ', $this->faker->words(3)),
            'property_size' => $this->faker->numberBetween(50, 500),
            'date' => $this->faker->date(),
            'price' => $this->faker->randomFloat(3, 10000, 1000000),
        ];
    }
}
