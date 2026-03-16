<?php

namespace App\Filament\Resources\Pastries\Pages;

use App\Filament\Resources\Pastries\PastryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPastries extends ListRecords
{
    protected static string $resource = PastryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
