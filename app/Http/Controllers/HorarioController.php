<?php

namespace App\Http\Controllers;
use App\Models\Horario;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Horario::all();
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
        $horario = new Horario();
        $horario->hora = $request->input('hora');
        $horario->domingo = $request->input('domingo');
        $horario->lunes = $request->input('lunes');
        $horario->martes = $request->input('martes');
        $horario->miercoles = $request->input('miercoles');
        $horario->jueves = $request->input('jueves');
        $horario->viernes = $request->input('viernes');
        $horario->sabado = $request->input('sabado');
        $horario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Horario::findOrFail($id);
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
        $horario = Horario::findOrFail($id);
        $horario->hora = $request->input('hora');
        $horario->domingo = $request->input('domingo');
        $horario->lunes = $request->input('lunes');
        $horario->martes = $request->input('martes');
        $horario->miercoles = $request->input('miercoles');
        $horario->jueves = $request->input('jueves');
        $horario->viernes = $request->input('viernes');
        $horario->sabado = $request->input('sabado');
        $horario->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Horario = Horario::findOrFail($id);
        $Horario->delete();
    }
}
