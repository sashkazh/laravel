<?php

namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

use App\Http\Requests;

class TasksController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function author()
    {
        return view('author');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->descr;
        $task->url = $request->url;
        $task->importance = $request->priority;

        $task->save();
        return redirect('/tasks/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
