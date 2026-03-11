<?php

namespace Database\Seeders;

use App\Models\EscapeRoom;
use Illuminate\Database\Seeder;

class EscapeRoomTableSeeder extends Seeder
{
    public function run(): void
    {
        EscapeRoom::factory()->count(10)->create();
    }
}
