<?php

namespace Database\Seeders;

use App\Models\PartyAgency;
use Illuminate\Database\Seeder;

class PartyAgencyTableSeeder extends Seeder
{
    public function run(): void
    {
        PartyAgency::factory()->count(10)->create();
    }
}
