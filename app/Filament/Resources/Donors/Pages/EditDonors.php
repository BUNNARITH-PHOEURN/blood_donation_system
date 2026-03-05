<?php

namespace App\Filament\Resources\Donors\Pages;

use App\Filament\Resources\Donors\DonorsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDonors extends EditRecord
{
    protected static string $resource = DonorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
