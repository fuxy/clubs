<?php

namespace App\Filament\Resources\Clubs\Pages;

use App\Filament\Resources\Clubs\ClubResource;
use App\Models\City;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateClub extends CreateRecord
{
    protected static string $resource = ClubResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
