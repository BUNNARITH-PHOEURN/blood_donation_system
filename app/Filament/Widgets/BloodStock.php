<?php

namespace App\Filament\Widgets;

use App\Models\BloodInventory;
use Filament\Widgets\Widget;

class BloodStock extends Widget
{
    protected string $view = 'filament.widgets.blood-stock';
    public function getStart()
    {
        return BloodInventory::all();
    }
}
