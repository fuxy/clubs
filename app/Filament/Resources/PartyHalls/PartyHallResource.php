<?php

namespace App\Filament\Resources\PartyHalls;

use App\Filament\Resources\PartyHalls\Pages\CreatePartyHall;
use App\Filament\Resources\PartyHalls\Pages\EditPartyHall;
use App\Filament\Resources\PartyHalls\Pages\ListPartyHalls;
use App\Filament\Resources\PartyHalls\Schemas\PartyHallForm;
use App\Filament\Resources\PartyHalls\Tables\PartyHallsTable;
use App\Models\PartyHall;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PartyHallResource extends Resource
{
    protected static ?string $model = PartyHall::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCake;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Парти зали';

    protected static ?string $modelLabel = 'Парти зала';

    protected static ?string $pluralModelLabel = 'Парти зали';

    public static function form(Schema $schema): Schema
    {
        return PartyHallForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartyHallsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPartyHalls::route('/'),
            'create' => CreatePartyHall::route('/create'),
            'edit' => EditPartyHall::route('/{record}/edit'),
        ];
    }
}
