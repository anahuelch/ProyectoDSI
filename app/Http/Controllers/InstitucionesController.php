<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Institucion;
use Laracasts\Flash\Flash;

class InstitucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = Institucion::orderBy('id','DESC')->paginate(15);
        return view('admin.instituciones.index')->with('instituciones',$instituciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.instituciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instituciones = new Institucion($request->all());
        $instituciones->save();

        Flash::success("Se ha registrado la Institución " .$instituciones->nombre_institucion. " de manera Exitosa.");
        
        return redirect()->route('admin.instituciones.index');
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
        $institucion = Institucion::find($id);
        return view('admin.instituciones.edit')->with('institucion',$institucion);
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
        $institucion = Institucion::find($id);
        $institucion->nombre_institucion = $request->nombre_institucion;
        $institucion->pais_institucion = $request->pais_institucion;
        $institucion->direccion_institucion = $request->direccion_institucion;
        $institucion->fono_institucion = $request->fono_institucion;
        $institucion->descripcion_institucion = $request->descripcion_institucion;
        $institucion->save();

        Flash::warning('La institucion '.$institucion->nombre_institucion.' se hamodificado con exito.');
        return redirect()->route('admin.instituciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucion = Institucion::find($id);
        $institucion->delete();

        Flash::error('Se eliminó '.$institucion->nombre_institucion.' de forma exitosa.');
        return redirect()->route('admin.instituciones.index');
    }
}
