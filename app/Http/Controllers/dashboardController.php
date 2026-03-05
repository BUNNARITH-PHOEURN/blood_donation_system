<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
{
    // Total donors
    $totalDonors = DB::table('donors')->count();

    // Total donations
    $totalDonations = DB::table('donations')->count();

    // Pending requests
    $pendingRequests = DB::table('blood_requests')->where('status', 'pending')->count();

    // Blood stock by type (calculated from donations)
    $bloodTypes = ['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-'];
    $bloodStock = [];
    foreach ($bloodTypes as $type) {
        $bloodStock[$type] = DB::table('blood_bags')
            ->where('blood_type', $type)
            ->count(); // Or sum('units') if you store units
    }

    return view('admin.dashboard.dashboard', compact(
        'totalDonors',
        'totalDonations',
        'pendingRequests',
        'bloodStock'
    ));
}
}
