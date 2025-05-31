<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SettingsModel;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SettingsModel::create([
            'sitename' => 'Benallyrealestate',
            'phone' => '08012345678',
            'address' => '123 Banana Island, Lagos, Nigeria',
            'email' => 'info@benallyrealestate.com',
            'logo' => 'https://via.placeholder.com/150x50.png?text=Logo',
            'slug' => 'benally-real-estate',
            'vision' => 'We envision to help an average American citizens own a home through our fare prizes and flexible payment plans based on our terms and condtions at Carmody real estate',
            'about_us' => 'This traditional Santa Cruz bungalow offers a unique blend of updated amenities and timeless charm, making it the perfect coastal retreat. With its functional layout, abundant natural light, expansive decks and patios, and well established landscaping, this property creates a quiet and secluded atmosphere ideal for soaking in the soothing ocean breeze.'
        ]);
    }
}
