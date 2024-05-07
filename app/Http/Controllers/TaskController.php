<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\TaskHistory;
use Illuminate\Http\Request;
use Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
       $status = $request->status;
       return view('task.create',compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $task = new Task;
        $task->title = $request->title;
        $task->description = $request->description;
        $task->task_time = $request->date;
        $task->created_by = Auth::user()->id;
        $task->status=  $request->status;
        if($task->save())
        {
           return redirect()->back();
        }else{
            return redirect()->back();
        }
       

    }

   
    public function updateStatus(Request $request)
    {
        preg_match_all('/\d+/', $request->status, $matches);
       
        $task= Task::find($request->id);
        $task->status = $matches[0][0];
        $task->save();

        $t =  new TaskHistory;
        $t->task_id=  $request->id;
        $t->status= $matches[0][0];
        $t->change_status_by= Auth::user()->id;
        $t->change_time =date('Y-m-d');
        $t->save();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $task = Task::find($id);
       return  view('task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        
        $task =  Task::find($id);
        $task->title = $request->title;
        $task->description = $request->description;
        $task->task_time = $request->date;
        $task->created_by = Auth::user()->id;
        $task->status=  $request->status;
        if($task->save())
        {
           return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $task =  Task::find($request->id);
        if($task->delete())
        {
           return redirect()->back();
        }else{
            return redirect()->back();
        }

    }
}
