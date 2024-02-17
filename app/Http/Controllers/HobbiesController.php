<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function index(){

        $HobbiesData = array(
            "Reading", "Playing games", "Dancing", "Cooking", "Baking", "Crocheting" 
        );

        return view('Hobbies', ['HobbiesData'=>$HobbiesData]);

    }

}
