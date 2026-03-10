<?php

namespace App\Filament\Resources\PartyHalls\Pages;

use App\Filament\Resources\PartyHalls\PartyHallResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartyHalls extends ListRecords
{
    protected static string $resource = PartyHallResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
