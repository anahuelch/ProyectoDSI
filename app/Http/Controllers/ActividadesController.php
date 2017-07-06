<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Actividad;
use Laracasts\Flash\Flash;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = Actividad::orderBy('id','DESC')->paginate(15);
        return view('admin.actividades.index')->with('actividades',$actividades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.actividades.create');
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
        $actividades = new Actividad($request->all());// Creación del modelo
        $actividades->save();

        Flash::success("Se ha registrado la Actividad " .$actividades->nombre_actividades. " de manera Exitosa.");
        
        return redirect()->route('admin.actividades.index');
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
        $actividad = Actividad::find($id);
        return view('admin.actividades.edit')->with('actividad',$actividad);
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
        $actividad = Actividad::find($id);
        $actividad->nombre_actividad = $request->nombre_actividad;
        $actividad->fecha_inicio_actividad = $request->fecha_inicio_actividad;
        $actividad->fecha_termino_actividad = $request->fecha_termino_actividad;
        $actividad->estado_actividad = $request->estado_actividad;
        $actividad->descripcion_actividad = $request->descripcion_actividad;
        $actividad->save();

        Flash::warning('La actividad '.$actividad->nombre_actividad.' se hamodificado con exito.');
        return redirect()->route('admin.actividades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad = Actividad::find($id);
        $actividad->delete();

        Flash::error('Se eliminó '.$actividad->nombre_actividad.' de forma exitosa.');
        return redirect()->route('admin.actividades.index');
    }
}
