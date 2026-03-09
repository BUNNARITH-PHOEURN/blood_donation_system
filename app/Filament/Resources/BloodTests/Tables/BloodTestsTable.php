<?php

namespace App\Filament\Resources\BloodTests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BloodTestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('bloodBag.bag_code')
                ->label('Bag Code'),

                TextColumn::make('overall_status')
                ->badge()
                ->color(fn ($state) => $state === 'safe' ? 'success' : 'danger'),

                TextColumn::make('tester.name')
                ->label('Tested By'),

                TextColumn::make('tested_at')
                ->date()
                ->label('Test Date')
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
