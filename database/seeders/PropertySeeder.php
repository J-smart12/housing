<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Properties;
use App\Models\User;
use Illuminate\Support\Str;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id')->toArray();

        if (empty($users)) {
            $this->command->info('No users found. Please seed users first.');
            return;
        }

        Properties::factory(20)->create([
            'user_id' => function () use ($users) {
                return $users[array_rand($users)];
            },
        ]);
    }
}
