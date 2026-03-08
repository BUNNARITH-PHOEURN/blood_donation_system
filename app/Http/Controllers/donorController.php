<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Donor; 
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use Illuminate\Http\Request;

class donorController extends Controller
{
        public function donorList(){

        $donors = DB::table('donors')
            ->join('users', 'donors.user_id', '=', 'users.id')
            ->select('donors.*', 'users.name')
            ->orderBy('id')
            ->paginate();
        $users = DB::table('users')->get();

        return view('admin.donor.donor-list', ['donors' => $donors, 'users' => $users]);
    }

        public function addDonor(Request $rq){

        DB::table('donors')->insert([
            'user_id' => $rq->user_id,
            'gender' => $rq->gender,
            'date_of_birth' => $rq->date_of_birth,
            'weight' => $rq->weight,
            'blood_type' => $rq->blood_type
        ]);
        
        echo "Record has been added.";
    }

    public function editDonor(Request $rq){
        $id = $rq->txtid;
        $name = $rq->name;
        $description = $rq->description;

        DB::table('donors')->where('id', $id)->update([ 
            'weight'=>$weight,
        ]);

        echo "Record has been updated.";
    }

    public function deleteDonor(Request $rq){
        $id = $rq-> txtid;
        $don= DB::table('donors')->where('id', $id)->delete();
        if($don){
            echo "Record has been delete";
        }

    }

    public function show($id)
    {
        // Donor information + user name
        $donor = DB::table('donors')
            ->join('users', 'donors.user_id', '=', 'users.id')
            ->where('donors.id', $id)
            ->select(
                'donors.*',
                'users.name',
                'users.email'
            )
            ->first();

        // Donation history
        $donations = DB::table('donations')
            ->join('hospitals', 'donations.hospital_id', '=', 'hospitals.id')
            ->where('donor_id', $id)
            ->select(
                'donations.*',
                'hospitals.name as hospital_name'
            )
            ->orderBy('donations.created_at','desc')
            ->get();

        // Total donations
        $totalDonations = $donations->count();

        // Last donation
        $lastDonation = $donations->first();

        // Age calculation
        $age = Carbon::parse($donor->date_of_birth)->age;

        return view('admin.donor.profile', compact(
            'donor',
            'donations',
            'totalDonations',
            'lastDonation',
            'age'
        ));
    }
}
