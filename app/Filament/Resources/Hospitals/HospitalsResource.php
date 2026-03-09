<?php

namespace App\Filament\Resources\Hospitals;

use App\Filament\Resources\Hospitals\Pages\CreateHospitals;
use App\Filament\Resources\Hospitals\Pages\EditHospitals;
use App\Filament\Resources\Hospitals\Pages\ListHospitals;
use App\Filament\Resources\Hospitals\Schemas\HospitalsForm;
use App\Filament\Resources\Hospitals\Tables\HospitalsTable;
use App\Models\Hospitals;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HospitalsResource extends Resource
{
    protected static ?string $model = Hospitals::class;
    protected static ?int $navigationSort = 8;
    protected static ?string $navigationLabel = 'Hospital Management';
    protected static string|BackedEnum|null $navigationIcon = Heroicon::BuildingOffice2

;

    protected static ?string $recordTitleAttribute = 'Hospitals';

    public static function form(Schema $schema): Schema
    {
        return HospitalsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HospitalsTable::configure($table);
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
            'index' => ListHospitals::route('/'),
            //'create' => CreateHospitals::route('/create'),
            //'edit' => EditHospitals::route('/{record}/edit'),
        ];
    }
}
