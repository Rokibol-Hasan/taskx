<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //     $status = $request->input('status');
        //     if(!$status){
        //     $tasks =  Task::all();
        //  }elseif($status == 'completed'){
        //     $tasks =  Task::where('status', 'completed')->get();
        //  }else{
        //     $tasks =  Task::where('status', 'pending')->get();
        //  }


        // $tasks = Task::when($request->status, function ($query, $status) {
        //     $query->where('status', $status);
        // })->get();
        return view('tasks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
