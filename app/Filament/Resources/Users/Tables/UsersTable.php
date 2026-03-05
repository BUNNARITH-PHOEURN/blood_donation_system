<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                ->searchable()
                ->sortable(),

                TextColumn::make('email')
                ->searchable(),

                TextColumn::make('role')
                ->badge()
                ->color(fn ($state) => match ($state) {
                    'admin' => 'danger',
                    'hospital_staff' => 'warning',
                    'donor' => 'success',
                    default => 'gray',
                }),

                TextColumn::make('hospital.name')
                ->label('Hospital')
                ->sortable(),

                TextColumn::make('phone'),

                TextColumn::make('created_at')
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
