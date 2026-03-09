<?php

namespace App\Filament\Resources\DonoresScreenings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DonoresScreeningsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donor.user.name')
                ->label('Donor'),

                TextColumn::make('screening_date')
                ->date(),

                TextColumn::make('weight')
                ->suffix(' kg'),

                TextColumn::make('blood_pressure'),

                TextColumn::make('hemoglobin_level'),

                TextColumn::make('eligibility_status')
                ->colors([
                    'success' => 'eligible',
                    'danger' => 'not_eligible',
                ]),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
