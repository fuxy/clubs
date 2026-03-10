<?php

namespace App\Filament\Resources\PartyHalls\Pages;

use App\Filament\Resources\PartyHalls\PartyHallResource;
use App\Models\City;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreatePartyHall extends CreateRecord
{
    protected static string $resource = PartyHallResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
