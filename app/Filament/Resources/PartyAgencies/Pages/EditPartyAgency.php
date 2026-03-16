<?php

namespace App\Filament\Resources\PartyAgencies\Pages;

use App\Filament\Resources\PartyAgencies\PartyAgencyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPartyAgency extends EditRecord
{
    protected static string $resource = PartyAgencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
