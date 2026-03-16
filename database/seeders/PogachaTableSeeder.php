<?php

namespace Database\Seeders;

use App\Models\Pogacha;
use Illuminate\Database\Seeder;

class PogachaTableSeeder extends Seeder
{
    public function run(): void
    {
        Pogacha::factory()->count(10)->create();
    }
}
