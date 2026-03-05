<?php

namespace App\Filament\Resources\Donations\Pages;

use App\Filament\Resources\Donations\DonationsResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDonations extends EditRecord
{
    protected static string $resource = DonationsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
