<?php

namespace App\Filament\Resources\PartyHalls\Pages;

use App\Filament\Resources\PartyHalls\PartyHallResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPartyHall extends EditRecord
{
    protected static string $resource = PartyHallResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
