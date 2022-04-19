<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class AmenitiesController extends Controller
{   
    //View data in datatable
    public function View(Request $request){

        $amenities_view = Session::get('user_id');
        $query = DB::select("SELECT * FROM amenities_tour ORDER BY name");
        return view('admin.amenities_tours', ['amenities_tours' => $query]);
    }

  

    public function addAmenities(Request $request){
        $arrRet = [];
        $return_name = $request->name;
        $return_code = $request->code;
        $return_zip = $request->zip;

        $ins = DB::table('amenities_tour')->insert([
            'name' => $return_name,
            'code' => $return_code,
            'zip'  => $return_zip
        ]);

        if($ins) { $arrRet = DB::select("SELECT * FROM amenities_tour WHERE name = '$return_name' AND code = '$return_code' AND zip = '$return_zip' ORDER BY id DESC LIMIT 1"); }

        echo json_encode($arrRet);
    }

    public function editView(Request $request){
        $id = $request->id;
        $query = DB::table('amenities_tour')
        ->where([
            'id' => $id
        ])
        ->first();
        
        return json_encode($query);
       
    }

    //Save and Update data when save changes is clicked
    public function updateAmenities(Request $request){
        $name = $request->name;
        $code = $request->code;
        $id   = $request->id;

        DB::table('amenities_tour')
        ->where('id', $id)
        ->update([
            'name' => $name,
            'code' => $code
        ]);
        
        return $request->all();
    }


    public function deleteAmenities(Request $request){
        // $id = $request->id;
        // DB::select("SELECT * FROM amenities_tour WHERE id = $id ")->delete();
        DB::table('amenities_tour')
        ->where('id', $request->id)
        ->delete();

    }

}

