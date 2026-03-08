<?php

namespace App\Filament\Widgets;

use App\Models\BloodInventory;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Widget;

class BloodStock extends Widget
{
    protected string $view = 'filament.widgets.blood-stock';

    public function getStats()
    {
        return BloodInventory::all(); // Or customize query
    }
    //protected string $view = 'filament.widgets.blood-stock';
}
