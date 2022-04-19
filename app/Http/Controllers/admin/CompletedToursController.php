<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Controller;
use App\CompletedTours;
use App\Notes;
use Datatables;
use DB;
use Session;

class CompletedToursController extends Controller
{
    
    public function index(){
        
        return view('admin.completed_tours');
        
    }

    public function getdata(){

        $completed_tours = CompletedTours::select('*');
      
        return Datatables::of($completed_tours)->make(true);
    }

}
