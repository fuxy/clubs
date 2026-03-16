<?php

namespace App\Filament\Resources\DecoratingAgencies\Pages;

use App\Filament\Resources\DecoratingAgencies\DecoratingAgencyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDecoratingAgencies extends ListRecords
{
    protected static string $resource = DecoratingAgencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
