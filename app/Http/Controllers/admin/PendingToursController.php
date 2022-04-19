<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use App\PendingTours;//model name
use Datatables;
use DB;
use Session;


class PendingToursController extends Controller
{
    public function index(){
        return view('admin.pending_tours');
        //htt:/127.0.0.1:8000/ajaxdata
    }

    public function getdata(Request $request){

        // $menu_order_data = DB::select("SELECT * FROM menu_orders WHERE user = ".$row_users['menu_order_id']." ORDER BY `menu_orders`.`id` DESC");
        //PendingTours model class name
        $pending_tours = PendingTours::select("*"); //  kung unsa nga column imo gitawag para i display nimo dirizz
        return Datatables::of($pending_tours)->make(true);
    }

    // public function getPlus(Request $request){
        
    //     $pending_tours = DB::select("SELECT *
    //     FROM `menu_orders`
    //     WHERE `user` = ".$pending_tours['menu_order_id']."
    //     ORDER BY `menu_orders`.`id` DESC"); 
    // }


}
