<?php

use App\Task;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * show task dashboard
 */
Route::get('/', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();
    return view('tasks', [ 
        'tasks' => $tasks
    ]);
});

/**
 * add new task
 */
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [ 
        'name' => 'required|max:255'
    ]);

    if( $validator->fails() ) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    // todo create new task
    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

/**
 * show task dashboard
 */
Route::delete('/task/{task}', function (Task $task) {
    $task->delete();
    return redirect('/');
});
