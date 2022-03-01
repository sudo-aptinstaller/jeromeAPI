<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    function fetchTasks(){
        $tasks = Task::all();

        return response()->json($tasks);
    }

    function fetchTask($id){
        $task = Task::findOrFail($id);

        return response()->json($task);
    }
    

    function editTask(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->name = $request->get('name');
        $task->description = $request->get('description');
        $task->completed = $request->get('completed');
        $task->expiry = $request->get('expiry');
        $task->save();
        
        return response()->json(['status' => 201, 'task' => $task]);
    }
    


    function createTask(Request $request){
        $task = new Task;
        $task->name = $request->get('name');
        $task->description = $request->get('description');
        $task->completed = $request->get('completed');
        $task->expiry = $request->get('expiry');
        $task->save();
        
        return response()->json(['status' => 201, 'task' => $task]);
    }
    


    function deleteTask($id){
        $task = Task::findOrFail($id);
        $task->delete();

        return response(201);
    }
    
}
