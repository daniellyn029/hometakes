<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class TourLicensesController extends Controller
{   
    //View data in datatable
    public function View(Request $request){

        $tour_licenses = Session::get('user_id');
        $query = DB::select("SELECT id, username, fname, lname, email, all_tours_license, tour_license_expire FROM users WHERE all_tours_license = 'Y'");
        $query1 = DB::select("SELECT yearly_licenses.id,yearly_licenses.zipcode, yearly_licenses.date,users.fname, users.lname,town_tour.name FROM yearly_licenses LEFT JOIN users ON yearly_licenses.user = users.id LEFT JOIN town_tour ON yearly_licenses.tour_id = town_tour.id WHERE TYPE = 'T'");
        $query2 = DB::select("SELECT yearly_licenses.id, yearly_licenses.zipcode, yearly_licenses.date,users.fname, users.lname,amenities_tour.name FROM yearly_licenses LEFT JOIN users ON yearly_licenses.user = users.id LEFT JOIN amenities_tour ON yearly_licenses.tour_id = amenities_tour.id WHERE type = 'A'");
        return view('admin.tour_licenses', ['town_amenities' => $query , 'license_town' => $query1, 'license_amenities' => $query2]);
    }

    //Update to N from Y for Town & Amenities
    public function deleteta(Request $request){
        DB::table('users')
        ->where('id' , $request->id)
        ->update(['all_tours_license' => 'N']);
        return 'Success';
    }

     //Update to N from Y for Town
     public function delete_t(Request $request){
        DB::table('yearly_licenses')
        ->leftJoin('users', 'yearly_licenses.user', '=', 'users.id')
        ->leftJoin('town_tour', 'yearly_licenses.tour_id', '=', 'town_tour.id')
        ->where('yearly_licenses.id', $request->id)
        ->update(['TYPE' => 'A']);
        return 'Success';
    }

    //Update to N from Y for Amenities
    public function delete_m(Request $request){
        DB::table('yearly_licenses')
        ->leftJoin('users', 'yearly_licenses.user', '=', 'users.id')
        ->leftJoin('amenities_tour', 'yearly_licenses.tour_id', '=', 'amenities_tour.id')
        ->where('yearly_licenses.id', $request->id)
        ->update(['TYPE' => 'T']);
        return 'success';
    }

}

