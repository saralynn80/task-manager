<?php

namespace App\Http\Controllers;

use Auth;
use App\Task;
use App\Http\Requests;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{	

	public function __construct()
	{
		//$this->middleware('auth', ['only' => 'create']);
		$this->middleware('auth');
	}

	public function index()
	{
		//return \Auth::user();
		$tasks = Task::latest('due_date')->get();
		return view('tasks.index', compact('tasks'));
	}

	public function show($id)
	{
		$task = Task::findOrFail($id);
		return view('tasks.show', compact('task'));
	}

	// Adding tasks
	public function create()
	{
		return view('tasks.create');
	}

	// Stores values in db, redirects user
	public function store(TaskRequest $request)
	{
		// Reference user
		$task = new Task($request->all());

		// Get the authenticated user's tasks and save a new one
		Auth::user()->tasks()->save($task);

		return redirect('tasks');
	}

	// Stores values in db, redirects user
	public function edit($id)
	{
		$task = Task::findOrFail($id);
		return view('tasks.edit', compact('task'));
	}

	public function update($id, TaskRequest $request)
	{
    	$task = Task::findOrFail($id);
    	$task->update($request->all());
    	return redirect('tasks');
	}

	public function destroy($id)
	{
    	Task::findOrFail($id)->delete();

    	return redirect('tasks');
	}

}
