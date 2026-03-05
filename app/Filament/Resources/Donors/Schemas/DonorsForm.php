<?php

namespace App\Filament\Resources\Donors\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class DonorsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                ->relationship(
                    name: 'user',
                    titleAttribute: 'name',
                )
                ->required()
                ->searchable(),

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
                ->nullable(),

            DatePicker::make('date_of_birth')
                ->required(),

            Select::make('gender')
                ->options([
                    'male' => 'Male',
                    'female' => 'Female',
                    'other' => 'Other',
                ])
                ->required(),

            Toggle::make('is_profile_completed')
                ->default(false),

            Select::make('created_by')
                ->relationship('creator', 'name')
                ->nullable()
                ->searchable(),

        ])
        ->columns(2);
    }
}
