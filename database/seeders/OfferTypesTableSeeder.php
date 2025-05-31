<?php

namespace Database\Seeders;

use App\Models\OfferType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfferTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfferType::factory()->count(10)->create();
    }
}
