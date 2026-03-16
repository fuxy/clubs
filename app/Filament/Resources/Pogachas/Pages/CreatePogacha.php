<?php

namespace App\Filament\Resources\Pogachas\Pages;

use App\Filament\Resources\Pogachas\PogachaResource;
use App\Models\City;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreatePogacha extends CreateRecord
{
    protected static string $resource = PogachaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
