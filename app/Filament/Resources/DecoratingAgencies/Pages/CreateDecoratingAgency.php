<?php

namespace App\Filament\Resources\DecoratingAgencies\Pages;

use App\Filament\Resources\DecoratingAgencies\DecoratingAgencyResource;
use App\Models\City;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateDecoratingAgency extends CreateRecord
{
    protected static string $resource = DecoratingAgencyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
