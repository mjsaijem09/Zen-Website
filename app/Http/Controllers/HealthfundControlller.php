<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthfundControlller extends Controller
{
    public function index() {
        $data=[];
        $str = file_get_contents(public_path() . '/images/json_files/healthfund.json');
       
        $data['json'] = json_decode($str, true); // decode the JSON into an associative array
        return view('healthfund/index',$data);
    }
}
