<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
// use Carbon\Carbon;
use Session;


class SettingsController extends Controller
{
    //View data in datatable
    public function View(Request $request){

        $settings_view = Session::get('user_id');
        $query = DB:: select("SELECT * FROM videographers WHERE date_delete IS NULL");
        $settings = DB::select("SELECT * FROM settings");
        return view('admin.settings', ['videographers' => $query, 'settings' => $settings]);
      
    }

    public function addVideographer(Request $request){
        
        $arrRet = [];
        $return_name = $request->name;
        $return_phone = $request->phone;
        $return_email = $request->email;

        $ins = DB::table('videographers')->insert([
            'name' => $return_name,
            'phone' => $return_phone,
            'email' => $return_email
        ]);

        if($ins) { $arrRet = DB::select("SELECT * FROM videographers WHERE name = '$return_name' AND phone = '$return_phone' AND email = '$return_email' ORDER BY id DESC LIMIT 1"); }

        echo json_encode($arrRet);

    }

    public function editVideographerView(Request $request){

         $id = $request->id;
         $query = DB::table('videographers')
         ->where([
             'id' => $id
         ])
         ->first();

         return json_encode($query);

    }

    public function updateVideographer(Request $request){
        $name  = $request->name;
        $phone = $request->phone;
        $email = $request->email;
        $id    = $request->id;

        DB::table('videographers')
        ->where([
            'id' => $id
        ])
        ->update([
            'name'  => $name,
            'phone' => $phone,
            'email' => $email
        ]);

    }

    public function deleteSettings(Request $request){

        DB::table('videographers')
        ->where('id' , $request->id)
        ->update(['date_delete' => date('Y-m-d h:i:s')]);
        return 'Success';

    }

    
}
