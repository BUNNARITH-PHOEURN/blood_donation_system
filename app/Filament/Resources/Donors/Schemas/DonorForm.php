<?php

namespace App\Filament\Resources\Donors\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DonorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Select::make('blood_type')
                    ->options([
            'A+' => 'A+',
            'A-' => 'A ',
            'B+' => 'B+',
            'B-' => 'B ',
            'AB+' => 'A b+',
            'AB-' => 'A b ',
            'O+' => 'O+',
            'O-' => 'O ',
        ])
                    ->required(),
                Select::make('gender')
                    ->options(['M' => 'M', 'F' => 'F'])
                    ->required(),
                DatePicker::make('DOB')
                    ->required(),
                TextInput::make('weight')
                    ->required()
                    ->numeric(),
            ]);
    }
}
