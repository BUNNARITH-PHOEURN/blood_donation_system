<?php

namespace App\Filament\Resources\DonationRequests;

use App\Filament\Resources\DonationRequests\Pages\CreateDonationRequests;
use App\Filament\Resources\DonationRequests\Pages\EditDonationRequests;
use App\Filament\Resources\DonationRequests\Pages\ListDonationRequests;
use App\Filament\Resources\DonationRequests\Schemas\DonationRequestsForm;
use App\Filament\Resources\DonationRequests\Tables\DonationRequestsTable;
use App\Models\DonationRequests;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DonationRequestsResource extends Resource
{
    protected static ?string $model = DonationRequests::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::HandRaised;

    protected static ?string $recordTitleAttribute = 'DonationRequests';

    public static function form(Schema $schema): Schema
    {
        return DonationRequestsForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DonationRequestsTable::configure($table);
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
            'index' => ListDonationRequests::route('/'),
            'create' => CreateDonationRequests::route('/create'),
            'edit' => EditDonationRequests::route('/{record}/edit'),
        ];
    }
}
