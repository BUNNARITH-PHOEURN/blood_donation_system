<?php

namespace App\Filament\Resources\DonationRequests\Pages;

use App\Filament\Resources\DonationRequests\DonationRequestsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDonationRequests extends EditRecord
{
    protected static string $resource = DonationRequestsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
