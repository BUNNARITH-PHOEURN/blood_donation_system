<?php

namespace App\Filament\Resources\BloodBags\Pages;

use App\Filament\Resources\BloodBags\BloodBagsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBloodBags extends ListRecords
{
    protected static string $resource = BloodBagsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
