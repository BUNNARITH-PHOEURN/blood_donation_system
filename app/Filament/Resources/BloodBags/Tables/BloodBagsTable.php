<?php

namespace App\Filament\Resources\BloodBags\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BloodBagsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bag_code')
                ->searchable(),

                TextColumn::make('donation.donor.user.name')
                ->label('Donor'),

                TextColumn::make('blood_type')
                ->badge()
                ->color('danger'),

                TextColumn::make('expiration_date')
                ->date(),

                TextColumn::make('status')
                ->colors([
                    'success' => 'available',
                    'warning' => 'reserved',
                    'danger' => 'expired',
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
