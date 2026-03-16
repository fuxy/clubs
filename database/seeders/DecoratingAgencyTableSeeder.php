<?php

namespace Database\Seeders;

use App\Models\DecoratingAgency;
use Illuminate\Database\Seeder;

class DecoratingAgencyTableSeeder extends Seeder
{
    public function run(): void
    {
        DecoratingAgency::factory()->count(10)->create();
    }
}
