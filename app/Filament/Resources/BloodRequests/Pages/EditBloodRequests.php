<?php

namespace App\Filament\Resources\BloodRequests\Pages;

use App\Filament\Resources\BloodRequests\BloodRequestsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBloodRequests extends EditRecord
{
    protected static string $resource = BloodRequestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
