<?php

namespace App\Filament\Resources\PartyAgencies\Pages;

use App\Filament\Resources\PartyAgencies\PartyAgencyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPartyAgencies extends ListRecords
{
    protected static string $resource = PartyAgencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
