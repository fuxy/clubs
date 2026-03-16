<?php

namespace App\Filament\Resources\Restaurants\Pages;

use App\Filament\Resources\Restaurants\RestaurantResource;
use App\Models\City;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateRestaurant extends CreateRecord
{
    protected static string $resource = RestaurantResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
