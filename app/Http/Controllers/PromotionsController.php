<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionsController extends Controller {

    public function index() {
        $data=[];
        $str = file_get_contents(public_path() . '/images/json_files/promotions.json');
       
        $data['json'] = json_decode($str, true); // decode the JSON into an associative array
        return view('promotions/index',$data);
    }

}
