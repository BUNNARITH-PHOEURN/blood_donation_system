<?php

namespace App\Filament\Resources\DonoresScreenings;

use App\Filament\Resources\DonoresScreenings\Pages\CreateDonoresScreening;
use App\Filament\Resources\DonoresScreenings\Pages\EditDonoresScreening;
use App\Filament\Resources\DonoresScreenings\Pages\ListDonoresScreenings;
use App\Filament\Resources\DonoresScreenings\Schemas\DonoresScreeningForm;
use App\Filament\Resources\DonoresScreenings\Tables\DonoresScreeningsTable;
use App\Models\DonoresScreening;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DonoresScreeningResource extends Resource
{
    protected static ?string $model = DonoresScreening::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::ClipboardDocumentCheck;

    protected static ?string $recordTitleAttribute = 'DonorsScreening';

    public static function form(Schema $schema): Schema
    {
        return DonoresScreeningForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonoresScreeningsTable::configure($table);
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
            'index' => ListDonoresScreenings::route('/'),
            'create' => CreateDonoresScreening::route('/create'),
            'edit' => EditDonoresScreening::route('/{record}/edit'),
        ];
    }
}
