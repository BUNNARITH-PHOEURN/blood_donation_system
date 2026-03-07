<?php

namespace App\Filament\Resources\DonoresScreenings\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DonoresScreeningForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                    // Donor selection
                    Select::make('donor_id')
                        ->label('Donor')
                        ->options(
                            \App\Models\Donors::with('user')
                                ->get()
                                ->pluck('user.name', 'id')
                        )
                        ->searchable()
                        ->required(),

                    // Screening date
                    DatePicker::make('screening_date')
                        ->required()
                        ->label('Screening Date'),

                    // Weight
                    TextInput::make('weight')
                        ->numeric()
                        ->placeholder('Enter weight in kg')
                        ->nullable(),

                    // Blood Pressure
                    TextInput::make('blood_pressure')
                        ->placeholder('e.g. 120/80')
                        ->nullable(),

                    // Hemoglobin Level
                    TextInput::make('hemoglobin_level')
                        ->numeric()
                        ->placeholder('Enter hemoglobin level g/dL')
                        ->nullable(),

                    // Eligibility Status
                    Select::make('eligibility_status')
                        ->options([
                            'eligible' => 'Eligible',
                            'not_eligible' => 'Not Eligible',
                        ])
                        ->required(),

                    // Notes
                    Textarea::make('notes')
                        ->rows(3)
                        ->placeholder('Additional notes...')
                        ->nullable(),
                
            ])->columns(2);
    }
}
