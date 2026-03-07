<?php

namespace App\Filament\Resources\Donors\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DonorsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('User')
                ->searchable(query: function($query, $search){
                    $query->whereHas('user', function($q) use($search){
                        $q->where('name','like',"%{search}%");
                    });
                })->sortable(),
                        
                TextColumn::make('blood_type'),
                TextColumn::make('date_of_birth')->date(),
                TextColumn::make('gender'),
                IconColumn::make('is_profile_completed')
                ->boolean(),
                TextColumn::make('creator.name')->label('Created By')->sortable(),
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
