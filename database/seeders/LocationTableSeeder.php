<?php

namespace Database\Seeders;

use App\Models\Club;
use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    public function run(): void
    {
        Location::factory()->create([
            'name' => 'София',
        ]);
        Location::factory()->create([
            'name' => 'Пловдив',
        ]);
        Location::factory()->create([
            'name' => 'Бургас',
        ]);

        $club = Club::find(1);
        $club->location()->attach(1);
    }
}
