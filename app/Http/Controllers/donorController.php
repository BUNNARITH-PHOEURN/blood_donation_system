<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Donor; 
use Illuminate\Support\Facades\Auth;

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

    public function createForm()
    {
        return view('admin.donor.add-donor');
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
}
