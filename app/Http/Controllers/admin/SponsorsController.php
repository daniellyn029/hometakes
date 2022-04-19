<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use DB;
use Session;


class SponsorsController extends Controller
{
    //View data in datatable
    public function View(Request $request){

        $sponsors_view = Session::get('user_id');
        $query = DB:: select("SELECT * FROM sponsors");
        return view('admin.sponsors', ['sponsors' => $query]);
    }

    //Add town
    public function addSponsors(Request $request){

        $arrRet = [];
        $return_menu        = $request->menu;
        $return_company     = $request->company;
        $return_contact_name= $request->contact_name;
        $return_telephone   = $request->telephone;
        $return_contact_email= $request->contact_email;
        $return_website     = $request->website;
        $return_image       = $request->image;
        $return_limit       = $request->limit;
        
        $ins = DB::table('sponsors')->insert([
            'name' => $return_menu,
            'company_name' => $return_company,
            'contact_name' => $return_contact_name,
            'telephone' => $return_telephone,
            'email' => $return_contact_email,
            'website' => $return_website,
            'image' => $return_image,
            'limit_cap' => $return_limit
        ]);

        if($ins) { $arrRet = DB::select("SELECT * FROM sponsors WHERE name = '$return_menu' AND company_name = '$return_company' AND contact_name = '$return_contact_name' AND telephone = '$return_telephone' AND email = '$return_contact_email' AND website = '$return_website' AND image =  '$return_image' AND limit_cap = '$return_limit' ORDER BY id DESC LIMIT 1"); }

        echo json_encode($arrRet);
    }

    public function editView(Request $request){
        $request->all();
        //  $id = $request->id;

        //  $query = DB::table('sponsors')
        //  ->where([
        //      'id' => $id
        //  ])
        //  ->first();
 
        //  return json_encode($query);

    }

}
