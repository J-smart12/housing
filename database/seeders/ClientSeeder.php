<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClientTestimonials;

class ClientSeeder extends Seeder
{
    public function run(): void
    {
        ClientTestimonials::factory(10)->create(); // generates 10 dummy clients
    }
}
