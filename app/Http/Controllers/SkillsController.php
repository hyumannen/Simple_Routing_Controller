<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index(){

        $SkillsData = array(
            "Time Management", "Teamwork", "Project Management", "Resourcefulness", "Communication"
        );

        return view('Skills', ['SkillsData'=>$SkillsData]);

    }
}
