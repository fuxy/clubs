<?php

namespace App\Filament\Resources\Pogachas\Pages;

use App\Filament\Resources\Pogachas\PogachaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPogachas extends ListRecords
{
    protected static string $resource = PogachaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
