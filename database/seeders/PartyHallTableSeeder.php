<?php

namespace Database\Seeders;

use App\Models\PartyHall;
use Illuminate\Database\Seeder;

class PartyHallTableSeeder extends Seeder
{
    public function run(): void
    {
        PartyHall::factory()->count(10)->create();
    }
}
