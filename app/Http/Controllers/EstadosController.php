<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Estado;
use Laracasts\Flash\Flash;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::orderBy('id','DESC')->paginate(15);
        return view('admin.estados.index')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estados = new Estado($request->all());
        $estados->save();

        Flash::success("Se ha registrado el estado " .$estados->estado. " de manera Exitosa.");
        
        return redirect()->route('admin.estados.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estado = Estado::find($id);
        return view('admin.estados.edit')->with('estado',$estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado = Estado::find($id);
        return view('admin.estados.edit')->with('estado',$estado);
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
        $estado = Estado::find($id);
        $estado->estado = $request->estado;
        $estado->save();

        Flash::warning('El estado '.$estado->estado.' se ha modificado con exito.');
        return redirect()->route('admin.estados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estado = Estado::find($id);
        $estado->delete();

        Flash::error('Se eliminó '.$estado->estado.' de forma exitosa.');
        return redirect()->route('admin.estados.index');
    }
}
