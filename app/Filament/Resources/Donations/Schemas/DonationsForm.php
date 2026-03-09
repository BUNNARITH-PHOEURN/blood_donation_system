<?php

namespace App\Filament\Resources\Donations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class DonationsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('donor_id')
                ->relationship('donor', 'id')
                ->getOptionLabelFromRecordUsing(fn ($record) => $record->user->name)
                ->searchable()
                ->preload()
                ->required(),
                Select::make('hospital_id')
                    ->relationship('hospital', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),

                Select::make('screening_id')
                    ->relationship('screening', 'id')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                DatePicker::make('donation_date')
                    ->required(),

                Select::make('status')
                    ->options([
                        'scheduled' => 'Scheduled',
                        'completed' => 'Completed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('scheduled')
                    ->required(),
            ]);
    }
}
