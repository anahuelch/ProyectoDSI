<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Objetivo;
use Laracasts\Flash\Flash;

class ObjetivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objetivos = Objetivo::orderBy('id','DESC')->paginate(15);
        return view('admin.objetivos.index')->with('objetivos',$objetivos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.objetivos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $objetivos = new Objetivo($request->all());
        $objetivos->save();

        Flash::success("Se ha registrado el Objetivo con exito");
        
        return redirect()->route('admin.objetivos.index');
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
        $objetivos = Objetivo::find($id);
        return view('admin.objetivos.edit')->with('objetivos',$objetivos);
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
        
        $objetivos = Objetivo::find($id);
        $objetivos->objetivo = $request->objetivo;
        $objetivos->descripcion_objetivo = $request->descripcion_objetivo;
   
        $objetivos->save();

        Flash::warning('El Objetivo '.$objetivos->objetivo.' se ha modificado con exito.');
        return redirect()->route('admin.objetivos.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objetivos = Objetivo::find($id);
        $objetivos->delete();

        Flash::error('Se eliminó el objetivo seleccionado de forma exitosa.');
        return redirect()->route('admin.objetivos.index');
    }
}
