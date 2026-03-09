<?php

namespace App\Filament\Resources\DonoresScreenings\Pages;

use App\Filament\Resources\DonoresScreenings\DonoresScreeningResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDonoresScreenings extends ListRecords
{
    protected static string $resource = DonoresScreeningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
