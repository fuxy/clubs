<?php

namespace App\Filament\Resources\EscapeRooms;

use App\Filament\Resources\EscapeRooms\Pages\CreateEscapeRoom;
use App\Filament\Resources\EscapeRooms\Pages\EditEscapeRoom;
use App\Filament\Resources\EscapeRooms\Pages\ListEscapeRooms;
use App\Filament\Resources\EscapeRooms\Schemas\EscapeRoomForm;
use App\Filament\Resources\EscapeRooms\Tables\EscapeRoomsTable;
use App\Models\EscapeRoom;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EscapeRoomResource extends Resource
{
    protected static ?string $model = EscapeRoom::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArrowTopRightOnSquare;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Ескейп стаи';

    protected static ?string $modelLabel = 'Ескейп стая';

    protected static ?string $pluralModelLabel = 'Ескейп стаи';

    public static function form(Schema $schema): Schema
    {
        return EscapeRoomForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EscapeRoomsTable::configure($table);
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
            'index' => ListEscapeRooms::route('/'),
            'create' => CreateEscapeRoom::route('/create'),
            'edit' => EditEscapeRoom::route('/{record}/edit'),
        ];
    }
}
