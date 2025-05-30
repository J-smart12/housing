<?php

namespace Database\Seeders;

use App\Models\CityModel;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CityModel::factory(10)->create();
    }
}
