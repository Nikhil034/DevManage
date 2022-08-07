<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    function SaveProject(request $req)
    {
       $pr_obj=new project;
       $pr_obj->Client_Name=$req->client_name;
       $pr_obj->Client_Email=$req->client_email;
       $pr_obj->Project_title=$req->project_title;
       $pr_obj->Project_details=$req->project_details;
       $pr_obj->Project_budget=$req->project_budget;
       $pr_obj->Project_duration=$req->project_months;
       $pr_obj->Projetc_lead_by=$req->project_lead;
       $pr_obj->Lead_contact=$req->project_lead_contact;
       $pr_obj->Technology_use=$req->use_technology;
       $pr_obj->IsDeleted=0;
       $pr_obj->save();
       return redirect()->back()->with('message','Project add succesfully!');
    }
    function ShowProject(request $req,$prj)
    {
        $Prjct = project::firstWhere('Project_title', $prj);
        return view('ShowProject',['Client_Project'=>$Prjct]);
    }
    function UpdateProject(request $req)
    {
        $id=$req->prjct_id;
        $pr_obj=project::find($id);
        $pr_obj->IsDeleted=1;
        $pr_obj->save();
        $msg=session()->flash('message','Project update succesfully!');
        return redirect('/Project/ViewProject'); 

        
  
    }
}
