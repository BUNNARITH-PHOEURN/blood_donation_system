<?php

namespace App\Filament\Resources\BloodInventories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BloodInventoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hospital.name')
                ->label('Hospital'),

                TextColumn::make('blood_type')
                ->badge()
                ->color('danger'),

                TextColumn::make('units_available')
                ->label('Units'),

                TextColumn::make('last_updated')
                ->dateTime(),
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
