<?php

namespace App\Filament\Resources\DonationRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DonationRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donor.user.name')->label('Donor'),
                TextColumn::make('hospital.name')->label('Hospital'),
                TextColumn::make('requested_date')->date(),
                TextColumn::make('status'),
                TextColumn::make('approver.name')->label('Approved By'),
                TextColumn::make('approved_at')->dateTime(),
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
