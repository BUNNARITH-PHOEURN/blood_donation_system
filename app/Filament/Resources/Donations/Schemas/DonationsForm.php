<?php

namespace App\Filament\Resources\Donations\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class DonationsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('donor_id')
                    ->label('Select Donor')
                    ->relationship('donor', 'name')
                    ->searchable()
                    ->required(),

                Select::make('hospital_id')
                    ->label('Hospital / Center')
                    ->relationship('hospital', 'name')
                    ->searchable()
                    ->required(),

                DatePicker::make('donation_date')
                    ->required(),

                TimePicker::make('preferred_time')
                    ->required(),
            ]);
    }
}