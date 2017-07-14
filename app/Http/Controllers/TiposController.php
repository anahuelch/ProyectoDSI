<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo;
use Laracasts\Flash\Flash;

class TiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = Tipo::orderBy('id','DESC')->paginate(15);
        return view('admin.tipos.index')->with('tipos',$tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipos = new Tipo($request->all());
        $tipos->save();

        Flash::success("Se ha registrado el tipo de convenio " .$tipos->tipo_convenio. " de manera Exitosa.");
        
        return redirect()->route('admin.tipos.index');
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
        $tipo = Tipo::find($id);
        return view('admin.tipos.edit')->with('tipo',$tipo);
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
        $tipo = Tipo::find($id);
        $tipo->tipo_convenio = $request->tipo_convenio;
        $tipo->save();

        Flash::warning('El tipo de convenio '.$tipo->tipo_convenio.' se ha modificado con exito.');
        return redirect()->route('admin.tipos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = Tipo::find($id);
        $tipo->delete();

        Flash::error('Se eliminó el tipo de convenio '.$tipo->nombre_institucion.' de forma exitosa.');
        return redirect()->route('admin.tipos.index');
    }
}
