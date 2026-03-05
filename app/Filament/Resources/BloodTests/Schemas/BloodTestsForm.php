<?php

namespace App\Filament\Resources\BloodTests\Schemas;

use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class BloodTestsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('blood_bag_id')
                ->relationship('bloodBag', 'bag_code')
                ->searchable()
                ->required(),

            Select::make('hiv_result')
                ->options(['positive'=>'Positive','negative'=>'Negative'])
                ->required(),

            Select::make('hepatitis_b_result')
                ->options(['positive'=>'Positive','negative'=>'Negative'])
                ->required(),

            Select::make('hepatitis_c_result')
                ->options(['positive'=>'Positive','negative'=>'Negative'])
                ->required(),

            Select::make('syphilis_result')
                ->options(['positive'=>'Positive','negative'=>'Negative'])
                ->required(),

            Select::make('malaria_result')
                ->options(['positive'=>'Positive','negative'=>'Negative'])
                ->required(),

            Select::make('overall_status')
                ->options([
                    'pending'=>'Pending',
                    'passed'=>'Passed',
                    'failed'=>'Failed',
                ])
                ->default('pending')
                ->required(),

            ]);
    }
}
