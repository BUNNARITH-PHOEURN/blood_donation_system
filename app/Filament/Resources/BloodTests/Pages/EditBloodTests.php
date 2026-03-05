<?php

namespace App\Filament\Resources\BloodTests\Pages;

use App\Filament\Resources\BloodTests\BloodTestsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBloodTests extends EditRecord
{
    protected static string $resource = BloodTestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
