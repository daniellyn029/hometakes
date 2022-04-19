<?php

namespace App\Http\Controllers\register;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        try 
        {
            if($request->ismethod('POST')){
                $query = DB::table('users')->insert([
                    'id_type'          => 0,
                    'username'         => $request->uname,
                    'pwd'              => Hash::make($request->password),
                    'fname'            => $request->fname,
                    'lname'            => $request->lname,
                    'mls_agent_id'     => $request->mls_id,
                    'mls_area'         => 'sample',
                    'mls_address'      => 'sample',
                    'mls_login_id'     => 'sample',
                    'mls_login_pwd'    => 'sample',
                    'credentials'      => $request->credentials,
                    'email'            => $request->email,
                    'phone'            => $request->cp_no,
                    'assist_phone'     => $request->asst_cp,
                    'phone1_carrier'   => 'sample' ,
                    'phone2_carrier'   => 'sample' ,
                    'cell1_reminder'   => 'y' ,
                    'cell2_reminder'   => 'n' ,
                    'fax'              => 'sample' ,
                    'website'          => $request->web_name,
                    'tour_bgcolor'     => 'sample' ,
                    'company'          => $request->brok_comp,
                    'address'          => 'sample',
                    'city'             => $request->city,
                    'state'            => 'sample',
                    'zip'              => $request->zipc,
                    'agent_profile'    => 'sample',
                    'headshot'         => 'sample',
                    'logo'             => $request->comp_logo,
                    'meet_agent'       => 'sample',
                    'itunes'           => 'sample',
                    'date'             => '2021-01-29',
                    'create_date'      => '2021-01-29',
                    'status'           => 'Active',
                    'video_agent'      => 'sample' ,
                    'notes'            => 'sample' ,
                    'hear_about_us'    => 'sample' ,
                    'private_notes'    => 'sample' ,
                    'all_tours_license'=> 'Y' ,
                    'tour_license_expire'=> 'sample' ,
                    'first_menu_id'      => 1 ,
                    'active_sponsor'     => 'Y' ,
                    'nice_day_default'   => 'On' ,
                    'hdr'                => 'On' ,
                    'twilight_enhancement'=> 'On' ,
                    'original_video_file' => 'On' ,
                    'plus_premium_package'=> 'plus' ,
                    'AN_CCID'             => 1,
                    'AN_SID'              => 1,
                    'AN_HT_ID'            => 'sample',
                    'twitterpage'         => 'sample',
                    'facebookpage'        => 'sample',
                    'googlepluspage'      => 'sample',
                    'ipaddress'           => 'sample',
                    'linkedinpage'        => 'sample',
                    'instagrampage'       => 'sample',
                    'youtubepage'         => 'sample',
                    'pinterestpage'       => 'sample'
                ]);
                
                //direct back to the page
                // return redirect()->back();
                return redirect('/dashboard');    

            }else{
                return view('login.register');
            }
            
        } 
        catch (Exception $e) 
        {
            return redirect()->back()->withErrors('error : '.$e);
        }
       
        
    }


}
