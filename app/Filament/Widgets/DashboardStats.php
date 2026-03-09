<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\BloodInventories\Tables\BloodInventoriesTable;
use App\Models\BloodInventory;
use App\Models\BloodRequests;
use App\Models\Donations;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends StatsOverviewWidget
{
    // protected function getStats(): array
    // {

    //     return [
    //         Stat::make('Total Donors', User::where('role','donor')->count())
    //             ->description('Registered blood donors')
    //             ->icon('heroicon-o-users')
    //             ->color('success')
    //             ->chart([2, 5, 7, 10, 12, 15, 18]),

    //         Stat::make('Total Donations', Donations::count())
    //             ->description('Blood donated successfully')
    //             ->icon('heroicon-o-heart')
    //             ->color('danger')
    //             ->chart([1, 3, 4, 6, 8, 10, 13]),
    //         Stat::make('Available Blood Units', BloodInventory::sum('units_available'))
    //             ->description('Blood units available')
    //             ->icon('heroicon-o-cube')
    //             ->color('success')
    //             ->chart([10, 9, 8, 12, 11, 13, 15]),
    //         Stat::make('Pending Requests', BloodRequests::where('status','pending')->count())
    //             ->description('Waiting approval')
    //             ->icon('heroicon-o-document-text')
    //             ->color('warning')
    //             ->chart([5, 4, 6, 7, 6, 8, 9]),
    //     ];
    // }
}
