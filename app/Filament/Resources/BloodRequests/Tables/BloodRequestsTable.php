<?php

namespace App\Filament\Resources\BloodRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BloodRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('requester.name')
                ->label(label: 'Request By'),

                TextColumn::make('hospital.name')
                ->label('Hospital'),

                TextColumn::make('blood_type')
                ->badge()
                ->color('danger'),

                TextColumn::make('units_needed')
                ->label('Units Needed'),

                TextColumn::make('urgency')
                ->colors([
                    'danger' => 'high',
                    'warning' => 'medium',
                    'success' => 'low',
                ]),

                TextColumn::make('status')
                ->colors([
                    'warning' => 'pending',
                    'success' => 'approved',
                    'danger' => 'rejected',
                ]),

                TextColumn::make('request_date')
                ->date(),
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
