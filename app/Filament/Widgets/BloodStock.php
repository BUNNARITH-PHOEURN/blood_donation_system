<?php

namespace App\Filament\Widgets;

use App\Models\BloodInventory;
use App\Models\BloodRequests;
use App\Models\Donations;
use App\Models\User;
use Filament\Widgets\Widget;

class BloodStock extends Widget
{
    protected string $view = 'filament.widgets.blood-stock';
    protected array|string|int $columnSpan = 'full';
    public function bloodStock()
    {
        return BloodInventory::all();
    }

    // Return total donors count
    public function donors(): int
    {
        return User::where('role', 'donor')->count();
    }

    // Return total donations count
    public function donations(): int
    {
        return Donations::count();
    }

    // Return sum of available blood units
    public function availableBlood(): int
    {
        return BloodInventory::sum('units_available');
    }

    // Return pending requests count
    public function pendingRequests(): int
    {
        return BloodRequests::where('status', 'pending')->count();
    }
}
