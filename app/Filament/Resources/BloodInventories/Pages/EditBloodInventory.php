<?php

namespace App\Filament\Resources\BloodInventories\Pages;

use App\Filament\Resources\BloodInventories\BloodInventoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBloodInventory extends EditRecord
{
    protected static string $resource = BloodInventoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
