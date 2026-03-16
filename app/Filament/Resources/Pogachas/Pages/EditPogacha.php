<?php

namespace App\Filament\Resources\Pogachas\Pages;

use App\Filament\Resources\Pogachas\PogachaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPogacha extends EditRecord
{
    protected static string $resource = PogachaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
