<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use App\PendingUsers;//model name
use Datatables;
use DB;
use Session;


class PendingUsersController extends Controller
{
    public function index(){

        return view('admin.pending_users');
    }

    public function getdata(Request $request){

        //PendingUsers model class name
        $pending_users = PendingUsers::select("*");
        return Datatables::of($pending_users)->make(true);
    }
}
