<?php

namespace App\Http\Controllers;
use Redirect;
use Crypt;
use Session;
use Illuminate\Http\Request;
use App\Models\developer;
use App\Models\admin;


class DeveloperController extends Controller
{
    public function SaveDeveloper(Request $req)
    {
            
        $dev_obj=new developer;
        $dev_obj->Developer_Name=$req->dev_name;
        $dev_obj->Developer_Email=$req->dev_email;
        $dev_obj->Developer_Contact=$req->dev_contact;
        $dev_obj->Developer_Rule=$req->dev_role;
        $dev_obj->Joining_date=$req->dev_join_date;
        $dev_obj->Developer_salary=$req->dev_salary;
        $dev_obj->Developer_upi_id=$req->dev_upiid;
        $dev_obj->Developer_skills=$req->dev_skills;
        $dev_obj->Developer_present_activity=$req->dev_present_activity;
        $dev_obj->IsDeleted=0;
        $dev_obj->save();
        // $msg=session()->flush('msg','Developer add succesfully!');
        return Redirect::back()->with('message','Developer add succesfully!');
        
    }
    function ViewDeveloper(Request $req,$eml)
    {
       
        
        $Profile = developer::firstWhere('Developer_Email', $eml);
        return view('ViewDeveloper',['Dev_Profile'=>$Profile]);
       
        
    }
    function EditDeveloper(Request $req)
    {
       $updt_id=$req->upid;
       $dev_obj=developer::find($updt_id);
       $dev_obj->Developer_Email=$req->updt_email; 
       $dev_obj->Developer_Contact=$req->updt_contact;
       $dev_obj->Developer_Rule=$req->updt_role;
       $dev_obj->Joining_date=$req->updt_date;
       $dev_obj->Developer_salary=$req->updt_salary;
       $dev_obj->Developer_salary=$req->updt_salary;
       $dev_obj->Developer_upi_id=$req->updt_upi;
       $dev_obj->Developer_skills=$req->updt_skills;
       $dev_obj->Developer_present_activity=$req->updt_activity;
       $dev_obj->save();  
       return Redirect::back()->with('message','Developer update succesfully!');               
    }
    function RemoveDeveloper(Request $req,$id)
    {
      $dev_obj=developer::find($id);
      $dev_obj->IsDeleted=1;
      $dev_obj->save();
      $msg=session()->flash('message','Developer remove succesfully');
      return redirect('Developers');

    }

    function AuthCheck(request $req)
    {
        $ad_obj=admin::where('Admin_Email',$req->author_email)->first();
        
        if($ad_obj)
        {
         if(crypt::decrypt($ad_obj->Admin_Password)==$req->author_password)
         {
            $req->session()->put('AuthAdmin',$req->author_email);
            return redirect("/");
         }
         else
         {
            return Redirect::back()->with('invalid','Wrong Password For Provided Email Try Again !');  
         }
        }
        else
        {
            return Redirect::back()->with('invalid','Wrong Email Plese Try Again !');  
        }

        // $ad_obj->Admin_Email=$req->author_email;
        // $ad_obj->Admin_Password=Crypt::encrypt();
        // $ad_obj->Admin_contact="9023331225";
        // $ad_obj->IsAccess=1;
        // $ad_obj->save();
        // return Redirect::back()->with('auth','Admin profile set');

    }
    function Logout()
    {
        Session::forget('AuthAdmin');
        return Redirect::back()->with('logout','You are successfully logout!');

    }
}
