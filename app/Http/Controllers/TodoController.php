<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tasks = Task::orderBy("status")->get();
        return view ('index')->with(["task"=> $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("todo");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate(['task'=> "required|max:255"]);
        $todo = ($request->task);
        Task::create(['task'=> $todo]);
        return redirect("todo")->with("success","Task created successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $todo= Task::find($id);
        $todo->delete();
        return redirect()->back()->with("success","Task deleted successfully");


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Task::find($id);
      
        return view ('edit')->with(['id' => $id, "task" => $todo]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate(['task'=> "required|max:255"]);

        $updatetodo = Task::find($request->id);
        $updatetodo ->update(['task'=> $request->task]);
        return redirect('todo')->with("success","TODO updated successfully");
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function completed($id)
    {
        $todo=Task::find($id);
        if ($todo->status){
            $todo->update(["status"=> false]);
            return redirect()->back()->with("success", "TODO marked as Incomplete !");
        }else{
            $todo->update(["status"=>true]);
            return redirect()->back()->with("success", "TODO marked as Complete !");


        }

    }
}
