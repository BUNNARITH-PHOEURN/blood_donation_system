<?php

namespace App\Filament\Resources\Donations;

use App\Filament\Resources\Donations\Pages\CreateDonations;
use App\Filament\Resources\Donations\Pages\EditDonations;
use App\Filament\Resources\Donations\Pages\ListDonations;
use App\Filament\Resources\Donations\Schemas\DonationsForm;
use App\Filament\Resources\Donations\Tables\DonationsTable;
use App\Models\Donations;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DonationsResource extends Resource
{
    protected static ?string $model = Donations::class;

    protected static ?int $navigationSort = 3;
    protected static ?string $navigationLabel = 'Donations';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Heart;

    protected static ?string $recordTitleAttribute = 'Donations';

    public static function form(Schema $schema): Schema
    {
        return DonationsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDonations::route('/'),
            'create' => CreateDonations::route('/create'),
            'edit' => EditDonations::route('/{record}/edit'),
        ];
    }
}
