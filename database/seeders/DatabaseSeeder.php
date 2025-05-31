<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // UserSeeder::class,
            // PropertySeeder::class,
            // ClientSeeder::class,
            // BlogSeeder::class,
            // CitySeeder::class,
            // SettingSeeder::class,
            // GallerySeeder::class,
            // FeaturesTableSeeder::class,
            // OfferTypesTableSeeder::class,
            OfferTypePropertiesTableSeeder::class,
        ]);
        
    }
}
