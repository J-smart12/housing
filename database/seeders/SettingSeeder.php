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
        ]);
    }
}
