<?php

namespace App\Filament\Resources\Pastries;

use App\Filament\Resources\Pastries\Pages\CreatePastry;
use App\Filament\Resources\Pastries\Pages\EditPastry;
use App\Filament\Resources\Pastries\Pages\ListPastries;
use App\Filament\Resources\Pastries\Schemas\PastryForm;
use App\Filament\Resources\Pastries\Tables\PastriesTable;
use App\Models\Pastry;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PastryResource extends Resource
{
    protected static ?string $model = Pastry::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Сладкарници';

    protected static ?string $modelLabel = 'Сладкарница';

    protected static ?string $pluralModelLabel = 'Сладкарници';

    public static function form(Schema $schema): Schema
    {
        return PastryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PastriesTable::configure($table);
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
            'index' => ListPastries::route('/'),
            'create' => CreatePastry::route('/create'),
            'edit' => EditPastry::route('/{record}/edit'),
        ];
    }
}
