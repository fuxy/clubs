<?php

namespace App\Filament\Resources\EscapeRooms\Pages;

use App\Filament\Resources\EscapeRooms\EscapeRoomResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEscapeRooms extends ListRecords
{
    protected static string $resource = EscapeRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
