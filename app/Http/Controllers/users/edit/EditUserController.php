<?php

namespace App\Http\Controllers\users\edit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class EditUserController extends Controller
{
    //View User edit profile
    public function ViewUser(Request $request){
        $user_sesh = Session::get('user_id');
        $query = DB:: select("SELECT * FROM users WHERE id = $user_sesh");
        
        //Check if query returns data
        if(count($query) >0){
            $query = $query[0];
        }
        //Other Way of getting the data
        // $users = DB::table('users')
        // ->where([['id',Session::get('user_id')]])
        // ->first();
        return view('users.edit.edit_user', ['users' => $query]);
    }

    //Update user edit profile
    public function UpdateUserProfile(Request $request){
        $id    = $request->id;
        $fname = $request->fname;
        $lname = $request->lname;
        $credentials = $request->credentials;
        $mls_id = $request->mls_id;
        $email  = $request->email;
        $cp_no  = $request->cp_no;
        $asst_cp = $request->asst_cp;
        $web_name = $request->web_name;
        $company = $request->company;
        $office_add = $request->office_add;
        $city   = $request->city;
        $zip    = $request->zip;
        $agent_prof = $request->agent_prof;
        $comp_logo = $request->comp_logo;
        $agent_pho = $request->agent_pho;
        $facebook = $request->facebook;
        $twitter = $request->twitter;
        $google = $request->google;
        $instagram = $request->instagram;
        $pinterest = $request->pinterest;
        $youtube = $request->youtube;

        $query=DB::table('users')
        ->where([
            'id' => $id
        ])
        ->update([
            'fname' => $fname,
            'lname' => $lname,
            'credentials' => $credentials,
            'mls_agent_id' => $mls_id,
            'email' => $email,
            'phone' => $cp_no,
            'assist_phone' => $asst_cp,
            'website' => $web_name,
            'company' => $company,
            'address' => $office_add,
            'city' => $city,
            'zip'  => $zip,
            'agent_profile' => $agent_prof,
            'logo' => $comp_logo,
            'headshot' => $agent_pho,
            'facebookpage' => $facebook,
            'twitterpage'  => $twitter,
            'googlepluspage' => $google,
            'instagrampage' => $instagram,
            'pinterestpage' => $pinterest,
            'youtubepage' => $youtube
        ]);

    }

}
