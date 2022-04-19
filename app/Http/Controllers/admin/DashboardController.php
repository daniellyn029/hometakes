<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class DashboardController extends Controller
{

    public function View(Request $request){

        $dashboard_sess = Session::get('user_id');
        $pt = DB:: select("SELECT COUNT(id) AS row_counts FROM vw_pending_tours");
        $ct = DB:: select("SELECT COUNT(id) AS row_counts FROM vw_completed_tours");
        $usr = DB:: select("SELECT COUNT(id) AS row_counts FROM vw_users");
        $pu = DB:: select("SELECT COUNT(id) AS row_counts FROM vw_pending_users");
        $tt = DB:: select("SELECT COUNT(id) AS row_counts FROM town_tour");
        $at = DB:: select("SELECT COUNT(id) AS row_counts FROM amenities_tour");
        return view('admin.dashboard', ['pending_tours' => $pt, 'completed_tours' => $ct, 'users' => $usr, 'pending_users' => $pu, 'town_tours' => $tt, 'amenities_tours' => $at]);
    }

}
