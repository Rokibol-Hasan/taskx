<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    function doSomething()
    {
        // Task::create([
        //     'title' => 'Make a Cofffee',
        //     'description' => 'Make a Cofffee and drink it',
        //     'due_date' => '2021-01-01',
        // ]);

        Task::create([
            'title' => fake()->sentence(15),
            'description' => fake()->sentence(30),
            'due_date' => now()->addDays(rand(1,7)),
        ]);
        return 'done';
    }
}
