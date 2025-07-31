<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function createTask(){
             $users = User::get();
        return view('tasks.add_task', compact('users'));
    }

    public function allTasks(){

        $tasks = $this->getAllTasks();
        return view('tasks.all_tasks', compact('tasks'));
    }

    public function deleteTask($id){
        Task::where('id', $id)->delete();

        return back();
    }

    public function storeTask(Request $request){

        $request->validate([
            'name' => 'string|max:50|required',
        ]);


        Task::insert([
            'name' => $request->name,
            'description' => $request->email,
            'user_id' => $request->user_id,
        ]);


        return redirect()->route('tasks.all')->with('message', 'Tarefa adicionada com sucesso!');

    }


    public function viewTask($id){
        $myTask = Task::where('id', $id)->first();

        $users = User::get();
        return view('tasks.show_task', compact('myTask', 'users'));
    }

    public function updateTask(Request $request){
        $request->validate([
            'name' =>'required',
            'user_id' => 'required'
        ]);

        Task::where('id', $request->id)
        ->update([
            'name' =>$request->name,
            'description' =>$request->description,
            'user_id' =>$request->user_id,
            'updated_at' => now()
        ]);

        return redirect()->route('tasks.all')->with('message', 'Tarefa actualizada com sucesso!');

    }

    private function getAllTasks(){
        $tasks = Task::join('users', 'users.id', '=', 'tasks.user_id')
        ->select('tasks.*', 'users.name as username')
        ->get();

        return $tasks;
    }
}
