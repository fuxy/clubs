<?php

namespace App\Filament\Resources\DecoratingAgencies;

use App\Filament\Resources\DecoratingAgencies\Pages\CreateDecoratingAgency;
use App\Filament\Resources\DecoratingAgencies\Pages\EditDecoratingAgency;
use App\Filament\Resources\DecoratingAgencies\Pages\ListDecoratingAgencies;
use App\Filament\Resources\DecoratingAgencies\Schemas\DecoratingAgencyForm;
use App\Filament\Resources\DecoratingAgencies\Tables\DecoratingAgenciesTable;
use App\Models\DecoratingAgency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DecoratingAgencyResource extends Resource
{
    protected static ?string $model = DecoratingAgency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedSwatch;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Декораторски агенции';

    protected static ?string $modelLabel = 'Декораторска агенця';

    protected static ?string $pluralModelLabel = 'Декораторски агенции';

    public static function form(Schema $schema): Schema
    {
        return DecoratingAgencyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DecoratingAgenciesTable::configure($table);
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
            'index' => ListDecoratingAgencies::route('/'),
            'create' => CreateDecoratingAgency::route('/create'),
            'edit' => EditDecoratingAgency::route('/{record}/edit'),
        ];
    }
}
