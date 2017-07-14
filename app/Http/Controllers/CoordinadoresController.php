<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Coordinador;
use Laracasts\Flash\Flash;

class CoordinadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coordinadores = Coordinador::orderBy('id','DESC')->paginate(15);
        return view('admin.coordinadores.index')->with('coordinadores',$coordinadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coordinadores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $coordinadores = new Coordinador($request->all());
        $coordinadores->save();

        Flash::success("Se ha registrado el Coordinador " .$coordinadores->nombre_coordinador. " de manera Exitosa.");
        
        return redirect()->route('admin.coordinadores.index');
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
        $coordinador = Coordinador::find($id);
        return view('admin.coordinadores.edit')->with('coordinador',$coordinador);
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
        $coordinador = Coordinador::find($id);
        $coordinador->rut_coordinador = $request->rut_coordinador;
        $coordinador->nombre_coordinador = $request->nombre_coordinador;
        $coordinador->sexo_coordinador = $request->sexo_coordinador;
        $coordinador->fono_coordinador = $request->fono_coordinador;
        $coordinador->correo_coordinador = $request->correo_coordinador;
        $coordinador->save();

        Flash::warning('El Coordinador '.$coordinador->nombre_coordinador.' se ha modificado con exito.');
        return redirect()->route('admin.coordinadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $coordinadores = Coordinador::find($id);
        $coordinadores->delete();

        Flash::error('Se eliminó '.$coordinadores->nombre_coordinador.' de forma exitosa.');
        return redirect()->route('admin.coordinadores.index');
    }
}
