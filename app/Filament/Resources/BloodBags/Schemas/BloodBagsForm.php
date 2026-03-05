<?php

namespace App\Filament\Resources\BloodBags\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class BloodBagsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('donation_id')
                ->relationship('donation', 'id')
                ->searchable()
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

            DatePicker::make('expiration_date')
                ->required(),

            Select::make('status')
                ->options([
                    'testing' => 'Testing',
                    'available' => 'Available',
                    'used' => 'Used',
                    'discarded' => 'Discarded',
                ])
                ->default('testing')
                ->required(),
            ]);
    }
}
