<?php

namespace App\Filament\Resources\BloodInventories;

use App\Filament\Resources\BloodInventories\Pages\CreateBloodInventory;
use App\Filament\Resources\BloodInventories\Pages\EditBloodInventory;
use App\Filament\Resources\BloodInventories\Pages\ListBloodInventories;
use App\Filament\Resources\BloodInventories\Schemas\BloodInventoryForm;
use App\Filament\Resources\BloodInventories\Tables\BloodInventoriesTable;
use App\Models\BloodInventory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BloodInventoryResource extends Resource
{
    protected static ?string $model = BloodInventory::class;

    protected static ?int $navigationSort = 5;
    protected static ?string $navigationLabel = 'Blood Inventory';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::InboxArrowDown;

    protected static ?string $recordTitleAttribute = 'BloodInventory';

    public static function form(Schema $schema): Schema
    {
        return BloodInventoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BloodInventoriesTable::configure($table);
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
            'index' => ListBloodInventories::route('/'),
            'create' => CreateBloodInventory::route('/create'),
            'edit' => EditBloodInventory::route('/{record}/edit'),
        ];
    }
}
