<?php

namespace App\Filament\Resources\DonationRequests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class DonationRequestsForm
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
                // ->relationship('donor', 'name.user')
                // ->searchable()
                // ->required(),

            // Select::make('hospital_id')
            //     ->relationship('hospital', 'name')
            //     ->searchable()
            //     ->required(),
            Select::make('hospital_id')
                ->relationship('hospital', 'name')
                ->nullable()
                ->searchable()
                ->required(),

            DatePicker::make('requested_date')
                ->required(),

            Select::make('status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                    'rejected' => 'Rejected',
                    'cancelled' => 'Cancelled',
                ])
                ->default('pending')
                ->required(),
            ]);
    }
}
