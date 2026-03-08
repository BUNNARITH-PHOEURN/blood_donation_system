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

    // Total blood
    $totalBloods = DB::table('blood_bags')->count();

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
    $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    $monthlyDonations = DB::table('donations')
            ->select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(id) as total')
            )
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = [];
        $donations = [];

        foreach ($monthlyDonations as $row) {
            $months[] = date("F", mktime(0, 0, 0, $row->month, 1)); // January, February...
            $donations[] = $row->total;
        }
        
        // Months label
    $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

// Function to get monthly data by blood type
    function getBloodData($type){
        return DB::table('blood_bags')
            ->select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(id) as total')
            )
            ->where('blood_type', $type)
            ->groupBy('month')
            ->pluck('total','month')
            ->toArray();
    }

        // Get data from database
        $a_pos_data = getBloodData('A+');
        $a_neg_data = getBloodData('A-');
        $ab_pos_data = getBloodData('AB+');
        $ab_neg_data = getBloodData('AB-');
        $b_pos_data = getBloodData('B+');
        $b_neg_data = getBloodData('B-');
        $o_pos_data = getBloodData('O+');
        $o_neg_data = getBloodData('O-');

        // Convert to 12-month arrays (fill missing months with 0)
        function fillMonths($data){
            $result = [];
            for($i=1;$i<=12;$i++){
                $result[] = $data[$i] ?? 0;
            }
            return $result;
        }

            $a_pos = fillMonths($a_pos_data);
            $a_neg = fillMonths($a_neg_data);
            $ab_pos = fillMonths($ab_pos_data);
            $ab_neg = fillMonths($ab_neg_data);
            $b_pos = fillMonths($b_pos_data);
            $b_neg = fillMonths($b_neg_data);
            $o_pos = fillMonths($o_pos_data);
            $o_neg = fillMonths($o_neg_data);

        return view('admin.dashboard.dashboard', compact(
            'totalDonors',
            'totalDonations',
            'totalBloods',
            'pendingRequests',
            'bloodStock',
            'months', 
            'donations',
            'a_pos',
            'a_neg',
            'ab_pos',
            'ab_neg',
            'b_pos',
            'b_neg',
            'o_pos',
            'o_neg'));
    }
}
