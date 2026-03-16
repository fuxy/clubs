<?php

namespace App\Filament\Resources\DecoratingAgencies\Pages;

use App\Filament\Resources\DecoratingAgencies\DecoratingAgencyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDecoratingAgency extends EditRecord
{
    protected static string $resource = DecoratingAgencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
