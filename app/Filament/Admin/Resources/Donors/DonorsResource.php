<?php

namespace App\Filament\Admin\Resources\Donors;

use App\Filament\Admin\Resources\Donors\Pages\CreateDonors;
use App\Filament\Admin\Resources\Donors\Pages\EditDonors;
use App\Filament\Admin\Resources\Donors\Pages\ListDonors;
use App\Filament\Admin\Resources\Donors\Schemas\DonorsForm;
use App\Filament\Admin\Resources\Donors\Tables\DonorsTable;
use App\Models\Donors;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DonorsResource extends Resource
{
    protected static ?string $model = Donors::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return DonorsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonorsTable::configure($table);
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
            'index' => ListDonors::route('/'),
            'create' => CreateDonors::route('/create'),
            'edit' => EditDonors::route('/{record}/edit'),
        ];
    }
}
