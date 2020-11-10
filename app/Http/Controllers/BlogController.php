<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller {

    public function index() {
        $data=[];
        $str = file_get_contents(public_path() . '/images/json_files/blog.json');
        $data['json'] = json_decode($str, true); // decode the JSON into an associative array
        return view('blog/index',$data);
    }

    public function view($id='') {
        return view('blog/view');
    }
}