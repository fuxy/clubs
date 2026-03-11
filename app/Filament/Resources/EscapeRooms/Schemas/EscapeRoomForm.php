<?php

namespace App\Filament\Resources\EscapeRooms\Schemas;

use App\Models\City;
use App\Models\EscapeRoom;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Tapp\FilamentGoogleAutocomplete\Forms\Components\GoogleAutocomplete;

class EscapeRoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Име')
                    ->required()
                    ->afterStateUpdatedJs(
                        <<< 'JS'
                        function slugify(text) {
                            return text
                                .toString()
                                .normalize ('NFD')
                                .replace(/\u0401/g, 'YO')
                                .replace(/\u0419/g, 'I')
                                .replace(/\u0426/g, 'TS')
                                .replace(/\u0423/g, 'U')
                                .replace(/\u041A/g, 'K')
                                .replace(/\u0415/g, 'E')
                                .replace(/\u041D/g, 'N')
                                .replace(/\u0413/g, 'G')
                                .replace(/\u0428/g, 'SH')
                                .replace(/\u0429/g, 'SCH')
                                .replace(/\u0417/g, 'Z')
                                .replace(/\u0425/g, 'H')
                                .replace(/\u042A/g, '')
                                .replace(/\u0451/g, 'yo')
                                .replace(/\u0439/g, 'i')
                                .replace(/\u0446/g, 'ts')
                                .replace(/\u0443/g, 'u')
                                .replace(/\u043A/g, 'k')
                                .replace(/\u0435/g, 'e')
                                .replace(/\u043D/g, 'n')
                                .replace(/\u0433/g, 'g')
                                .replace(/\u0448/g, 'sh')
                                .replace(/\u0449/g, 'sch')
                                .replace(/\u0437/g, 'z')
                                .replace(/\u0445/g, 'h')
                                .replace(/\u044A/g, "'")
                                .replace(/\u0424/g, 'F')
                                .replace(/\u042B/g, 'I')
                                .replace(/\u0412/g, 'V')
                                .replace(/\u0410/g, 'a')
                                .replace(/\u041F/g, 'P')
                                .replace(/\u0420/g, 'R')
                                .replace(/\u041E/g, 'O')
                                .replace(/\u041B/g, 'L')
                                .replace(/\u0414/g, 'D')
                                .replace(/\u0416/g, 'ZH')
                                .replace(/\u042D/g, 'E')
                                .replace(/\u0444/g, 'f')
                                .replace(/\u044B/g, 'i')
                                .replace(/\u0432/g, 'v')
                                .replace(/\u0430/g, 'a')
                                .replace(/\u043F/g, 'p')
                                .replace(/\u0440/g, 'r')
                                .replace(/\u043E/g, 'o')
                                .replace(/\u043B/g, 'l')
                                .replace(/\u0434/g, 'd')
                                .replace(/\u0436/g, 'zh')
                                .replace(/\u044D/g, 'e')
                                .replace(/\u042F/g, 'Ya')
                                .replace(/\u0427/g, 'CH')
                                .replace(/\u0421/g, 'S')
                                .replace(/\u041C/g, 'M')
                                .replace(/\u0418/g, 'I')
                                .replace(/\u0422/g, 'T')
                                .replace(/\u042C/g, "'")
                                .replace(/\u0411/g, 'B')
                                .replace(/\u042E/g, 'YU')
                                .replace(/\u044F/g, 'ya')
                                .replace(/\u0447/g, 'ch')
                                .replace(/\u0441/g, 's')
                                .replace(/\u043C/g, 'm')
                                .replace(/\u0438/g, 'i')
                                .replace(/\u0442/g, 't')
                                .replace(/\u044C/g, "'")
                                .replace(/\u0431/g, 'b')
                                .replace(/\u044E/g, 'yu')
                                .replace(/[\u0300-\u036f]/g, '')
                                .replace(/[^a-zA-Z0-9\s-]/g, '')
                                .trim()
                                .replace(/\s+/g, '-')
                                .replace (/-+/g, '-')
                                .toLowerCase();
                        }
                        $set('slug', slugify ($state ?? ''));
                        JS
                    )->minLength(2),
                TextInput::make('slug')
                    ->label('Връзка')
                    ->required(),
                RichEditor::make('body')
                    ->label('Описание')
                    ->required()
                    ->columnSpanFull(),
                Section::make('Информация')
                    ->schema([
                        Section::make('Подходяща възраст')
                            ->schema([
                                TextInput::make('age_from')
                                    ->label('От')
                                    ->required()
                                    ->numeric(),
                                TextInput::make('age_to')
                                    ->label('До')
                                    ->required()
                                    ->numeric(),
                            ])
                            ->columns(2),
                        Section::make('Капацитет')
                            ->schema([
                                TextInput::make('capacity_children')
                                    ->label('Деца')
                                    ->required()
                                    ->numeric(),
                                TextInput::make('capacity_adults')
                                    ->label('Възрастни')
                                    ->required()
                                    ->numeric(),
                            ])
                            ->columns(2),
                        TextInput::make('area')
                            ->label('Площ')
                            ->required()
                            ->suffix('кв/м')
                            ->numeric(),
                        Textarea::make('worktime')
                            ->label('Работно време')
                            ->required(),
                        Toggle::make('catering')
                            ->label('Кетъринг')
                            ->required(),
                    ])
                    ->columns(2),
                Section::make('Адрес на обекта')
                    ->schema([
                        GoogleAutocomplete::make('google_search')
                            ->autocompleteLabel('Търсене на адрес')
                            ->autocompletePlaceholder('Кликнете тук за да търсите')
                            ->label('Търсене...')
                            ->placesApiNew()
                            ->language('bg-BG')
                            ->withFields([
                                TextInput::make('address')
                                    ->label('Адрес')
                                    ->extraInputAttributes([
                                        'data-google-field' => '{street_number} {route}, {sublocality_level_1}',
                                    ]),
                                TextInput::make('city')
                                    ->label('Град')
                                    ->afterStateHydrated(function (TextInput $component, ?EscapeRoom $record) {
                                        if (! is_null($record)) {
                                            $city = City::find($record?->city_id);
                                            if ($city) {
                                                $component->state($city->name);
                                            }
                                        }
                                    })
                                    ->extraInputAttributes([
                                        'data-google-field' => 'locality',
                                    ]),
                                Select::make('region_id')
                                    ->relationship('region', 'name')
                                    ->label('Район'),
                                TextInput::make('coordinates')
                                    ->label('Координати')
                                    ->extraInputAttributes([
                                        'data-google-field' => '{latitude}, {longitude}',
                                    ]),
                            ]),
                    ]),
                FileUpload::make('images')
                    ->label('Изображения')
                    ->multiple()
                    ->image()
                    ->reorderable(),
            ]);
    }
}
