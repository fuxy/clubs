<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    public function run(): void
    {
        City::factory()->create([
            'name' => 'София',
        ]);
        City::factory()->create([
            'name' => 'Пловдив',
        ]);
        City::factory()->create([
            'name' => 'Бургас',
        ]);
    }
}
