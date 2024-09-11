<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class OldTasksController extends Controller
{

    function index()
    {
        // $tasks = Task::where('status', 'completed')->get();
        // $tasks = Task::where('status', 'completed')->count();
        // $tasks = Task::findOrFail(9);
        // $tasks = Task::orderBy('id', 'asc')->get();
        $tasks = Task::all();
        return $tasks;
    }
    function doSomething()
    {
        // Task::create([
        //     'title' => 'Make a Cofffee',
        //     'description' => 'Make a Cofffee and drink it',
        //     'due_date' => '2021-01-01',
        // ]);

        Task::create([
            [
                'title' => fake()->sentence(15),
                'description' => fake()->sentence(30),
                'due_date' => now()->addDays(rand(1, 7)),
            ],
            [
                'title' => fake()->sentence(15),
                'description' => fake()->sentence(30),
                'due_date' => now()->addDays(rand(1, 7)),
            ],
        ]);


        // Task::find(1)->update(['status' => 'completed']);
        return 'done';
    }

    // function  show(Request $request, $id){
    //     return Task::find($id);
    // }
    function  show(Request $request, Task $task)
    {
        return $task;
    }
}
