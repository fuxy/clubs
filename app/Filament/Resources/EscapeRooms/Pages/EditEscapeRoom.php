<?php

namespace App\Filament\Resources\EscapeRooms\Pages;

use App\Filament\Resources\EscapeRooms\EscapeRoomResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEscapeRoom extends EditRecord
{
    protected static string $resource = EscapeRoomResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
