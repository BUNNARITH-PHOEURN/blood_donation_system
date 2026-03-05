<?php

namespace App\Filament\Resources\BloodInventories\Pages;

use App\Filament\Resources\BloodInventories\BloodInventoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBloodInventories extends ListRecords
{
    protected static string $resource = BloodInventoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
