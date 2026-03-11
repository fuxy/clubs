<?php

namespace App\Filament\Resources\EscapeRooms\Pages;

use App\Filament\Resources\EscapeRooms\EscapeRoomResource;
use App\Models\City;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateEscapeRoom extends CreateRecord
{
    protected static string $resource = EscapeRoomResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
