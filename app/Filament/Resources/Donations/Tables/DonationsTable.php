<?php

namespace App\Filament\Resources\Donations\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DonationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donor.user.name')
                ->label('Donor'),

                TextColumn::make('hospital.name')
                ->label('Hospital'),

                TextColumn::make('screening.screening_date')
                ->label('Screening Date')
                ->date(),

                TextColumn::make('donation_date')
                ->date(),

                TextColumn::make('status')
                ->colors([
                    'warning' => 'pending',
                    'success' => 'completed',
                    'danger' => 'cancelled',
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
