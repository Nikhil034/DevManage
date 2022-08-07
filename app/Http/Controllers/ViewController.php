<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViewController extends Controller
{
    function DeveloperPage(){

        $developers = DB::select('select id,Developer_Email,Developer_Rule,Developer_present_activity from developers where IsDeleted=0');
        return view('Developer',['devs'=>$developers]);
    }
    function ProjectPage(){
        return view('Project');
    }
    function AddDeveloperPage(){
        return view('AddDeveloper');
    }
    function ViewProjectPage(){
        $projects=DB::select("select Project_title,Client_Email,Projetc_lead_by from projects where IsDeleted=0");
        return view('ViewProjects',['projects'=>$projects]);
    }
    function LoginPage(){
        return view('Login');
    }
    function UnAuth(){
        return view('401');
    }

}
