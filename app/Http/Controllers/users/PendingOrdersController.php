<?php

namespace App\Http\Controllers\users;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class PendingOrdersController extends Controller
{   
    //View data in datatable
    public function View(Request $request){

        $pending_userid = Session::get('user_id'); // In the original query in hometakes is (Select id from users where username = '".$_SESSION['logged'][0]."';",)
        $query = DB::select ("SELECT * FROM properties WHERE user = '$pending_userid' AND status = 'Inactive' ORDER BY date DESC");
        return view ('users.pending_orders', ['pending_orders' => $query]);
        
        // $query = DB:: select("SELECT * FROM amenities_tour ORDER BY name");
        // return view('admin.amenities_tours', ['amenities_tours' => $query]);
    }

}

