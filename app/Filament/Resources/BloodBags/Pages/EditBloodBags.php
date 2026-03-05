<?php

namespace App\Filament\Resources\BloodBags\Pages;

use App\Filament\Resources\BloodBags\BloodBagsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBloodBags extends EditRecord
{
    protected static string $resource = BloodBagsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
