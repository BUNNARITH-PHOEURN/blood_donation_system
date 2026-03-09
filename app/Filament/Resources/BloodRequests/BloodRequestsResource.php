<?php

namespace App\Filament\Resources\BloodRequests;

use App\Filament\Resources\BloodRequests\Pages\CreateBloodRequests;
use App\Filament\Resources\BloodRequests\Pages\EditBloodRequests;
use App\Filament\Resources\BloodRequests\Pages\ListBloodRequests;
use App\Filament\Resources\BloodRequests\Schemas\BloodRequestsForm;
use App\Filament\Resources\BloodRequests\Tables\BloodRequestsTable;
use App\Models\BloodRequests;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BloodRequestsResource extends Resource
{
    protected static ?string $model = BloodRequests::class;

    protected static ?int $navigationSort = 6;
    protected static ?string $navigationLabel = 'Blood Request';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::HandRaised;

    protected static ?string $recordTitleAttribute = 'BloodRequest';

    public static function form(Schema $schema): Schema
    {
        return BloodRequestsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BloodRequestsTable::configure($table);
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
            'index' => ListBloodRequests::route('/'),
            //'create' => CreateBloodRequests::route('/create'),
            //'edit' => EditBloodRequests::route('/{record}/edit'),
        ];
    }
}
