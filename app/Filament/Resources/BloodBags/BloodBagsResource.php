<?php

namespace App\Filament\Resources\BloodBags;

use App\Filament\Resources\BloodBags\Pages\CreateBloodBags;
use App\Filament\Resources\BloodBags\Pages\EditBloodBags;
use App\Filament\Resources\BloodBags\Pages\ListBloodBags;
use App\Filament\Resources\BloodBags\Schemas\BloodBagsForm;
use App\Filament\Resources\BloodBags\Tables\BloodBagsTable;
use App\Models\BloodBags;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BloodBagsResource extends Resource
{
    protected static ?string $model = BloodBags::class;

    protected static ?int $navigationSort = 4;
    protected static ?string $navigationLabel = 'Blood Bags';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::Cube;

    protected static ?string $recordTitleAttribute = 'BloodBags';

    public static function form(Schema $schema): Schema
    {
        return BloodBagsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BloodBagsTable::configure($table);
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
            'index' => ListBloodBags::route('/'),
            //'create' => CreateBloodBags::route('/create'),
            //'edit' => EditBloodBags::route('/{record}/edit'),
        ];
    }
}
