<?php

namespace App\Filament\Resources\BloodTests\Pages;

use App\Filament\Resources\BloodTests\BloodTestsResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListBloodTests extends ListRecords
{
    protected static string $resource = BloodTestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
