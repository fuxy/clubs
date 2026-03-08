<?php

namespace App\Filament\Resources\Clubs\Pages;

use App\Filament\Resources\Clubs\ClubResource;
use App\Models\City;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Auth;

class EditClub extends EditRecord
{
    protected static string $resource = ClubResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $city = City::firstOrCreate(['name' => $data['city']]);
        $data['city_id'] = $city->id;
        $data['user_id'] = Auth::id();
        unset($data['city']);

        return $data;
    }
}
