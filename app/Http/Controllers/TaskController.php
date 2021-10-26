<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->tarea = $request->input('tarea');
        $task->domingo = $request->input('domingo');
        $task->lunes = $request->input('lunes');
        $task->martes = $request->input('martes');
        $task->miercoles = $request->input('miercoles');
        $task->jueves = $request->input('jueves');
        $task->viernes = $request->input('viernes');
        $task->sabado = $request->input('sabado');
        $task->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Task::findOrFail($id);
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
        $task = Task::findOrFail($id);
        $task->tarea = $request->input('tarea');
        $task->domingo = $request->input('domingo');
        $task->lunes = $request->input('lunes');
        $task->martes = $request->input('martes');
        $task->miercoles = $request->input('miercoles');
        $task->jueves = $request->input('jueves');
        $task->viernes = $request->input('viernes');
        $task->sabado = $request->input('sabado');
        $task->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
    }
}
