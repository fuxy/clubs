<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EscapeRoomFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'slug' => fake()->unique()->slug(),
            'user_id' => 1,
            'city_id' => fake()->numberBetween(1, 3),
            'region_id' => fake()->numberBetween(1, 6),
            'body' => fake()->sentences(fake()->numberBetween(2, 15), true),
            'area' => fake()->numberBetween(60, 150),
            'age_from' => 3,
            'age_to' => 15,
            'capacity_children' => fake()->numberBetween(15, 30),
            'capacity_adults' => fake()->numberBetween(15, 30),
            'worktime' => 'Понеделник - Неделя\n09:30 ч. - 21:00 ч.',
            'catering' => fake()->boolean(),
            'address' => fake()->address(),
            'coordinates' => '42.7042801, 23.3053544',
            'created_at' => fake()->dateTimeBetween('-2 day'),
            'updated_at' => fake()->dateTimeBetween('-2 day'),
        ];
    }
}
