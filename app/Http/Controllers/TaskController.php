<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('create');
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
        $post = new Task;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();

        return redirect('/');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,)
    {
        $task = Task::find($request->id);
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->save();

        return redirect('/');
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
    public function destroy($task)
    {
        $task = Task::findOrFail($task);
        $task->delete();
    
        return redirect()->route('index.task')->with('success', 'Tarea eliminada exitosamente');
    


    }
}
