<?php

namespace App\Filament\Resources\Pogachas;

use App\Filament\Resources\Pogachas\Pages\CreatePogacha;
use App\Filament\Resources\Pogachas\Pages\EditPogacha;
use App\Filament\Resources\Pogachas\Pages\ListPogachas;
use App\Filament\Resources\Pogachas\Schemas\PogachaForm;
use App\Filament\Resources\Pogachas\Tables\PogachasTable;
use App\Models\Pogacha;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PogachaResource extends Resource
{
    protected static ?string $model = Pogacha::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartPie;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Места за погачи';

    protected static ?string $modelLabel = 'Място за погача';

    protected static ?string $pluralModelLabel = 'Места за погачи';

    public static function form(Schema $schema): Schema
    {
        return PogachaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PogachasTable::configure($table);
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
            'index' => ListPogachas::route('/'),
            'create' => CreatePogacha::route('/create'),
            'edit' => EditPogacha::route('/{record}/edit'),
        ];
    }
}
