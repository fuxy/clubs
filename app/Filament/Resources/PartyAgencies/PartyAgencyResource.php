<?php

namespace App\Filament\Resources\PartyAgencies;

use App\Filament\Resources\PartyAgencies\Pages\CreatePartyAgency;
use App\Filament\Resources\PartyAgencies\Pages\EditPartyAgency;
use App\Filament\Resources\PartyAgencies\Pages\ListPartyAgencies;
use App\Filament\Resources\PartyAgencies\Schemas\PartyAgencyForm;
use App\Filament\Resources\PartyAgencies\Tables\PartyAgenciesTable;
use App\Models\PartyAgency;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PartyAgencyResource extends Resource
{
    protected static ?string $model = PartyAgency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Парти агенции и аниматори';

    protected static ?string $modelLabel = 'Парти агенця и аниматор';

    protected static ?string $pluralModelLabel = 'Парти агенции и аниматори';

    public static function form(Schema $schema): Schema
    {
        return PartyAgencyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PartyAgenciesTable::configure($table);
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
            'index' => ListPartyAgencies::route('/'),
            'create' => CreatePartyAgency::route('/create'),
            'edit' => EditPartyAgency::route('/{record}/edit'),
        ];
    }
}
