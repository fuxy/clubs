<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call(UserTableSeeder::class);
        $this->call(RegionTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(ClubTableSeeder::class);
        $this->call(PartyHallTableSeeder::class);
        $this->call(EscapeRoomTableSeeder::class);
        $this->call(PogachaTableSeeder::class);
        $this->call(RestaurantTableSeeder::class);
    }
}
