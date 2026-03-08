<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function request () {
        // Blood types
        $bloodTypes = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
        $bloodStock = [];

        foreach ($bloodTypes as $type) {

            $units = DB::table('blood_bags')
                ->where('blood_type', $type)
                ->count(); // use count() if you don't store units

            // Determine status
            if ($units >= 50) {
                $status = "Available";
                $color = "success";
            } elseif ($units >= 10) {
                $status = "Limited";
                $color = "warning";
            } else {
                $status = "Critical";
                $color = "danger";
            }

            $bloodStock[] = [
                'type' => $type,
                'units' => $units,
                'status' => $status,
                'color' => $color
            ];
        }

        return view('web.blood-request', compact('bloodStock'));
    }

    public function home () {
        $donors = DB::table('donors')->count();

        $bloodUnits = DB::table('blood_bags')->count();

        return view('web.home', compact('donors', 'bloodUnits'));
    }
}
