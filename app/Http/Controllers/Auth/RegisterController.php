<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function registerSchool(Request $request){
        /*
            Author: Ikenna Edmund Anikwe (Star Boy)
            Year: 2021
            Mood: Feeling Good this morning
            listening to cave men while coding so no mind me lol
            email_address: eddyiyke3@gmail.com
            tel: 08147082856'
            if you're managing this code, you can always reach out to me
            with chikini $1,000,000

            for testing ensure
             - country has a data
             - state has a data
             - city has a data
             - role has a data
         */
            $data = $request->all();
            // validate school tel, email,
            $schemailtel = School::where('schoolemail', $data[0]['schoolemail'])
                                ->orWhere('schooltel', $data[0]['schooltel'])
                                ->get();

            if($schemailtel->isEmpty()){
                // first get the school data 0
                $school_data = new School();
                $school_data->schoolname = $data[0]['schoolname'];
                $school_data->schoolemail = $data[0]['schoolemail'];
                $school_data->year_of_establishment = $data[0]['year_of_establishment'];
                $school_data->schooltel = $data[0]['schooltel'];
                $school_data->schoollogo = $data[0]['schoollogo'];
                $school_data->schoolmotto = $data[0]['schoolmotto'];
                $school_data->address = $data[0]['address'];
                $school_data->countryid = $data[0]['countryid'];
                $school_data->stateid = $data[0]['stateid'];
                $school_data->cityid = $data[0]['cityid'];
                $school_data->save();
                // get the school id and append to branchtable 2
                $branch_data = new Branch();
                $branch_data->branchname = $data[2]['branchname'];
                $branch_data->schoolid = $school_data->id;
                $branch_data->branchaddress = $data[2]['branchaddress'];
                $branch_data->save();
                // get the branch id and append to the user table 1
                $user_data = new User();
                $user_data->username = $data[1]['username'];
                $user_data->roleid = 1;
                $user_data->password = Hash::make($data[1]['password']);
                $user_data->branchid = $branch_data['id'];
                $user_data->save();
                // send email verification
                dd('saved');
            }else{
                throw ValidationException::withMessages(['Another School with Email or telephone exists!']);
            }

        }

}
