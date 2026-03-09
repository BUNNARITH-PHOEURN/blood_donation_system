<?php

namespace App\Filament\Resources\BloodRequests\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BloodRequestsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Select::make('hospital_id')
                    ->relationship('hospital', 'name')
                    ->searchable()
                    ->required()
                    ->default(fn () => filament()->auth()->user()?->hospital_id)
                    ->hidden(fn () => filament()->auth()->user()?->role === 'hospital_staff'),
                Hidden::make('requested_by')
                    ->default(fn () => filament()->auth()->id()),

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

                TextInput::make('units_needed')
                    ->numeric()
                    ->minValue(1)
                    ->required(),

                Select::make('urgency')
                    ->options([
                        'normal' => 'Normal',
                        'urgent' => 'Urgent',
                        'emergency' => 'Emergency',
                    ])
                    ->default('normal')
                    ->required(),

                Select::make('status')
                    ->options([
                        'pending'   => 'Pending',
                        'approved'  => 'Approved',
                        'rejected'  => 'Rejected',
                        'cancelled' => 'Cancelled',
                    ])
                    ->default('pending')
                    ->visible(fn () => filament()->auth()->user()?->role === 'admin'),

                DatePicker::make('request_date')
                    ->default(now())
                    ->required(),
            ]);
    }
}
