<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionTableSeeder extends Seeder
{
    public function run(): void
    {
        Region::factory()->create([
            'name' => 'Всички',
        ]);
        Region::factory()->create([
            'name' => 'Изток',
        ]);
        Region::factory()->create([
            'name' => 'Запад',
        ]);
        Region::factory()->create([
            'name' => 'Север',
        ]);
        Region::factory()->create([
            'name' => 'Юг',
        ]);
        Region::factory()->create([
            'name' => 'Център',
        ]);
    }
}
