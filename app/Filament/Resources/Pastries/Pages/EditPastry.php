<?php

namespace App\Filament\Resources\Pastries\Pages;

use App\Filament\Resources\Pastries\PastryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPastry extends EditRecord
{
    protected static string $resource = PastryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
