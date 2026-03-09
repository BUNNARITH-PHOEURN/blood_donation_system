<?php

namespace App\Filament\Resources\BloodTests;

use App\Filament\Resources\BloodTests\Pages\CreateBloodTests;
use App\Filament\Resources\BloodTests\Pages\EditBloodTests;
use App\Filament\Resources\BloodTests\Pages\ListBloodTests;
use App\Filament\Resources\BloodTests\Schemas\BloodTestsForm;
use App\Filament\Resources\BloodTests\Tables\BloodTestsTable;
use App\Models\BloodTests;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BloodTestsResource extends Resource
{
    protected static ?string $model = BloodTests::class;

    protected static ?int $navigationSort = 4;
    protected static ?string $navigationLabel = 'Blood Tests';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::ClipboardDocumentList;

    protected static ?string $recordTitleAttribute = 'BloodTests';

    public static function form(Schema $schema): Schema
    {
        return BloodTestsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BloodTestsTable::configure($table);
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
            'index' => ListBloodTests::route('/'),
            //'create' => CreateBloodTests::route('/create'),
            //'edit' => EditBloodTests::route('/{record}/edit'),
        ];
    }
}
