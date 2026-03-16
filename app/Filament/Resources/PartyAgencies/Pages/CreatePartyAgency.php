<?php

namespace App\Filament\Resources\PartyAgencies\Pages;

use App\Filament\Resources\PartyAgencies\PartyAgencyResource;
use App\Models\City;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreatePartyAgency extends CreateRecord
{
    protected static string $resource = PartyAgencyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
