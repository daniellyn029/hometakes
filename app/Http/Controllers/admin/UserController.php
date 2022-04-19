<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use App\User;
use App\Notes;
use Datatables;
use DB;
use Session;

class UserController extends Controller
{
    
    public function index()
    {
        return view('admin.users');
        
    }

    public function getdata()
    {
        $users = User::select('*'); //  kung unsa nga column imo gitawag para i display nimo dirizz
        return Datatables::of($users)->make(true);
    }

    public function getNotes(Request $request)
    {
        $id = $request->id;
        $notes = DB::table('users')
        ->select('notes')
        ->where('id', $id)
        ->get();

        return $notes;
    }


}
