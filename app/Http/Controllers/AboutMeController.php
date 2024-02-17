<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index(){

        $AboutMeData = array(
            "name" => "Kristine Ann A. Bugasto",
            "email" => "kaabugasto@gmail.com",
            "contact" => "09497754395"
        );

        return view('About_Me', ['AboutMeData'=>$AboutMeData]);

    }

}
