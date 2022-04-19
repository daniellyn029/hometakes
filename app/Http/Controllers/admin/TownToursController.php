<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class TownToursController extends Controller
{   
    //View data in datatable
    public function View(Request $request){

        $town_tours_view = Session::get('user_id');
        $query = DB:: select("SELECT * FROM town_tour");
        return view('admin.town_tours', ['towntours' => $query]);
    }

    //Add town
    public function AddTown(Request $request){

        $arrRet = [];
        $return_town = $request->town;
        $return_code = $request->code;

        $ins = DB::table('town_tour')->insert([
            'name' => $return_town,
            'code' => $return_code
        ]);

        if($ins) { $arrRet = DB::select("SELECT * FROM town_tour WHERE name = '$return_town' AND code = '$return_code' ORDER BY id DESC LIMIT 1"); }

        echo json_encode($arrRet);
    }

    //View Data when edit is clicked
    public function EditTown(Request $request){

        // $town_tours_view = Session::get('user_id');
        $id = $request->id;
        $query = DB::table('town_tour')
        ->where([
            'id' => $id
        ])
        ->first();

        return json_encode($query);
        
    }

    //Save and Update data when save changes is clicked
    public function UpdateTown(Request $request){
        $name = $request->name;
        $code = $request->code;
        $id = $request->id;

        DB::table('town_tour')
        ->where('id', $id)
        ->update([
            'name' => $name,
            'code' => $code
        ]);
        
        return $request->all();
    }

    public function DeleteTown(Request $request){
        DB::table('town_tour')
        ->where('id', $request->id)
        ->delete();
    }

}

