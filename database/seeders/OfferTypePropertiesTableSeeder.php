<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OfferType;
use App\Models\Properties;
use Illuminate\Support\Facades\DB;

class OfferTypePropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offerTypeIds = OfferType::pluck('id')->toArray();
        $propertyIds = Properties::pluck('id')->toArray();

        if (empty($offerTypeIds) || empty($propertyIds)) {
            // Make sure there’s data to seed
            $this->command->info('No offer types or properties found. Seed them first!');
            return;
        }

        // Create 20 random pivot relationships
        foreach (range(1, 20) as $i) {
            DB::table('offer_type_properties')->insertOrIgnore([
                'offer_type_id' => $this->fakerElement($offerTypeIds),
                'properties_id' => $this->fakerElement($propertyIds),
            ]);
        }
    }

    private function fakerElement(array $array)
    {
        return $array[array_rand($array)];
    }
}
