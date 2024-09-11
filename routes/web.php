<?php

use App\Http\Controllers\OldTasksController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/dosomething',[OldTasksController::class, 'doSomething']);
// Route::get('/tasks',[OldTasksController::class, 'index']);
// Route::get('/tasks/{task}',[OldTasksController::class, 'show']);


Route::resource('/tasks', TasksController::class);