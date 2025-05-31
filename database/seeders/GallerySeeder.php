<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Properties;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $properties = Properties::all();

        if ($properties->isEmpty()) {
            $this->command->info('No properties found. Please seed properties first.');
            return;
        }

        foreach ($properties as $property) {
            Gallery::factory(rand(2, 5))->create([
                'properties_id' => $property->id,
            ]);
        }
    }
}
