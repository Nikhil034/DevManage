<?php

namespace App\Http\Controllers;
use Redirect;
use DB;
use Illuminate\Http\Request;
use App\Models\task;
class TaskController extends Controller
{
   function AddTask(request $req)
   {
    return view('AddTask');
   }
   function SaveTask(request $req)
   {
      $tsk_obj=new task;
      $tsk_obj->Task_details=$req->task_detls;
      $tsk_obj->Task_priority=$req->task_prio;
      $tsk_obj->IsDone=0;
      $tsk_obj->save();
      return Redirect::back()->with('AddTask','Your task add succesfully!');
     
   }
   function TaskPage()
   {
    $tasks=DB::select("select id,Task_details,Task_priority from tasks where IsDone=0");
    return view('ViewTasks',['TaskList'=>$tasks]);
  }
  function DoneTask(request $req,$task_id)
  {
     $tsk_obj=task::find($task_id);
     $tsk_obj->IsDone=1;
     $tsk_obj->save();
     return Redirect::back()->with('Done','Task mark as done succesfully!');

  }
}
