<?php

namespace App\Filament\Resources\BloodInventories\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BloodInventoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                 Select::make('hospital_id')
                            ->relationship('hospital', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('blood_type')
                            ->options([
                                'A+' => 'A+',
                                'A-' => 'A-',
                                'B+' => 'B+',
                                'B-' => 'B-',
                                'AB+' => 'AB+',
                                'AB-' => 'AB-',
                                'O+' => 'O+',
                                'O-' => 'O-',
                            ])
                            ->required(),

                        TextInput::make('units_available')
                            ->numeric()
                            ->default(0)
                            ->required(),

                        DateTimePicker::make('last_updated')
                            ->label('Last Updated')
                            ->nullable(),
            ]);
    }
}
