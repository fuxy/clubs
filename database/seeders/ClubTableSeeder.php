<?php

namespace Database\Seeders;

use App\Models\Club;
use Illuminate\Database\Seeder;

class ClubTableSeeder extends Seeder
{
    public function run(): void
    {
        Club::factory()->count(10)->create();
    }
}
