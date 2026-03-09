<?php

namespace App\Filament\Resources\DonoresScreenings\Pages;

use App\Filament\Resources\DonoresScreenings\DonoresScreeningResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDonoresScreening extends EditRecord
{
    protected static string $resource = DonoresScreeningResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
