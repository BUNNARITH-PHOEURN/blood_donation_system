<?php

namespace App\Filament\Resources\Donors\Pages;

use App\Filament\Resources\Donors\DonorsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDonors extends ListRecords
{
    protected static string $resource = DonorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
