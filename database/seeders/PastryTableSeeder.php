<?php

namespace Database\Seeders;

use App\Models\Pastry;
use Illuminate\Database\Seeder;

class PastryTableSeeder extends Seeder
{
    public function run(): void
    {
        Pastry::factory()->count(10)->create();
    }
}
